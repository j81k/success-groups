<?php

if (!function_exists('send_sms')) 
{
    function send_sms($mobileNo, $message = '')
    {
        $url = SMS_GATEWAY_URL . '&to='. MOBILE_NO_PREFIX . $mobileNo . '&msg=' . urlencode($message);
        return curl($url);
    }
}

if (!function_exists('send_mail'))
{
    function send_mail($args)
    {
            $bound_text = md5(uniqid(rand(), true));
            $bound = "--" . $bound_text . "\r\n";
            $bound_last = "--" . $bound_text . "--\r\n";

            $headers = "From:" . $args['from'] . "\r\n"
                             . "MIME-Version: 1.0\r\n"
                             . "Content-Type: multipart/mixed; boundary=\"$bound_text\"";

            $message =	"Sorry, your client doesn't support MIME types.\r\n"
                             . $bound;

            $message .=	"Content-Type: text/html; charset=\"iso-8859-1\"\r\n"
                             . "Content-Transfer-Encoding: 7bit\r\n\r\n"
                             . $args['body'];

            $subject = empty($args['subject']) === false ? $args['subject'] : MAIL_SUBJECT;
            
            #echo 'To: '. $args['to']; echo '<br>Sub: '. $subject; echo '<br />Body: ' .$message; die;
            if (mail($args['to'], $subject, $message, $headers)) {
                 return true;
            }
            
            return false;
    }

}

if (!function_exists('curl'))
{
    function curl($url, $data = [])
    {

            if (empty($url) === false) {
                    $ch = curl_init();
                    curl_setopt($ch, CURLOPT_URL, $url);
                    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                    #curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
                    #curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

                    if (empty($data) === false) {
                            //curl_setopt($ch, CURLOPT_HEADER, false);
                            curl_setopt($ch, CURLOPT_SAFE_UPLOAD, false);
                            #curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type' => 'multipart/form-data']);
                            #curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type' => 'application/x-www-form-urlencoded']);
                            #curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type' => 'text/plain']);
                            #curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type' => 'image/png']);
                            curl_setopt($ch, CURLOPT_POST, 1);
                            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
                    }

                    $return = curl_exec($ch);

                    curl_close($ch);

                    return $return;	
            }

            return $url;
    }

}


if (!function_exists('asset_url'))
{
	function asset_url()
	{
		return base_url('/') . 'sg-assets/';
	}
}

if (!function_exists('get_friendly_name'))
{
	function get_friendly_name($text = '')
	{
		return ucwords(preg_replace('/[-_]/i', ' ', $text));
	}	
}

if (!function_exists('pre'))
{
	function pre($data = [])
	{
		echo '<pre>'; print_r($data); die;
	}
}