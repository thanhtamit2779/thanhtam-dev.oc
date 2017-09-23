<?php 
class ControllerExtensionModuleProductsFromCat extends Controller {

	public function index($setting) {
		static $module = 0;
		$this->language->load('extension/module/products_from_cat');
		
		$this->load->model('catalog/product');
		$this->load->model('catalog/category');
		$this->load->model('tool/image');		
		$this->load->model('extension/module/products_from_cat');

		$this->document->addScript('public/plugins/slider/multislider/multislider.min.js', 'footer');

		$limit = html_entity_decode($setting['limit']);
		
		$link = html_entity_decode($setting['link']);

		$data = array() ;

		// Category
		if(!empty($setting['categories'])) {
			$category_id   = $setting['categories'][0];		
			$category_info = $this->model_catalog_category->getCategory($category_id);

			if ($category_info) {

				if ($category_info['image']) {
					$thumb = $this->model_tool_image->resize($category_info['image'], 270 , 270);
				} else {
					$thumb = '';
				}

				$data['categories']['parent'] = array(
					'thumb' => $thumb,
					'text' 	=> $category_info['name'],
					'href' 	=> $this->url->link('product/category', 'path=' . $category_id),
				);

				// ĐỌC DỮ LIỆU TỪ FILE CACHE
				$categories = $this->cache->get('product.category.' . $category_id ) ;

				// CHƯA CÓ CACHE: LẤY DỮ LIỆU => LƯU LẠI CACHE
				if(!$categories) {
					$get_category = $this->model_catalog_category->getCategories($category_id);
					$this->cache->set('product.category.' . $category_id , $get_category);
					// ĐỌC DỮ LIỆU TỪ FILE CACHE
					$categories = $this->cache->get('product.category.' . $category_id) ;
				}
				
				if( !empty($categories) ) {
					foreach ($categories as $result) {
						$data['categories']['children'][] = array(
							'name' 		=> $result['name'],
							'cat_id' 	=> $result['category_id'],
							'href' 		=> $this->url->link('product/category', 'path=' . $result['category_id'])
						);
					}
				}
			}
		}
	
		$data['products'] = array();

		// ĐỌC DỮ LIỆU TỪ FILE CACHE
		$products = $this->cache->get('product.product_as_category.' .$category_id) ;

		// CHƯA CÓ CACHE: LẤY DỮ LIỆU => LƯU LẠI CACHE
		if(!$products) {
			$get_product = $this->model_extension_module_products_from_cat->getProducts($setting);
			$this->cache->set('product.product_as_category.' .$category_id, $get_product);
			
			// ĐỌC DỮ LIỆU TỪ FILE CACHE
			$products = $this->cache->get('product.product_as_category.' .$category_id) ;
		}

		$products = $this->model_extension_module_products_from_cat->getProducts($setting);

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

		$data['ajax_load_product'] = HTTPS_SERVER;
		$data['module'] = $module++;
		return $this->load->view('extension/module/products_from_cat', $data);
	}
}
?>