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
                
                case 'attachments':
                    
                    $results = $this->ajax_model->submitAttachments();
                    
                    if ($results['_id'] > 0) {
                        // Success
                        
                        $msg = $this->load->view('templates/sms/attachments.html', [], true);
                        $msg = preg_replace('/\{name\}/', '<b>'. $results['name'] .'</b>', $msg);
                        if (SEND_SMS && empty($args['contact_no']) == false) {
                            send_sms($args['contact_no'], $msg);
                        }
                        $return = $this->set_msg($msg);
                    }
                    
                break;    
                    
                case 'package':
                        
                    $results = $this->ajax_model->submitPackage();
                    
                    if ($results['_id'] > 0) {
                        // Success
                        
                        $mail_to = $results['email'];
                        if (SEND_MAIL && empty($mail_to) == false) {
                            // Mail
                            
                            $body = $this->load->view('templates/mail/success_booking.html', [], true);
                            $body = preg_replace('/\{name\}/', '<b>'. $results['name'] .'</b>', $body);
                            $body = preg_replace('/\{ref_id\}/', $results['_id'], $body);
                            $body = preg_replace('/\{module\}/', $results['module'], $body);
                            
                            $args = [
                                'to'    => $mail_to,
                                'from'  => MAIL_ENQ_ADDR,
                                'body'  => $body
                            ];
                            
                            send_mail($args);
                        }
                        
                        $msg = $this->load->view('templates/sms/success_booking.html', [], true);
                        $msg = preg_replace('/\{name\}/', '<b>'. $results['name'] .'</b>', $msg);
                        $msg = preg_replace('/\{ref_id\}/', $results['_id'], $msg);
                        $msg = preg_replace('/\{module\}/', $results['module'], $msg);
                            
                        if (SEND_SMS && empty($args['contact_no']) == false) {
                            send_sms($args['contact_no'], $msg);
                        }
                        $return = $this->set_msg($msg);
                    }
                    
                break;    
                
                case 'request':
                    // Request Call Back
                    $results = $this->ajax_model->submitRequest();
                    
                    if ($results['_id'] > 0) {
                        // Success
                        
                        $msg = $this->load->view('templates/sms/req_callback.html', [], true);
                        $msg = preg_replace('/\{name\}/', '<b>'. $results['name'] .'</b>', $msg);
                        if (SEND_SMS && empty($args['contact_no']) == false) {
                            send_sms($args['contact_no'], $msg);
                        }
                        
                        $return = $this->set_msg($msg);
                    }
                    
                break;    
                
                case 'main':
                    
                    $results = $this->ajax_model->submitMain();
                    
                    if ($results['_id'] > 0) {
                        // Success
                        
                        $mail_to = $results['email'];
                        if (SEND_MAIL && empty($mail_to) == false) {
                            // Mail
                            
                            $body = $this->load->view('templates/mail/success_booking.html', [], true);
                            $body = preg_replace('/\{name\}/', '<b>'. $results['name'] .'</b>', $body);
                            $body = preg_replace('/\{ref_id\}/', $results['_id'], $body);
                            $body = preg_replace('/\{module\}/', $results['module'], $body);
                            
                            $args = [
                                'to'    => $mail_to,
                                'from'  => MAIL_ENQ_ADDR,
                                'body'  => $body
                            ];
                            
                            send_mail($args);
                        }
                        
                        $msg = $this->load->view('templates/sms/success_booking.html', [], true);
                        $msg = preg_replace('/\{name\}/', '<b>'. $results['name'] .'</b>', $msg);
                        $msg = preg_replace('/\{ref_id\}/', $results['_id'], $msg);
                        $msg = preg_replace('/\{module\}/', $results['module'], $msg);
                        
                        if (SEND_SMS && empty($args['contact_no']) == false) {
                            send_sms($args['contact_no'], $msg);
                        }
                        $return = $this->set_msg($msg);
                    }
                break;
            
                case 'contact':
                    $results = $this->ajax_model->submitContact();
                    
                    if ($results['_id'] > 0) {
                        // Success
                        
                        $mail_to = $results['cnt_email'];
                        if (SEND_MAIL && empty($mail_to) == false) {
                            // Mail
                            
                            $body = $this->load->view('templates/mail/enquiry.html', [], true);
                            $body = preg_replace('/\{name\}/', '<b>'. $results['cnt_name'] .'</b>', $body);
                            $body = preg_replace('/\{desc\}/', $results['cnt_description'], $body);
                            
                            $args = [
                                'to'    => $mail_to,
                                'from'  => MAIL_ENQ_ADDR,
                                'body'  => $body
                            ];
                            
                            send_mail($args);
                        }
                        
                        $msg = $this->load->view('templates/sms/enquiry.html', [], true);
                        $msg = preg_replace('/\{name\}/', '<b>'. $results['cnt_name'] .'</b>', $msg);
                        if (SEND_SMS && empty($args['cnt_contact_no']) == false) {
                            send_sms($args['cnt_contact_no'], $msg);
                        }
                        
                        $return = $this->set_msg($msg);
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
                'message'   => $code == -1 ? 'Oops: Something went wrong! Please try again.' : str_replace('.', '.  ', strip_tags($msg))
            ];
        }
        
    }