<?php

class Ajax_Model extends CI_Model
{
    private $post;
    private $data;
    
    public function __construct()
    {
        parent::__construct();
        
        $this->post = $this->input->post();
        if (is_string($this->post['data'])) {
            // Serialized string
            parse_str($this->post['data'], $this->data);
        } else {
            $this->data = $this->post['data'];
        }
        
    }
    
    public function check_customer_exists()
    {
        $now = date("Y-m-d H:i:s");
        $this->db->select('id');
        if (!empty($this->data['contact_no']) && !empty($this->data['email']) ) {
            $this->db->where('contact_no', $this->data['contact_no']);
            $this->db->or_where('email', $this->data['email']);

        } else if (!empty($this->data['email'])) {
            $this->db->where('email', $this->data['email']);

        } else if (!empty($this->data['contact_no'])) {
            $this->db->where('contact_no', $this->data['contact_no']);
        }

        $q = $this->db->get_where(TBL_CUSTOMER_MASTER, []);
        $customer = $q->row_array();
        $customer_id = $customer['id'];

        if (empty($customer_id)) {
            // Not exists, Insert Customer Master

            $args = [
                'username'  => get_var_name($this->data['name'], ''),
                'email'     => $this->data['email'],
                'display_name'=> $this->data['name'],
                'contact_no'=> $this->data['contact_no'],
                'created_on' => $now,
                'updated_on' => $now,
            ];

            $this->db->insert(TBL_CUSTOMER_MASTER, $args);
            $customer_id = $this->db->insert_id();
        }

        return $customer_id;
    }
    
    public function submitAttachments()
    {
        pre($this->data);
        
        // Check customer already exists
        $customer_id = $this->check_customer_exists();
        
        // Insert customer booking details
        $args = [
            'customer_id'   => $customer_id,
            'name'          => $this->data['name'],
            'contact_no'    => $this->data['contact_no'],
            'address_1'     => $this->data['address'],
            'location'      => $this->data['location'],
            'created_on' => $now,
        ];
        
        $this->db->insert(TBL_CUSTOMER_DETAILS, $args);
        $customer_details_id = $this->db->insert_id();
        
        // Attachments
        $args = [
            'ref_id'                => $this->common_model->get_rand_str(18),
            'customer_id'           => $customer_id,
            'customer_details_id'   => $customer_details_id,
            'vechile_id'            => $this->data['vechile_type'],
            'vechile_year'          => $this->data['vechile_year'],
            'vechile_no'            => $this->data['vechile_no'],
            'driver_type'           => $this->data['driver_type'],
            
            'have_rc_book'          => empty($this->data['doc_rc_book']) == false && $this->data['doc_rc_book'] == 'on' ? 1 : 0,
            'have_all_permit'       => empty($this->data['doc_all_permit']) == false && $this->data['doc_all_permit'] == 'on' ? 1 : 0,
            'have_state_permit'     => empty($this->data['doc_state_permit']) == false && $this->data['doc_state_permit'] == 'on' ? 1 : 0,
            'have_insurance'        => empty($this->data['insurance']) == false && $this->data['insurance'] == 'on' ? 1 : 0,
            'have_driving_license'  => empty($this->data['driving_license']) == false && $this->data['driving_license'] == 'on' ? 1 : 0,
            
            'created_on'            => $now,
            'updated_on'            => $now,
            
        ];
        
        $this->db->insert(TBL_ATTACHMENTS, $args);
        
        return [
            '_id'       => $args['ref_id'],
            'name'      => $this->data['name'],
            'contact_no'=> $this->data['contact_no']
        ];
        
    }
    
    public function submitRequest()
    {
        
        $args = [
            'name'      => $this->data['name'],
            'contact_no'=> $this->data['contact_no'],
            'created_on'=> date("Y-m-d H:i:s")
        ];
        
        $this->db->insert(TBL_REQUEST_CALLBACK, $args);
        
        return [
            '_id'       => $this->db->insert_id(),
            'name'      => $this->data['name'],
            'contact_no'=> $this->data['contact_no'],
        ];
    }
    
    public function submitPackage()
    {
        $now = date("Y-m-d H:i:s");
        
        // Check customer already exists
        $customer_id = $this->check_customer_exists();
        
        // Insert customer booking details
        $args = [
            'customer_id'   => $customer_id,
            'name'          => $this->data['name'],
            'contact_no'    => $this->data['contact_no'],
            'address_1'     => $this->data['address_1'],
            'address_2'     => $this->data['address_2'],
            'location'      => $this->data['location'],
            'created_on' => $now,
        ];
        
        $this->db->insert(TBL_CUSTOMER_DETAILS, $args);
        $customer_details_id = $this->db->insert_id();
        
        // Service Booking
        $args = [
            'ref_id'                => $this->common_model->get_rand_str(18),
            'service_name'          => $this->post['pakageName'],
            'service_slug'          => get_var_name($this->post['pakageName']),
            
            'customer_id'           => $customer_id,
            'customer_details_id'   => $customer_details_id,
            'book_status'           => 1,
            'created_on'            => $now,
            'updated_on'            => $now,
            
        ];
        
        $this->db->insert(TBL_SERVICE_BOOKING, $args);
        
        return [
            '_id'       => $args['ref_id'],
            'module'    => $args['service_name'],
            
            'name'      => $this->data['name'],
            'contact_no'=> $this->data['contact_no'],
            'email'     => $this->data['email'],
        ];
        
    }
    
    public function submitMain()
    {
        $now = date("Y-m-d H:i:s");
        
        // Check customer already exists
        $customer_id = $this->check_customer_exists();
        
        // Insert customer booking details
        $args = [
            'customer_id'   => $customer_id,
            'name'          => $this->data['name'],
            'contact_no'    => $this->data['contact_no'],
            'address_1'     => $this->data['address_1'],
            'address_2'     => $this->data['address_2'],
            'location'      => $this->data['location'],
            'created_on' => $now,
        ];
        
        $this->db->insert(TBL_CUSTOMER_DETAILS, $args);
        $customer_details_id = $this->db->insert_id();
        
        // Get Count
        $this->db->select('COUNT(`id`) as count');
        $q = $this->db->get_where(TBL_SUCCESS_BOOKING, []);
        $ref_id = $q->row_array();
        
        // Insert Booking
        $args = [
            'ref_id'                => $this->common_model->get_rand_str(18),
            'customer_id'           => $customer_id,
            'customer_details_id'   => $customer_details_id,
            'vechile_id'            => $this->data['vechile_type'],
            'success_type'          => $this->post['type'] == 'call-drivers' ? 1 : 2,
            'no_of_days'            => $this->data['no_of_days'],
            'pickup_place'          => $this->data['pickup_place'],
            'travel_date'           => date("Y-m-d H:i:s", strtotime($this->data['date'])),
            'station_type'          => $this->post['isOutstation'] == 'true' ? 2 : 1,
            'est_usage_hrs'         => $this->data['est_in_hrs'],
            'is_night_journey'      => empty($this->data['night_journey']) == false && $this->data['night_journey'] == 'on' ? 1 : 0,
            'is_drop_same_location' => empty($this->data['drop_as_same']) == false && $this->data['drop_as_same'] == 'on' ? 1 : 0,
            'total_km'              => $this->post['distanceInfo']['totalKm'],
            'rate_per_km'           => $this->post['distanceInfo']['ratePerKm'],
            'total_rate'            => $this->post['distanceInfo']['totalRate'],
            
            'book_status'           => 1,
            'created_on'            => $now,
            'updated_on'            => $now,
        ];
        
        $args['drop_place'] = $args['is_drop_same_location'] == 1 ? $args['pickup_place'] : $this->data['drop_place'];
        
        $this->db->insert(TBL_SUCCESS_BOOKING, $args);
        
        return [
            '_id'       => $args['ref_id'],
            'module'    => 'Success ' . get_friendly_name($this->post['type']),
            
            'name'      => $this->data['name'],
            'contact_no'=> $this->data['contact_no'],
            'email'     => $this->data['email'],
        ];
        
    }
    
    public function submitContact()
    {
        $args = [
            'cnt_name'          => $this->data['enq_name'],
            'cnt_email'         => $this->data['enq_email'],
            'cnt_contact_no'    => $this->data['enq_contact_no'],
            'cnt_description'   => htmlspecialchars($this->data['enq_desc']),
            'created_on'        => date("Y-m-d H:i:s"),
        ];
        
        $this->db->insert(TBL_CONTACT, $args);
        $args['_id'] = $this->db->insert_id();
        return $args;
    }
}