<?php

class Attachments extends BaseController
{
	public function __construct()
	{
		parent::__construct();

	}

	public function index()
	{
		$this->render('attachments/index');
	}
}