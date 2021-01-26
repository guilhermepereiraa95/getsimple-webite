<?php if(!defined('IN_GS')){ die('Você não pode acessar esta página diretamente.'); }

require_once 'Mobile-Detect/Mobile_Detect.php';
$detect = new Mobile_Detect;
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
	 	<link rel="stylesheet" type="text/css" href="<?php get_theme_url(); ?>/css/bootstrap.min.css" media="all" />
		<link rel="stylesheet" type="text/css" href="<?php get_theme_url(); ?>/css/font-awesome.min.css" media="all" />
		<link rel="stylesheet" type="text/css" href="<?php get_theme_url(); ?>/css/animate.css" media="all" />
		<link rel="stylesheet" type="text/css" href="<?php get_theme_url(); ?>/css/style.css" media="all" /> 
		<!--<link rel="stylesheet" type="text/css" href="<?php echo get_site_url() . $reset; ?>" media="all" />-->
		<!--<link rel="stylesheet" type="text/css" href="<?php echo get_site_url() . $style; ?>" media="all" />-->
	</head>

<body id="<?php get_page_slug(); ?>">

	<?php include("header.inc.php"); ?>
	<?php include("social.inc.php"); ?>

	<section  id="interna">
		<div class="title">
			<div class="container">
				<div class="col-md-6">
					<h1><?php get_page_title(); ?></h1>
				</div>
				<div class="col-md-6">
					<div class="breadcrumbs hidden-xs">
					  <a href="<?php echo find_url('index', null); ?>"><i class="fa fa-home" aria-hidden="true"></i></a>
					  <?php get_i18n_breadcrumbs(return_page_slug()); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<?php get_page_content(); ?>
		</div>
	</section>

	<?php include("contato.inc.php"); ?>
	<?php include("footer.inc.php"); ?>

	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="<?php get_theme_url(); ?>/js/bootstrap.min.js"></script>
	
	<script src="<?php get_theme_url(); ?>/js/jquery.stellar.min.js"></script>
	<script src="<?php get_theme_url(); ?>/js/jquery.lettering.js"></script>
	<script src="<?php get_theme_url(); ?>/js/wow.js"></script>
	<script src="<?php get_theme_url(); ?>/js/validator.min.js"></script>
	<script src="<?php get_theme_url(); ?>/js/script.js"></script>
	
	
	</body>
</html>