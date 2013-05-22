<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Public_Controller extends MY_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->library('encrypt');
		$this->load->helper('form');
		$this->load->library('form_validation');
	}
}

/* End of file Public_Controller.php */
/* Location: ./application/libraries/Public_Controller.php */