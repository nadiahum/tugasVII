<?php 

set_include_path("class/");
spl_autoload_extensions(".class.php");
spl_autoload_register();

$pathInfo = $_SERVER['PATH_INFO'];

$mvc = explode("/", $pathInfo);

$controller = $mvc[1];
$method = $mvc[2];

$c = new $controller();
call_user_func(array($c, $method));

 ?>