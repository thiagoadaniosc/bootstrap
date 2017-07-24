<?php 
include 'includes/header.php';

if (file_exists("pages/".$url.".php")) {
	include 'pages/'.$url.'.php';
} else {
	echo "404";
}


include 'includes/footer.php'; ?>