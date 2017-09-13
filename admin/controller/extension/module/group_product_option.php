<?php
class ControllerExtensionModuleGroupProductOption extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('extension/module/group_product_option');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('setting/module');
		$this->load->model('catalog/product');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			if (!isset($this->request->get['module_id'])) {
				$this->model_setting_module->addModule('group_product_option', $this->request->post);
			} else {
				$this->model_setting_module->editModule($this->request->get['module_id'], $this->request->post);
			}
			$this->session->data['success'] = $this->language->get('text_success');

			//$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
		}

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		/*------------------------------------------------------
		|	THÔNG BÁO LỖI
		|------------------------------------------------------
		*/

			// TÊN MODULE
			if (isset($this->error['name'])) {
				$data['error_name'] = $this->error['name'];
			} else {
				$data['error_name'] = '';
			}

			// CHIỀU RỘNG
			if (isset($this->error['width'])) {
				$data['error_width'] = $this->error['width'];
			} else {
				$data['error_width'] = '';
			}

			// CHIỀU CAO
			if (isset($this->error['height'])) {
				$data['error_height'] = $this->error['height'];
			} else {
				$data['error_height'] = '';
			}

			// SỐ LƯỢNG
			if (isset($this->error['limit'])) {
				$data['error_limit'] = $this->error['limit'];
			} else {
				$data['error_limit'] = '';
			}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
		);

		if (!isset($this->request->get['module_id'])) {
			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('heading_title'),
				'href' => $this->url->link('extension/module/group_product_option', 'user_token=' . $this->session->data['user_token'], true)
			);
		} else {
			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('heading_title'),
				'href' => $this->url->link('extension/module/group_product_option', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true)
			);
		}

		if (!isset($this->request->get['module_id'])) {
			$data['action'] = $this->url->link('extension/module/group_product_option', 'user_token=' . $this->session->data['user_token'], true);
		} else {
			$data['action'] = $this->url->link('extension/module/group_product_option', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true);
		}

		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

		if (isset($this->request->get['module_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
			$module_info = $this->model_setting_module->getModule($this->request->get['module_id']);
		}

		if (isset($this->request->post['name'])) {
			$data['name'] = $this->request->post['name'];
		} elseif (!empty($module_info)) {
			$data['name'] = $module_info['name'];
		} else {
			$data['name'] = '';
		}

		/*------------------------------------------------------
		|	NHẬN VÀ TRUYỀN DỮ LIỆU HIỂN THỊ CHO VIEW
		|------------------------------------------------------
		*/
			// CHIỀU RỘNG
			if (isset($this->request->post['width'])) {
				$data['width'] = $this->request->post['width'];
			} elseif (!empty($module_info)) {
				$data['width'] = $module_info['width'];
			} else {
				$data['width'] = '';
			}

			// CHIỀU CAO
			if (isset($this->request->post['height'])) {
				$data['height'] = $this->request->post['height'];
			} elseif (!empty($module_info)) {
				$data['height'] = $module_info['height'];
			} else {
				$data['height'] = '';
			}

			// SỐ LƯỢNG SẢN PHẨM
			if (isset($this->request->post['limit'])) {
				$data['limit'] = $this->request->post['limit'];
			} elseif (!empty($module_info)) {
				$data['limit'] = $module_info['limit'];
			} else {
				$data['limit'] = '';
			}

			// TRẠNG THÁI
			if (isset($this->request->post['status'])) {
				$data['status'] = $this->request->post['status'];
			} elseif (!empty($module_info)) {
				$data['status'] = $module_info['status'];
			} else {
				$data['status'] = '';
			}

			// NHÓM SẢN PHẨM
			if (isset($this->request->post['group_product'])) {
				$data['group_product'] = $this->request->post['group_product'];
			} elseif (!empty($module_info)) {
				$data['group_product'] = $module_info['group_product'];
			} else {
				$data['group_product'] = '';
			}
			$data['text_group_products'] = $this->language->get('text_group_products') ;

			// KIỂU
			if (isset($this->request->post['type'])) {
				$data['type'] = $this->request->post['type'];
			} elseif (!empty($module_info)) {
				$data['type'] = $module_info['type'];
			} else {
				$data['type'] = '';
			}
			$data['text_types'] = $this->language->get('text_types') ;

			$data['user_token'] = $this->session->data['user_token'];

			$data['products'] = array();
			
			if (!empty($_POST['meta']['featured_pid'])) {
				$products = $_POST['meta']['featured_pid'];
			} elseif (!empty($module_info['meta']['featured_pid'])) {
				$products = $module_info['meta']['featured_pid'];
			} else {
				$products = array();
			}
	
			foreach ($products as $product_id) {
				$product_info = $this->model_catalog_product->getProduct($product_id);
	
				if ($product_info) {
					$data['products'][] = array(
						'product_id' => $product_info['product_id'],
						'name'       => $product_info['name']
					);
				}
			}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/group_product_option', $data));
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/module/group_product_option')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if ((utf8_strlen($this->request->post['name']) < 3) || (utf8_strlen($this->request->post['name']) > 64)) {
			$this->error['name'] = $this->language->get('error_name');
		}

		if (!$this->request->post['width']) {
			$this->error['width'] = $this->language->get('error_width');
		}

		if (!$this->request->post['height']) {
			$this->error['height'] = $this->language->get('error_height');
		}

		if (!$this->request->post['limit']) {
			$this->error['limit'] = $this->language->get('error_limit');
		}
		
		return !$this->error;
	}
}