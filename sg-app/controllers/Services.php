<?php

class Services extends BaseController 
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
        $this->package();
    }
    
    public function success_call_drivers()
    {
        $this->render('services/success_call_drivers');
    }
    
    public function success_travels()
    {
        $this->render('services/success_travels');
    }
    
    
    
    
    public function package($package_name = 'honey-moon')
    {
        $data = [
            'title' => get_friendly_name($package_name)
        ];
        $this->render('services/package', $data);
    }
}