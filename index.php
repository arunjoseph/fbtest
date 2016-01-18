<?php


if (isset($_SERVER['REQUEST_URI'])) {
    $file_name = basename($_SERVER['SCRIPT_NAME']);
    $path = explode("/", $_SERVER['REQUEST_URI']);
    $end = $path[count($path)-1];
    $end = ((empty($end)) || ($file_name == $end)) ? '/' : $end;
}
