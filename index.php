<?php
$the_host = $_SERVER['HTTP_HOST'];
$request_uri = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '';
if($the_host == 'tanrd.com')
{
header('HTTP/1.1 301 Moved Permanently');
header('Location: http://www.tanrd.com'.$request_uri);
}else{
//require('index.html'); require每次都首先加载，include执行到再加载
include('index.html');
}
?>