<?php
class ControllerExtensionModuleSlideshow extends Controller {
	public function index($setting) {
		static $module = 0;	
	
		$this->load->model('design/banner');
		$this->load->model('tool/image');

		$data['banners'] = array();
		$data['width'] = $setting['width'] ;
		$data['height'] = $setting['height'] ;

		// CACHE FILE: SYSTEM/STORAGE/CACHE
		$results = $this->cache->get('catalog.extension.module.slideshow' . $setting['banner_id']);
		if(! $results ) {
			$set_sliders = $this->model_design_banner->getBanner($setting['banner_id']);
			if( empty($set_sliders)) return FALSE ;
			$this->cache->set('catalog.extension.module.slideshow' . $setting['banner_id'], $set_sliders);
			$results = $this->cache->get('catalog.extension.module.slideshow' . $setting['banner_id']);
		}

		foreach ($results as $result) {
			if (is_file(DIR_IMAGE . $result['image'])) {
				$data['banners'][] = array(
					'title' => $result['title'],
					'link'  => $result['link'],
					'image' => $this->model_tool_image->resize($result['image'], $setting['width'], $setting['height'])
				);
			}
		}

		$data['module'] = $module++;

		return $this->load->view('extension/module/slideshow', $data);
	}
}