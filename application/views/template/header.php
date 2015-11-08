<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<!--CSS-->
		<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link type="text/css" rel="stylesheet" href="<?php echo BASEPATH;?>libraries/css/materialize.min.css"  media="screen,projection"/>
		
		<!-- Titel -->
		<title><?php echo $title; ?></title>
	</head>
	<body>
		<header>
			<nav class="z-depth-4" role="navigation">
				<div class="nav-wrapper container">
					<a href="index.html" class="brand-logo left hide-on-med-and-down">LOGO</a>
					<a href="index.html" class="brand-logo center show-on-medium-and-down hide-on-large-only">LOGO</a>
					<a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
					<ul class="right hide-on-med-and-down">
						<li><a href="index.html">Home</a></li>
						<li><a href="-">News</a></li>
						<li><a href="-">Dienstleistungen</a></li>
						<li><a href="-">Preise</a></li>
						<li><a href="-">Über Lorenz-Steiner.ch</a></li>
					</ul>
					<ul class="side-nav" id="nav-mobile">
						<li><a href="index.html">Home</a></li>
						<li><a href="-">News</a></li>
						<li><a href="-">Dienstleistungen</a></li>
						<li><a href="-">Preise</a></li>
						<li><a href="-">Über Lorenz-Steiner.ch</a></li>
					</ul>
				</div>				
			</nav>
		</header>
		



