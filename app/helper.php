<?php

if(!function_exists('secure_url'))
{
    function secure_url()
    {
        $uri = str_replace('http://', 'https://', url());
        return $uri;
    }
}
