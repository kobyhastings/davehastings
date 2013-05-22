<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Manufacturer_Controller extends MY_Controller {

	function __construct() {
		parent::__construct();
		$this->data['meta_title'] = "Manufacturer Dashboard";
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('membership_model');

		//Login Check
		$exceptions = array( 'public/login/index', 'public/login/logout');

		if (in_array(uri_string(), $exceptions) == false ) {
			if ($this->membership_model->loggedin() == FALSE) {
				redirect('public/login');
			}
		}
	}
}

/* End of file Manufacturer_Controller.php */
/* Location: ./application/libraries/Manufacturer_Controller.php */