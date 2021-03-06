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
                    
                    if (empty($results['_id']) == false) {
                        // Success
                        
                        $msg = $this->load->view('templates/sms/customer/attachments.html', [], true);
                        $msg = preg_replace('/\{name\}/', '<b>'. $results['name'] .'</b>', $msg);
                        if (SEND_SMS && empty($results['contact_no']) == false) {
                            send_sms($results['contact_no'], $msg);
                        }
                        $return = $this->set_msg($msg);
                    }
                    
                break;    
                    
                case 'package':
                        
                    $results = $this->ajax_model->submitPackage();
                    
                    if (empty($results['_id']) == false) {
                        // Success
                        
                        $mail_to = $results['email'];
                        if (SEND_MAIL && empty($mail_to) == false) {
                            // Mail
                            
                            $body = $this->load->view('templates/mail/customer/success_booking.phtml', ['type' => 'package'], true);
                            extract($results);
                            $body = preg_replace('/\{(.*?)\}/i', '$$1', $body);
                            eval("\$body= \"$body\";");
                            
                            $args = [
                                'to'    => $mail_to,
                                'from'  => MAIL_ADMIN_TOURS,
                                'body'  => $body
                            ];
                            
                            send_mail($args);
                            
                            // Admin mail
                            $body = $this->load->view('templates/mail/admin/success_booking.phtml', ['type' => 'package'], true);
                            extract($results);
                            $body = preg_replace('/\{(.*?)\}/i', '$$1', $body);
                            eval("\$body= \"$body\";");
                            
                            $args = [
                                'to'    => MAIL_ADMIN_TOURS,
                                'from'  => $mail_to,
                                'body'  => $body
                            ];
                            
                            send_mail($args);
                            
                        }
                        
                        $msg = $this->load->view('templates/sms/customer/success_booking.phtml', ['type' => 'package'], true);
                        $msg = preg_replace('/\{name\}/', '<b>'. $results['name'] .'</b>', $msg);
                        $msg = preg_replace('/\{ref_id\}/', $results['_id'], $msg);
                        $msg = preg_replace('/\{module\}/', $results['module'], $msg);
                            
                        if (SEND_SMS && empty($results['contact_no']) == false) {
                            send_sms($results['contact_no'], $msg);
                        }
                        $return = $this->set_msg($msg);
                    }
                    
                break;    
                
                case 'request':
                    // Request Call Back
                    $results = $this->ajax_model->submitRequest();
                    
                    if (empty($results['_id']) == false) {
                        // Success
                        
                        $msg = $this->load->view('templates/sms/customer/req_callback.html', [], true);
                        $msg = preg_replace('/\{name\}/', '<b>'. $results['name'] .'</b>', $msg);
                        if (SEND_SMS && empty($results['contact_no']) == false) {
                            send_sms($results['contact_no'], $msg);
                        }
                        
                        $return = $this->set_msg($msg);
                    }
                    
                break;    
                
                case 'main':
                    
                    $results = $this->ajax_model->submitMain();
                    
                    if (empty($results['ref_id']) == false) {
                        // Success
                        
                        $mail_to = $results['email'];
                        if (SEND_MAIL && empty($mail_to) == false) {
                            // Mail
                            
                            $body = $this->load->view('templates/mail/customer/success_booking.phtml', ['type' => $results['success_type']], true);
                            extract($results);
                            /*$body = preg_replace('/\{(.*?)\}/i', '<?= $$1; ?>', $body);*/
                            $body = preg_replace('/\{(.*?)\}/i', '$$1', $body);
                            eval("\$body= \"$body\";");
                            
                            //$body = preg_replace('/\{/', '<b>'. $results['name'] .'</b>', $body);
                            /*$body = preg_replace('/\{name\}/', '<b>'. $results['name'] .'</b>', $body);
                            $body = preg_replace('/\{ref_id\}/', $results['ref_id'], $body);
                            $body = preg_replace('/\{module\}/', $results['module'], $body);*/
                            
                            $args = [
                                'to'    => $mail_to,
                                'from'  => MAIL_ENQ_ADDR,
                                'body'  => $body
                            ];
                            
                            send_mail($args);
                            
                            
                            // Admin Mail
                            $body = $this->load->view('templates/mail/admin/success_booking.phtml', ['type' => $results['success_type']], true);
                            extract($results);
                            /*$body = preg_replace('/\{(.*?)\}/i', '<?= $$1; ?>', $body);*/
                            $body = preg_replace('/\{(.*?)\}/i', '$$1', $body);
                            eval("\$body= \"$body\";");
                            
                            $args = [
                                'to'    => $results['success_type'] == 1 ? MAIL_ADMIN_DRIVERS : MAIL_ADMIN_TRAVELS,
                                'from'  => $mail_to,
                                'body'  => $body
                            ];
                            
                            send_mail($args);
                        }
                        
                        $msg = $this->load->view('templates/sms/customer/success_booking.html', [], true);
                        $msg = preg_replace('/\{name\}/', '<b>'. $results['name'] .'</b>', $msg);
                        $msg = preg_replace('/\{ref_id\}/', $results['_id'], $msg);
                        $msg = preg_replace('/\{module\}/', $results['module'], $msg);
                        
                        if (SEND_SMS && empty($results['contact_no']) == false) {
                            send_sms($results['contact_no'], $msg);
                        }
                        $return = $this->set_msg($msg);
                    }
                break;
            
                case 'contact':
                    $results = $this->ajax_model->submitContact();
                    
                    if (empty($results['_id']) == false) {
                        // Success
                        
                        $mail_to = $results['cnt_email'];
                        if (SEND_MAIL && empty($mail_to) == false) {
                            // Mail
                            
                            $body = $this->load->view('templates/mail/customer/enquiry.html', [], true);
                            $body = preg_replace('/\{name\}/', '<b>'. $results['cnt_name'] .'</b>', $body);
                            $body = preg_replace('/\{desc\}/', $results['cnt_description'], $body);
                            
                            $args = [
                                'to'    => $mail_to,
                                'from'  => MAIL_ENQ_ADDR,
                                'body'  => $body
                            ];
                            
                            send_mail($args);
                        }
                        
                        $msg = $this->load->view('templates/sms/customer/enquiry.html', [], true);
                        $msg = preg_replace('/\{name\}/', '<b>'. $results['cnt_name'] .'</b>', $msg);
                        if (SEND_SMS && empty($results['cnt_contact_no']) == false) {
                            send_sms($results['cnt_contact_no'], $msg);
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