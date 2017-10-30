<?php

	class About_Us extends BaseController 
	{
		public function __construct()
		{
			parent::__construct();
		}

		public function index()
		{
			$this->render('about-us/index');
		}

	}

?>
