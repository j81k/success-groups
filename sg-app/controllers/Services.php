<?php

class Services extends BaseController 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('service_model');
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
        $data = [
            'packages'  => $this->service_model->get_packages()
        ];
        $this->render('services/tour_packages', $data);
    }
    
    public function package($package_slug = 'temple-pooja-package')
    {
        $data = [
            'package'   => $this->service_model->get_package($package_slug),
            //'title'     => get_friendly_name($package_slug)
        ];
        $this->render('services/package', $data);
    }
}