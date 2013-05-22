<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('membership_model');
	}

	public function index() {
		if ($this->membership_model->login() == TRUE)
			redirect('admin/home');
		else {
			$data['main_content'] = 'public/invalid';
			$this->load->view('public/includes/template', $data);
		}
	}

	public function logout() {
		$this->membership_model->logout();
		redirect('public/home');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */