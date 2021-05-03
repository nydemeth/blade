<?php

function redirect($url, $code=302)
{
   header('Location: '.$url, true, $cde);
   die();
}

function generate_string($length = 3) {
    $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $len = strlen($chars);
    $string = '';
    for($i = 0; $i < $length; $i++) {
        $ran = $chars[mt_rand(0, $len - 1)];
        $string .= $ran;
    }
 
    return $string;
}
?>