<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('membership_model');
	}

	public function index() {
		$this->membership_model->loggedin() == FALSE || redirect('admin/dashboard');
		
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == TRUE) {
			if ($this->membership_model->login() == TRUE) {
				redirect('admin/dashboard');
			} else {
				$this->session->set_flashdata('error', 'That email/password combination does not exist');
				redirect('login/');
			}
		}

		$data['main_content'] = 'login/login';
		$this->load->view('public/includes/template', $data);
	}

	public function logout() {
		$this->membership_model->logout();
		redirect('public/home');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */