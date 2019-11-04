<?php


function cekActive()
{

    $CI = &get_instance();

    $url = $CI->uri->segments;

    if ($url == null) {
        return false;
    } else {
        return $url[1];
    }
}
