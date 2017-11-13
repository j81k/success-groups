<?php

class Service_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function get_package($package_slug)
    {
        $args = [
            'status'        => 1,
            'package_slug'  => $package_slug
        ];
        $q = $this->db->get_where(TBL_PACKAGES, $args);
        return $q->row_array();
    }
    
    public function get_packages()
    {
        $args = [
            'status'    => 1
        ];
        
        $q = $this->db->get_where(TBL_PACKAGES, $args);
        return $q->result_array();
    }
    
    
    
}