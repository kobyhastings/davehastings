<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['main_content'] = 'public/index';
		$this->db->order_by('date', 'desc');
		$data['posts'] = $this->db->get('blogposts', 3)->result();
		$this->load->view('public/includes/template', $data);
	}

	public function blog()
	{
		$data['main_content'] = 'public/blog';
		$this->load->view('public/includes/template', $data);
	}

	public function about()
	{
		$data['main_content'] = 'public/about';
		$data['content'] = $this->db->get('about', 1)->row()->content;
		$this->load->view('public/includes/template', $data);
	}

	public function contact()
	{
		$data['main_content'] = 'public/contact';
		$this->load->view('public/includes/template', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */