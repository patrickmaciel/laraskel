<?php

HTML::macro('image_link', function($url = '', $img = '', $alt = '', $param = array(), $active = true, $ssl = false) {
    $url  = $ssl ? URL::to_secure($url) : URL::to($url);  
    $img  = HTML::image($img, $alt);
    $link   = $active ? HTML::link($url, '::replace::', $param) : $img;
    return str_replace('::replace::', $img, $link);
}); 