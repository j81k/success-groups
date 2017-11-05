<?php 
	

	class BaseController extends CI_Controller 
	{

		public function __construct()
		{
			parent::__construct();
                        date_default_timezone_set(TIMEZONE);
                        
			$segments = $this->uri->segments;
			$this->controller_name = empty($segments[1]) ? 'home' : $segments[1]; 
                        $this->page_name = end($segments);
			defined('BASE_URL') OR define('BASE_URL', base_url('/'));
			defined('IS_HOME') OR define('IS_HOME', $this->controller_name ==  'home' ? true : false); 
		}

		public function render($page = 'home/index', $args = [])
		{

			$this->load->view('templates/header', $args);
			$this->load->view($page, $args);
			$this->load->view('templates/footer', $args);	

		}
	}
?>