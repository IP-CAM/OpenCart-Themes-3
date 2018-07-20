<?php
class ControllerPhpnerHeader extends Controller
{
	public function index()
	{
		/* load files*/

		$this->load->language('setting/setting');
		$this->load->model('phpner/settings');

		/*end load*/

		if ($this->request->server['REQUEST_METHOD'] == 'POST')
		{
			$this->model_phpner_settings->editSetting('config', $this->request->post);
		}

		$data['text_near_logo']  =  $this->model_phpner_settings->getSetting('text_near_logo');
		/* get Controller*/

		$data['header']      = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer']      = $this->load->controller('common/footer');

		/*End Controller*/

		/*Load lang*/
		$data['heading_title'] = $this->language->get('heading_title_phpner');
		$data['entry_logo'] = $this->language->get('entry_logo');
		$data['entry_icon'] = $this->language->get('entry_icon');
		$data['tab_general'] = $this->language->get('tab_general');
		$data['tab_image'] = $this->language->get('tab_image');
		$data['button_save'] = $this->language->get('button_save');

		/*  breadcrumbs   */
		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'token=' . $this->session->data['token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title_phpner'),
			'href' => $this->url->link('phpner/header', 'token=' . $this->session->data['token'], true)
		);

		/*End load lang*/

		$data['action'] = $this->url->link('phpner/header', 'token=' . $this->session->data['token'], true);
		$data['help_icon'] = $this->language->get('help_icon');

		if (isset($this->request->post['config_logo'])) {
			$data['config_logo'] = $this->request->post['config_logo'];
		} else {
			$data['config_logo'] = $this->config->get('config_logo');
		}

		if (isset($this->request->post['config_logo']) && is_file(DIR_IMAGE . $this->request->post['config_logo'])) {
			$data['logo'] = $this->model_tool_image->resize($this->request->post['config_logo'], 100, 100);
		} elseif ($this->config->get('config_logo') && is_file(DIR_IMAGE . $this->config->get('config_logo'))) {
			$data['logo'] = $this->model_tool_image->resize($this->config->get('config_logo'), 100, 100);
		} else {
			$data['logo'] = $this->model_tool_image->resize('no_image.png', 100, 100);
		}

		if (isset($this->request->post['config_icon'])) {
			$data['config_icon'] = $this->request->post['config_icon'];
		} else {
			$data['config_icon'] = $this->config->get('config_icon');
		}

		if (isset($this->request->post['config_icon']) && is_file(DIR_IMAGE . $this->request->post['config_icon'])) {
			$data['icon'] = $this->model_tool_image->resize($this->request->post['config_icon'], 100, 100);
		} elseif ($this->config->get('config_icon') && is_file(DIR_IMAGE . $this->config->get('config_icon'))) {
			$data['icon'] = $this->model_tool_image->resize($this->config->get('config_icon'), 100, 100);
		} else {
			$data['icon'] = $this->model_tool_image->resize('no_image.png', 100, 100);
		}




		$this->response->setOutput($this->load->view('phpner/header.tpl', $data));
	}
}
?>