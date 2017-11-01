<?php

class Ajax_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function submitContact()
    {
        $post = $this->input->post();
        parse_str($post['data'], $data);
        
        $args = [
            'cnt_name'          => $data['enq_name'],
            'cnt_email'         => $data['enq_email'],
            'cnt_contact_no'    => $data['enq_contact_no'],
            'cnt_description'   => htmlspecialchars($data['enq_desc'])
        ];
        
        $this->db->insert(TBL_CONTACT, $args);
        $args['_id'] = $this->db->insert_id();
        return $args;
    }
}