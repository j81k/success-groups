<?php
    class Ajax extends BaseController 
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('ajax_model');
        }
        
        public function submit($type)
        {
            $return = $this->set_msg('', -1); 
            
            switch ($type)
            {
                case 'contact':
                    $results = $this->ajax_model->submitContact();
                    
                    if ($results['_id'] > 0) {
                        // Success
                        
                        $mail_to = $results['cnt_email'];
                        if (SEND_MAIL && empty($mail_to) == false) {
                            // Mail
                            
                            $body = $this->load->view('templates/mail/enquiry.php', [], true);
                            $body = preg_replace('/\{name\}/', '<b>'. $results['cnt_name'] .'</b>', $body);
                            $body = preg_replace('/\{desc\}/', $results['cnt_description'], $body);
                            
                            $args = [
                                'to'    => $mail_to,
                                'from'  => MAIL_ENQ_ADDR,
                                'body'  => $body
                            ];
                            
                            send_mail($args);
                        }
                        
                        if (SEND_SMS && empty($args['cnt_contact_no']) == false) {
                            $msg = $this->load->view('templates/sms/enquiry.php', [], true);
                            $msg = preg_replace('/\{name\}/', '<b>'. $results['cnt_name'] .'</b>', $body);
                            
                            send_sms($args['cnt_contact_no'], $msg);
                        }
                        
                        $return = $this->set_msg('Thanks for contacting us. We will get bact you soon!');
                    }
                    
                    
                    
                break;
            
                default:
                    // Invalid Type
                break;    
            }
            
            echo json_encode($return);
        }
        
        public function set_msg($msg, $code = 1)
        {
            return [
                'status'    => $code,
                'message'   => $code == -1 ? 'Oops: Something went wrong! Please try again.' : $msg
            ];
        }
        
    }