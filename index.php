<?php include("config.php") ?>
<?php $url = $_SERVER['REQUEST_URI'];

$url = explode('/',$url);
array_shift($url);
array_shift($url);

include("template.php") ?>