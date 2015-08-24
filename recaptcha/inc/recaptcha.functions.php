<?php

/**
 * reCAPTCHA Plugin for Cotonti
 *
 * @package recaptchag
 * @version 2.0
 * @author Alexeev vlad
 * @copyright Copyright (c) Alexeev vlad
 * @license Free
 */
 
function recaptcha_generate()
{
    global $cfg, $L;
    if (empty($cfg['plugin']['recaptcha']['sitekey']))
    {
     return $L['recaptcha_no_sitekey'];
    }
    else
    {
     $html = '<script src="https://www.google.com/recaptcha/api.js"></script>';
     $html .= '<div class="g-recaptcha" data-sitekey="'.$cfg['plugin']['recaptcha']['sitekey'].'"></div>';
     return $html;
    }
}

function cot_recaptcha_valid($response) 
{
    global $cfg;
    try {

        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $data = array('secret'   => $cfg['plugin']['recaptcha']['secretkey'],
                 'response' => $response,
                 'remoteip' => $_SERVER['REMOTE_ADDR']);

        $options = array(
            'http' => array(
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => http_build_query($data) 
            )
        );

        $context  = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        return json_decode($result)->success;
    }
    catch (Exception $e) {
        return null;
    }
}
?>