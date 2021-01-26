<?php 
header("Access-Control-Allow-Origin: *");

if(!defined('IN_GS')){ die('Você não pode acessar esta página diretamente.'); }

if (!class_exists('Mobile_Detect')){
    	
	require(GSTHEMESPATH .'Pollos/Mobile-Detect/Mobile_Detect.php');
	$detect = new Mobile_Detect;
}
else{
	
	$detect = new Mobile_Detect;
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<title><?php get_page_clean_title(); ?> &lt; <?php get_site_name(); ?></title>
	<?php get_header(); ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="google" content="notranslate" />
	<meta name="robots" content="index, follow">
	<meta charset="utf-8">
	<link rel="icon" href="/theme/favicon-mjs.png" />

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php get_theme_url(); ?>/css/bootstrap.min.css" media="all" />
 	<link rel="stylesheet" type="text/css" href="<?php get_theme_url(); ?>/css/animate.css" media="all" />
	<link rel="stylesheet" type="text/css" href="<?php get_theme_url(); ?>/css/font-awesome.min.css" media="all" />
	<link rel="stylesheet" type="text/css" href="<?php get_theme_url(); ?>/css/style.css" media="all" /> 
</head>

<body id="<?php get_page_slug(); ?>">
	
	<?php include("header.inc.php"); ?>
	<?php include("social.inc.php"); ?>
	<?php if( !$detect->isMobile() AND !$detect->isTablet() ) : ?>

	<?php //echo slideshow(); ?>
		<h1 id="video-text">A mais de 10 anos transportando com qualidade e segurança</h1>
		<video autoplay="true" preload loop class="fillWidth" id="video">
					<source src="<?php echo get_site_url(); ?>data/uploads/banner-home/video.mp4" type="video/mp4" />
					<source src="<?php echo get_site_url(); ?>data/uploads/banner-home/video.webm" type="video/webm" />
		</video>

	<?php else : ?>

		<div id="logo" class="container">
			<div class='col-sm-12'>
			<?php get_component('image-home'); ?>
			</div>
		</div>

	<?php endif; ?>
	
	<section id="corpo1">
		<div class="container">
			<div class="row wow slideInRight" data-wow-duration="1s" data-wow-delay="0.3s">
				<div class="col-xs-12 col-sm-7 col-sm-push-5">
					<?php get_component('texto-home'); ?>
				</div>
				<div class="col-xs-12 col-sm-5 col-sm-pull-7 hidden-xs">
					<?php get_component('image-home'); ?>
				</div>
			</div>
		</div>
	</section>

	<div class="divider1" data-stellar-background-ratio="0.5"></div>

	<section id="services" class="wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
		<?php get_component('servicos-oferecidos'); ?>
	</section>

	<?php include("contato.inc.php"); ?>
	<?php include("footer.inc.php"); ?>

	<?php get_footer() ?>
	

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js?v=1.12.0"></script>
	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="<?php get_theme_url(); ?>/js/bootstrap.min.js"></script>
	<script>
              new WOW().init();
    </script>
	<script src="<?php get_theme_url(); ?>/js/wow.js"></script>
	<script src="<?php get_theme_url(); ?>/js/script.js"></script>
	
	</body>
</html>