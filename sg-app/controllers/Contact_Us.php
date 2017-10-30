<?php

class Contact_Us extends BaseController
{
	public function __construct()
	{
		parent::__construct();

	}

	public function index()
	{
		$this->render('contact-us/index');
	}
}