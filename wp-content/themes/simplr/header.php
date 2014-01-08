<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php wp_title(); ?></title>
    <!-- Style Vikua -->
    <link href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap.css" rel="stylesheet" type="text/css" media="screen" >
	<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" title="Estilos Globales de Vikua" >

<?php wp_head() // Do not remove; helps plugins work ?>
</head>

<body>
        <div class="container">
            <div class="container-stretcher">
			<header>
				<div class="row">
					<div class="span3">
						<a href="<?php bloginfo('url'); ?>">
							<img src="wp-content/themes/simplr/images/logo.png">
						</a>
					</div>
					<div class="span4 pull-right">
						<div class="social">
							<a href="#">
								<img src="wp-content/themes/simplr/images/mail.png">
							</a>
							<a href="#">
								<img src="wp-content/themes/simplr/images/facebook.png">
							</a>
							<a href="#">
								<img src="wp-content/themes/simplr/images/twitter.png">
							</a>
							<a href="#">
								<img src="wp-content/themes/simplr/images/youtube.png">
							</a>
							<a href="#">
								<img src="wp-content/themes/simplr/images/linkedin.png">
							</a>
						</div>
					</div>
				</div>
			</header>
