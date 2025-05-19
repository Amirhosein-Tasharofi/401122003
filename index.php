<?php
define('ROOT_PATH',__DIR__);
require_once(__DIR__.'/helper/functions.php');

$method = $_SERVER['REQUEST_METHOD'];
$uri = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);

// echo($method);
// echo('<br>');
// print_r($uri);

if($uri == "/WebProgramming/")
{
    view('home.php');

}
else if ($uri == '/WebProgramming/infs')
{
    view('infs.php');

}
else if($uri == '/WebProgramming/header')
{
    view('header.php');

}else if($uri == '/WebProgramming/about')
{
    view('about.php');

}
else{
    view('404.php');
    
}

?>