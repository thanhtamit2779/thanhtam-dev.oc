<?php
class ControllerExtensionModuleGroupProductOption extends Controller {
	public function index($setting) {
		static $module = 0;

		$this->load->model('catalog/product');		
		$this->load->model('tool/image');

		$this->document->addStyle('public/plugins/slick/slick.css');
		$this->document->addScript('public/plugins/slick/slick.min.js', 'footer');
		$data = array();

		$group_products = $setting['group_product'];
		
		// KHÔNG CHỌN NHÓM SẢN PHẨM: DỪNG CHƯƠNG TRÌNH
		if(empty($group_products)) return FALSE;
		
		// LOAD NHÓM SẢN PHẨM ĐƯỢC CHỌN 
		foreach($group_products as $group_product) {
			$method = 'get' . ucfirst($group_product);
			$data['group_products'][$group_product] = $this->$method($setting) ;
		}

		$data['product_template'] = $this->load->view('common/product/test') ;
		$data['module'] = $module++;
		return $this->load->view('extension/module/group_product_option', $data);
	}

	// LẤY SẢN PHẨM MỚI NHẤT
	public function getLatest($setting = null) {
		$this->load->language('extension/module/latest');
		$data = array();

		$filter_data = array(
			'sort'  => 'p.date_added',
			'order' => 'DESC',
			'start' => 0,
			'limit' => $setting['limit']
		);

		// GET CACHE
		$results = $this->cache->get('catalog.module.last_product');

		// CHƯA CÓ CACHE -> LẤY DỮ LIỆU -> GET CACHE
		if(!$results) {
			$set_cache = $this->cache->set('catalog.module.last_product', $this->model_catalog_product->getProducts($filter_data)) ;
			$results = $this->cache->get('catalog.module.last_product');
		}

		if(empty($results)) return $data ;

		// DUYỆT DỮ LIỆU
		$data['heading_title'] = $this->language->get('heading_title');
		foreach ($results as $result) {
			$data['products'][] = $this->setProduct($result, $setting) ;
		}	

		return $data;
	}

	// LẤY SẢN PHẨM NỔI BẬT
	private function getFeatured($setting = null) {
		$this->load->language('extension/module/featured');
		$data = array();
	
		$featured_pids = $setting['meta']['featured_pid'];
		if(empty($featured_pids)) return $data;

		// GET CACHE
		$product_data = $this->cache->get('catalog.module.featured_product');
		
		// CHƯA CÓ CACHE -> LẤY DỮ LIỆU -> GET CACHE
		if(!$product_data) {
			$products = array_slice($featured_pids, 0, (int)$setting['limit']);
			foreach ($products as $product_id) {
				$product_info = $this->model_catalog_product->getProduct($product_id);
				if ($product_info) {
					$data['products'][] = $this->setProduct($product_info, $setting) ;	
				}
			}
			$set_cache 	  = $this->cache->set('catalog.module.featured_product', $data['products']) ;
			$product_data = $this->cache->get('catalog.module.featured_product');
		}

		if(empty($product_data)) return $data;

		$data['heading_title'] = $this->language->get('heading_title');
		$data['products'] 	   = $product_data ;
		return $data;		
	}

	// LẤY SẢN PHẨM BÁN CHẠY
	private function getBestseller($setting = NULL) {
		$this->load->language('extension/module/bestseller');
		$data = array();

		// GET CACHE
		$results = $this->cache->get('catalog.module.bestseller_product');

		// CHƯA CÓ CACHE -> LẤY DỮ LIỆU -> GET CACHE
		if(!$results) {
			$set_cache = $this->cache->set('catalog.module.bestseller_product', $this->model_catalog_product->getBestSellerProducts($setting['limit'])) ;
			$results = $this->cache->get('catalog.module.bestseller_product');
		}

		if(empty($results)) return $data ;
		
		// DUYỆT DỮ LIỆU
		$data['heading_title'] = $this->language->get('heading_title');
		foreach ($results as $result) {
			$data['products'][] = $this->setProduct($result, $setting) ;
		}

		return $data;
	}

	// LẤY SẢN PHẨM KHUYẾN MÃI
	private function getSpecial($setting = null) {
		$this->load->language('extension/module/special');
		$data = array();

		$filter_data = array(
			'sort'  => 'pd.name',
			'order' => 'ASC',
			'start' => 0,
			'limit' => $setting['limit']
		);

		// GET CACHE
		$results = $this->cache->get('catalog.module.special_product');

		// CHƯA CÓ CACHE -> LẤY DỮ LIỆU -> GET CACHE
		if(!$results) {
			$set_cache = $this->cache->set('catalog.module.special_product', $this->model_catalog_product->getProductSpecials($filter_data)) ;
			$results = $this->cache->get('catalog.module.special_product');
		}

		if(empty($results)) return $data ;

		// DUYỆT DỮ LIỆU
		$data['heading_title'] = $this->language->get('heading_title');
		foreach ($results as $result) {
			$data['products'][] = $this->setProduct($result, $setting) ;
		}	

		return $data;
	}

	// GÁN CÁC THÔNG SỐ CHO SẢN PHẨM
	public function setProduct($result, $setting = null) {
		$data = array();
		if(empty($result)) return $data ;
		
		if ($result['image']) {
			$image = $this->model_tool_image->resize($result['image'], $setting['width'], $setting['height']);
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

			// GIÁ KHUYẾN MÃI
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

		$data = array(
			'product_id'  => $result['product_id'],
			'percent'     => $percent,
			'thumb'       => $image,
			'name'        => $result['name'],
			'description' => utf8_substr(trim(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8'))), 0, $this->config->get('theme_' . $this->config->get('config_theme') . '_product_description_length')) . '..',
			'price'       => $price,
			'special'     => $special,
			'tax'         => $tax,
			'rating'      => $rating,
			'href'        => $this->url->link('product/product', 'product_id=' . $result['product_id'])
		);
		
		return $data;
	}
}