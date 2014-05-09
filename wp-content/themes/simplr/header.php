<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php wp_title(); ?></title>
    <!-- Style Vikua -->
    <link href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap.css" rel="stylesheet" type="text/css" media="screen" >
	<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" title="Estilos Globales de Vikua" >
	<script src="http://localhost/vikua_blog/wp-content/themes/simplr/js/jquery.js"></script>


<?php wp_head() // Do not remove; helps plugins work ?>
</head>

<body>
	<header>
		<div class="row" id="header">
			<a href="<?php bloginfo('url'); ?>">
				<div class="col-xs-offset-1 col-xs-2" id="header-icon-first">
					<img id="logo-header" class="img-responsive img-centered" src="wp-content/themes/simplr/images/logo_negro.png"/>
				</div>
			</a>
			<a href="#">
				<div class="col-xs-1 header-logo" id="logo-2">
					<div class="row">
						<img  id="logo-2-img" class="img-responsive img-centered" src="wp-content/themes/simplr/images/btn-off-2.png"/>
					</div>
					<div class="row">
						<div class="col-xs-12">
							<p id="text-1"> contacto </p>
						</div>
					</div>
				</div>
			</a>
			<a href="<?php bloginfo('url'); ?>/?page_id=46">
				<div class="col-xs-1 header-logo" id="logo-3">
					<div class="row">
						<img id="logo-3-img" class="img-responsive img-centered" src="wp-content/themes/simplr/images/btn-off-3.png"/>
					</div>
					<div class="row">
						<div class="col-xs-12">
							<p id="text-2"> casos-exito </p>
						</div>
					</div>
				</div>
			</a>
			<a href="<?php bloginfo('url'); ?>/?page_id=48 ">
				<div class="col-xs-1 header-logo header-green" id="logo-4">
					<div class="row">
						<img id="logo-4-img" class="img-responsive img-centered" src="wp-content/themes/simplr/images/btn-off-4.png"/>
					</div>
					<div class="row">
						<div class="col-xs-12">
							<p id="text-3"> tec-infraf </p>
						</div>
					</div>
				</div>
			</a>
			<a href="<?php bloginfo('url'); ?>/?page_id=7">
				<div class="col-xs-1 header-logo header-green" id="logo-5">
					<div class="row">
						<img id="logo-5-img" class="img-responsive img-centered" src="wp-content/themes/simplr/images/btn-off-5.png"/>
					</div>
					<div class="row">
						<div class="col-xs-12">
							<p id="text-4"> in-traffic </p>
						</div>
					</div>
				</div>
			</a>
			<a href="<?php bloginfo('url'); ?>/?page_id=50 ">
				<div class="col-xs-1 header-logo header-green" id="logo-6">
					<div class="row">
						<img id="logo-6-img" class="img-responsive img-centered" src="wp-content/themes/simplr/images/btn-off-6.png"/>
					</div>
					<div class="row">
						<div class="col-xs-12">
							<p id="text-5"> sinapsis </p>
						</div>
					</div>
				</div>
			</a>
			<a href="<?php bloginfo('url'); ?>/?page_id=68">
				<div class="col-xs-1 header-logo" id="logo-7">
					<div class="row">
						<img id="logo-7-img" class="img-responsive img-centered" src="wp-content/themes/simplr/images/btn-off-7.png"/>
					</div>
					<div class="row">
						<div class="col-xs-12">
							<p id="text-6"> noticias </p>
						</div>
					</div>
				</div>
			</a>
			<a href="<?php bloginfo('url'); ?>/?page_id=78 ">
				<div class="col-xs-1 header-logo" id="logo-8">
					<div class="row">
						<img id="logo-8-img" class="img-responsive img-centered" src="wp-content/themes/simplr/images/btn-off-8.png"/>
					</div>
					<div class="row">
						<div class="col-xs-12">
							<p id="text-7"> galeria </p>
						</div>
					</div>
				</div>
			</a>
			<a href="<?php bloginfo('url'); ?>/?page_id=52">
				<div class="col-xs-1 header-logo" id="logo-9">
					<div class="row">
						<img id="logo-9-img" class="img-responsive img-centered" src="wp-content/themes/simplr/images/btn-off-9.png"/>
					</div>
					<div class="row">
						<div class="col-xs-12">
							<p id="text-8"> its </p>
						</div>
					</div>
				</div>
			</a>
		</div>
	</header>
	<script>
		$('#header-icon-first').hover(
			function(){
				$(this).children('img').eq(0).attr("src", "wp-content/themes/simplr/images/logo_blanco.png");
				$('#logo-header').css("opacity", "1");
			}, function(){
				$(this).children('img').eq(0).attr("src", "wp-content/themes/simplr/images/logo_negro.png");
				$('#logo-header').css("opacity", "0.55");
			}
		);
		$('#logo-2').hover(
			function(){
				$("#logo-2-img").attr("src", "wp-content/themes/simplr/images/btn-on-2.png");
				$('#text-1').css("color","white");
			}, function(){
				$("#logo-2-img").attr("src", "wp-content/themes/simplr/images/btn-off-2.png");
				$('#text-1').css("color","black");
			}
		);
		$('#logo-3').hover(
			function(){
				$("#logo-3-img").attr("src", "wp-content/themes/simplr/images/btn-on-3.png");
				$('#text-2').css("color","white");
			}, function(){
				$("#logo-3-img").attr("src", "wp-content/themes/simplr/images/btn-off-3.png");
				$('#text-2').css("color","black");
			}
		);
		$('#logo-4').hover(
			function(){
				$("#logo-4-img").attr("src", "wp-content/themes/simplr/images/btn-on-4.png");
				$('#text-3').css("color","white");
			}, function(){
				$("#logo-4-img").attr("src", "wp-content/themes/simplr/images/btn-off-4.png");
				$('#text-3').css("color","black");
			}
		);
		$('#logo-5').hover(
			function(){
				$("#logo-5-img").attr("src", "wp-content/themes/simplr/images/btn-on-5.png");
				$('#text-4').css("color","white");
			}, function(){
				$("#logo-5-img").attr("src", "wp-content/themes/simplr/images/btn-off-5.png");
				$('#text-4').css("color","black");
			}
		);
		$('#logo-6').hover(
			function(){
				$("#logo-6-img").attr("src", "wp-content/themes/simplr/images/btn-on-6.png");
				$('#text-5').css("color","white");
			}, function(){
				$("#logo-6-img").attr("src", "wp-content/themes/simplr/images/btn-off-6.png");
				$('#text-5').css("color","black");
			}
		);
		$('#logo-7').hover(
			function(){
				$("#logo-7-img").attr("src", "wp-content/themes/simplr/images/btn-on-7.png");
				$('#text-6').css("color","white");
			}, function(){
				$("#logo-7-img").attr("src", "wp-content/themes/simplr/images/btn-off-7.png");
				$('#text-6').css("color","black");
			}
		);
		$('#logo-8').hover(
			function(){
				$("#logo-8-img").attr("src", "wp-content/themes/simplr/images/btn-on-8.png");
				$('#text-7').css("color","white");
			}, function(){
				$("#logo-8-img").attr("src", "wp-content/themes/simplr/images/btn-off-8.png");
				$('#text-7').css("color","black");
			}
		);
		$('#logo-9').hover(
			function(){
				$("#logo-9-img").attr("src", "wp-content/themes/simplr/images/btn-on-9.png");
				$('#text-8').css("color","white");
			}, function(){
				$("#logo-9-img").attr("src", "wp-content/themes/simplr/images/btn-off-9.png");
				$('#text-8').css("color","black");
			}
		);
	</script>

<div class="container">

