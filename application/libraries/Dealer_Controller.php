<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dealer_Controller extends MY_Controller {

	public $dealer = array();

	function __construct() {
		parent::__construct();
		$this->load->model('dealer_model');
		$this->load->model('membership_model');
		$this->data['meta_title'] = "Dealer Dashboard";
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('encrypt');
		
		//Login Check
		$exceptions = array( 'public/login/index', 'public/login/logout');
		if (in_array(uri_string(), $exceptions) == false ) {
			if ($this->membership_model->loggedin() == FALSE) {
				redirect('public/login');
			}
		}

		//Dealer registration check
		$exceptions = array( 'dealer/register');
		if (in_array(uri_string(), $exceptions) == false ) {
			if ($this->dealer_model->isRegistered() == FALSE) {
				redirect('dealer/register');
			}
			else {
				$userID = $this->session->userdata('userID');
				$this->dealer = $this->dealer_model->get_by(array('dealerUserID'=>$userID), TRUE);
			}
		}
	}

}

/* End of file Store_Controller.php */
/* Location: ./application/libraries/Dealer_Controller.php */