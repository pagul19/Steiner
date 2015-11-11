<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="de">
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<!--CSS-->
		<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link type="text/css" rel="stylesheet" href="<?php echo CSS_DIR;?>materialize.min.css"  media="screen,projection"/>
		<link type="text/css" rel="stylesheet" href="<?php echo CSS_DIR;?>private.css"/>
		
		<!-- Titel -->
		<title><?php echo $title; ?></title>
	</head>
	<body>
		<header>
			<nav class="z-depth-1 wine" role="navigation">
				<div class="nav-wrapper container">
					<a href="index.php" class="brand-logo left hide-on-med-and-down black-text">LOGO</a>
					<a href="index.php" class="brand-logo center show-on-medium-and-down hide-on-large-only">LOGO</a>
					<a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
					<ul class="right hide-on-med-and-down">
						<li><a href="<?php echo site_url('pages'); ?>" class="black-text">Home</a></li>
						<li><a href="<?php echo site_url('news'); ?>" class="black-text ">News</a></li>
						<li><a href="<?php echo site_url('services'); ?>" class="black-text">Dienstleistungen</a></li>
						<li><a href="<?php echo site_url('pages/price'); ?>" class="black-text">Preise</a></li>
						<li><a href="<?php echo site_url('about'); ?>" class="black-text">Über Lorenz-Steiner.ch</a></li>
					</ul>
					<ul class="side-nav" id="nav-mobile">
						<li><a href="<?php echo site_url('pages'); ?>" >Home</a></li>
						<li><a href="<?php echo site_url('news'); ?>" >News</a></li>
						<li><a href="<?php echo site_url('services'); ?>" >Dienstleistungen</a></li>
						<li><a href="<?php echo site_url('pages/price'); ?>" >Preise</a></li>
						<li><a href="<?php echo site_url('about'); ?>" >Über Lorenz-Steiner.ch</a></li>
					</ul>
				</div>				
			</nav>
		</header>
		



