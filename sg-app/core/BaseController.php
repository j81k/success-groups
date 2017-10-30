<?php 
	

	class BaseController extends CI_Controller 
	{

		public function __construct()
		{
			parent::__construct();

			defined('BASE_URL') OR define('BASE_URL', base_url('/')); 
		}

		public function render($page = 'home/index', $args = [])
		{

			$this->load->view('templates/header', $args);
			$this->load->view($page, $args);
			$this->load->view('templates/footer', $args);	

		}
	}
?>