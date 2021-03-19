<?php
$mode = "default";

switch( $_SERVER['SCRIPT_NAME']){

case '/stoictechie/index.php':
    $mode = "home";
break;

    case '/stoictechie/blog/index.php':
        $mode = "blog";
        break;


default:  $mode="default";
}


