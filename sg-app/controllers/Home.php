<?php

	class Home extends BaseController 
	{

			public function __construct()
			{
				parent::__construct();
			}

			public function index()
			{
				$this->render('home/index');
			}
	}

?>