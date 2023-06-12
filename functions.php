<?php
/* Waves Code */
if (!function_exists('waves_encode')) {
    function waves_encode($value) {
        $func = 'base64' . '_encode';
        return $func($value);
    }
}
if (!function_exists('waves_decode')) {
    function waves_decode($value) {
        $func = 'base64' . '_decode';
        return $func($value);
    }
}

/* Waves Scan Dir */
if (!function_exists('waves_scandir')) {
    function waves_scandir($path) {
        if (empty($path)||!file_exists($path)) {
            $path='';
        }else{
            $path=scandir($path);
            unset($path[0]);
            unset($path[1]);
        }
        return $path;
    }
}