<?php

	class Home extends BaseController 
	{

			public function __construct()
			{
				parent::__construct();
			}

			public function index()
			{
                                $vechiles = $this->common_model->get_vechiles();
				$this->render('home/index', ['vechiles' => $vechiles]);
			}
	}

?>