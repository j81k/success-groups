<?php

class Gallery extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
        $this->render('gallery/index');
    }
}