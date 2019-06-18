<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Frm_5 extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 	public function __construct()
	{
		parent::__construct();
		//session_start();
		$this->load->helper('url');
		//$this->load->model('M_alineacion');
		//$this->load->library('session');
	}
	public function index()
	{
		$this->load->view('masterpage/head');
		$this->load->view('frm_5');
		$this->load->view('masterpage/footer');
	}
}
