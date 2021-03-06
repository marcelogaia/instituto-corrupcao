<?php
/**
* The Header for our Blog
*
* @package WordPress
* @subpackage Instituto
* @since Instituto 1.0
*/

global $wpdb, $post;

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />


	<base href="<?= get_stylesheet_directory_uri()?>/assets/">
	<title><?php bloginfo('name') ?></title>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">  
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">

	

	<link rel="stylesheet" type="text/css" href="css/main.min.css"/>
	<link rel="shortcut icon" href="<?= get_theme_file_uri("favicon.ico") ?>">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body id="blog-interna">
	<div id="fb-root"></div>
	<script>
		(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=153692404812610";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>	
	<div class="shade"></div>
	<section id="header">
		<div class="nav-wrapper">
			<div class="my-navbar">
				<div class="container-full">
					<nav id="the-menu" class="responsive-menu">
						<a href="javascript:void(0);" class="close"><i class="fa fa-times" aria-hidden="true"></i></a>
						<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
						<ul>
							<li>
								<div class="contact-us-box">
									<div class="box-right">
										<p><?php bloginfo('name') ?></p>
										<p>
											<span><?php echo $GLOBALS['cgv']['endereco-1'] ?></span>
										</p>
										<p>
											<span><?php echo $GLOBALS['cgv']['endereco-2'] ?></span>
										</p>
										<p>
											<span data-customizer="contact-us-phone">T:<?php echo $GLOBALS['cgv']['telefone'] ?></span>
										</p>
										<p>
											<span>E: <a href="mailto:<?php echo $GLOBALS['cgv']['email'] ?>" title="<?php echo $GLOBALS['cgv']['email'] ?>"><?php echo $GLOBALS['cgv']['email'] ?></a></span>
										</p>
										<?= do_shortcode('[contact-form-7 id="1131" title="Newsletter short" html_class="newsletter"]'); ?>
<?php 
	$socialArr = array();

	if(!empty($GLOBALS['cgv']['linkedin'])) $socialArr['linkedin'] = $GLOBALS['cgv']['linkedin'];
	if(!empty($GLOBALS['cgv']['facebook'])) $socialArr['facebook'] = $GLOBALS['cgv']['facebook'];
	if(!empty($GLOBALS['cgv']['twitter'])) $socialArr['twitter'] = $GLOBALS['cgv']['twitter'];
	if(!empty($GLOBALS['cgv']['instagram'])) $socialArr['instagram'] = $GLOBALS['cgv']['instagram'];
	if(!empty($GLOBALS['cgv']['google-plus'])) $socialArr['google-plus'] = $GLOBALS['cgv']['google-plus'];

	if(!empty($socialArr)):
?>
										<p class="social-links">
										<?php if(!empty($socialArr['linkedin'])): ?>
											<a href="$socialArr['linkedin']" title="LinkedIn" target="_blank"><i class="fa fa-linkedin"></i></a>
										<?php endif; ?>
										<?php if(!empty($socialArr['facebook'])): ?>
											<a href="<?= $socialArr['facebook'] ?>" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
										<?php endif; ?>
										<?php if(!empty($socialArr['twitter'])): ?>
											<a href="<?= $socialArr['twitter'] ?>" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
										<?php endif; ?>
										<?php if(!empty($socialArr['instagram'])): ?>
											<a href="<?= $socialArr['instagram'] ?>" title="Instagram" target="_blank"><i class="fa fa-instagram"></i></a>
										<?php endif; ?>
										<?php if(!empty($socialArr['google-plus'])): ?>
											<a href="<?= $socialArr['google-plus'] ?>" title="Google+" target="_blank"><i class="fa fa-google-plus"></i></a>
										<?php endif; ?>
											<div class="participe"><button>Participe</button></div>
										</p>
	<?php endif; ?>
									</div><!--/.box-right-->
								</div><!--/.contact-us-box-->
							</li>
						</ul>
					</nav>

					<div class="row" style="overflow:hidden; margin: 0;">
						<div class="col-sm-8 col-xs-5 logo">
							<a href="<?= site_url() ?>"><img src="img/logo-header.png" /></a>
						</div><!--/.col-xs-8-->
						<div class="col-sm-4">
							<button class="open-responsive-menu"><i class="fa fa-bars"></i></button>
							<div class="participe"><button>Participe</button></div>
						</div><!--/.col-xs-4-->
						<div class="stripped-border"><!-- Border --></div>
					</div><!--/.row-->
				</div>
			</div>
		</div>
	</section>
