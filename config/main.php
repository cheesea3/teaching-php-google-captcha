<?php
switch($mode){
    case "home";
        $title = "Home";
        $header = "<h1>home</h1>";
        $body = "<body><p>home</p></body>";
        $footer = "<footer style='text-align:center;'>David</footer>";
        break;
    case "blog";
        $title = "Body";
        $header = "<h1>Body</h1>";
        $body = "<body><p>body</p></body>";
        $footer = "<footer style='text-align:center;'>David</footer>";
        break;
}
