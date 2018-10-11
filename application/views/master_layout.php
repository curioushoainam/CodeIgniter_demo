<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?= $title ?></title>
	
	<style>
		#header {
			width: 100%;
			height: 100px;
			background-color: green;
		}
		#menu {
			width: 100%;
			height: 50px;
			background-color: yellow;
		}
		#footer {
			width: 100%;
			height: 100px;
			background-color: blue;
		}
		#contents {
			width: 100%;
			height: 500px;
			background-color: cyan;
		}

	</style>
</head>
<body>
	<?php 
		if(isset($header)) { echo $header; }
		
		if(isset($menu)) { echo $menu; }
		
		if(isset($page)) { echo $page; }
		
		if(isset($footer)) { echo $footer; } 
	?>
</body>
</html>