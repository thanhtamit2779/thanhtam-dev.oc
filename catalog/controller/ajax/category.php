<?php
    class ControllerAjaxCategory extends Controller {
        public function getProductCategory() {
            $json = array(
                'status' => 0,
                'data'   => null
            ) ;

            $this->response->addHeader('Content-Type: application/json');

            $category_id = isset($this->request->post['category_id']) ? $this->request->post['category_id'] : '';
            if( empty($category_id) ) {
                return $this->response->setOutput(json_encode($json));
            }

            $this->load->model('catalog/category');          
            $this->load->model('catalog/product');
            $this->load->model('tool/image');

            $page  = 1;
            $sort  = 'p.sort_order';
            $order = 'ASC';
            $limit = 10;

            $filter_data = array(
				'filter_category_id' => $category_id,
				'sort'               => $sort,
				'order'              => $order,
				'start'              => ($page - 1) * $limit,
				'limit'              => $limit
            );
            
            $products = $this->model_catalog_product->getProducts($filter_data);
            if( empty($products) ) {
                return $this->response->setOutput(json_encode($json));
            }
            
            foreach ($products as $result) {
                    if ($result['image']) {
                        $image = $this->model_tool_image->resize($result['image'], 270, 270);
                    } else {
                        $image = $this->model_tool_image->resize('placeholder.png', $setting['width'], $setting['height']);
                    }
    
                    if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
                        $price = $this->currency->format($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
                    } else {
                        $price = false;
                    }
    
                    if ((float)$result['special']) {
                        // HIỂN THỊ GIẢM BAO NHIÊU % KHUYẾN MÃI
                        $percent = ( 1 - ($result['special']/$result['price']) ) * 100;
                        $percent = ceil($percent) ;
                        
                        $special = $this->currency->format($this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
                    } else {
                        // HIỂN THỊ GIẢM BAO NHIÊU % KHUYẾN MÃI
                        $percent = 0;
    
                        $special = false;
                    }
    
                    if ($this->config->get('config_tax')) {
                        $tax = $this->currency->format((float)$result['special'] ? $result['special'] : $result['price'], $this->session->data['currency']);
                    } else {
                        $tax = false;
                    }
    
                    if ($this->config->get('config_review_status')) {
                        $rating = $result['rating'];
                    } else {
                        $rating = false;
                    }
                    $data['products'][] = array(
                        'product_id'  => $result['product_id'],
                        'thumb'       => $image,
                        'percent'     => $percent,
                        'name'        => $result['name'],
                        'description' => utf8_substr(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8')), 0, $this->config->get($this->config->get('config_theme') . '_product_description_length')) . '..',
                        'price'       => $price,
                        'special'     => $special,
                        'tax'         => $tax,
                        'rating'      => $rating,
                        'href'        => $this->url->link('product/product', 'product_id=' . $result['product_id'])
                    );
            }

            $response = $this->load->view('ajax/category/product', $data);
            $json = array('status' => 1,
                          'data'   => $response
            );

            return $this->response->setOutput(json_encode($json));
        }
        
    }