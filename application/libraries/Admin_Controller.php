<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_Controller extends MY_Controller {

	function __construct() {
		parent::__construct();
		$this->data['meta_title'] = "Site Manager";
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('membership_model');
		
		// Login Check
		$exceptions = array( 'login', 'login/logout');

		if (in_array(uri_string(), $exceptions) == false ) {
			if ($this->membership_model->loggedin() == FALSE) {
				redirect('login');
			}
		}

	}
}

/* End of file Admin_Controller.php */
/* Location: ./application/libraries/Admin_Controller.php */