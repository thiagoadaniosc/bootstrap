<?php

class Route {

	static function get($uri){

		if (file_exists("pages/".$uri.".php")) {
			include 'pages/'.$uri.'.php';
			
		} else {
			include 'pages/home.php';
		}
		

	}

}