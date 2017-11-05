<?php

class Services extends BaseController 
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
        $this->tour_package();
    }
    
    public function success_call_drivers()
    {
        $vechiles = $this->common_model->get_vechiles();
        $this->render('services/success_call_drivers', ['vechiles' => $vechiles]);
    }
    
    public function success_travels()
    {
        $vechiles = $this->common_model->get_vechiles();
        $this->render('services/success_travels', ['vechiles' => $vechiles]);
    }
    
    
    public function tour_packages()
    {
        $this->render('services/tour_packages');
    }
    
    public function package($package_name = 'honey-moon')
    {
        $data = [
            'title' => get_friendly_name($package_name)
        ];
        $this->render('services/package', $data);
    }
}