<?php

class Common_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function get_rand_str($digits = 15)
    {
        /*$q = $this->db->query("SELECT UPPER(SUBSTR(REPLACE(UUID(),'-',''),1,". $digits .")) as ran"); //SELECT lpad(conv(floor(rand()*pow(36," . $digits . ")), 10, 36), " . $digits . ", 0) AS ran");
        $q = $q->row_array(); 
        return $q['ran'];*/
        
        $str = strtoupper(bin2hex(openssl_random_pseudo_bytes(ceil($digits/2))));
        if (strlen($str) > $digits) {
            return substr($str, 0, -1);
        }
        
        return $str;
    }
    
    public function get_vechiles($where = ['status' => 1])
    {
        $q = $this->db->get_where(TBL_VECHILES_MASTER, $where);
        return $q->result_array();
    }
}