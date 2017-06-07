<?php
/**
* The main template file
*
* This is the most generic template file in a WordPress theme and one
* of the two required files for a theme (the other being style.css).
* It is used to display a page when nothing more specific matches a query,
* e.g., it puts together the home page when no home.php file exists.
*
* @link http://codex.wordpress.org/Template_Hierarchy
*
* @package WordPress
* @subpackage Instituto
* @since Instituto 1.0
*/
get_header();
?>
<section id="projetos" class="front-page-section">
	<div class="container">
		<header class="col-sm-10 col-sm-offset-1">
			<h3 class="general-title">Projetos</h3>
			<p>Nossos projetos se dividem nos seguintes eixos de atuação:</p>
		</header>
		<?php

		$args = array(
			'orderby'          => 'date',
			'order'            => 'ASC',
			'post_type'        => 'pt_projetos',
			'post_status'      => 'publish',
			'suppress_filters' => true
			);

		$projetos_array = get_posts( $args );

		$c = 1;
//print_r($post);
		?>
		<ul class="col-xs-12 project-tabs">
			<?php foreach($projetos_array as $proj): ?>
				<li class="tab"><a href="#"><?= $proj->post_title; ?></a></li>
			<?php endforeach; ?>
		</ul>
		<div class="content-holder">
			<?php foreach($projetos_array as $proj):
			$image = wp_get_attachment_image_src( get_post_thumbnail_id( $proj->ID ), 'single-post-thumbnail' );
			$proj->featured_img = $image[0];//var_dump($image);
			?>
			<article class="row">
				<div class="col-sm-5 col-sm-offset-1 text-holder">
					<h3><?= $proj->post_title; ?></h3>
					<div class="project-entry">
						<?= $proj->post_content; ?>
					</div><!--/.project-entry-->
					<a href="<?= site_url('projetos') ?>"><button>Saiba mais</button></a>
				</div>
				<?php if($image): ?>
					<div class="col-sm-6">
						<img src="<?= $proj->featured_img ?>">
					</div>
				<?php endif; ?>
			</article>
		<?php endforeach; ?>
	</div>
</div>
</section>

<section id="blog" class="front-page-section">
	<div class="container">
		<header>
			<h3 class="general-title">BloCo</h3>
			<p>O Blog contra a Corrupção</p>
		</header>
		<div class="row">
<?php

	query_posts( array(
		'category_name' => "principal",
		'posts_per_page' => 2
	));

	if(!have_posts()) {
		query_posts( array(
			'category_name' => "destaque",
			'posts_per_page' => 2
		));
	}

	if(!have_posts()) {
		query_posts( array(
			'category_name' => "uncategorized",
			'posts_per_page' => 2
		));
	}

	while(have_posts()) : the_post();
?>
			<article class="col-sm-6 col-xs-12 blog-post">
				<?php if(get_the_post_thumbnail()): ?>
				<div class="post" style="background-image: url('<?= the_post_thumbnail_url() ?>');">
				<?php else: ?>
				<div class="post">
				<?php endif;?>
					<span class="date-label">
						<b><?php the_time('d'); ?></b> 
						<?php the_time('M Y'); ?>
					</span>
					<?php if( has_category('mundo') ) : ?>
					<span class="flag-label"><img src="img/mundo-icon.png" alt=""></span>
					<?php elseif ( has_category('instituto') ) : ?>
					<span class="flag-label"><img src="img/mini-logo.png" alt=""></span>
					<?php endif; ?>
					<a href="<?php the_permalink() ?>" class="post-title"><?= the_title() ?></a>
					<a href="<?php the_permalink() ?>" class="post-entry">
						<h3><?php the_title() ?></h3>
						<p><?php the_excerpt() ?></p>
						<span href="<?php the_permalink() ?>" title="Read more" class="post-button">ler mais</span>
					</a><!--/.post-entry-->
				</div><!--/.post-->
			</article>
<?php endwhile; ?>
		</div>
		<a href="<?= site_url('bloco') ?>" title="VER" class="latest-news-button">VER</a>
	</div>
</section>

<section id="participe" class="front-page-section">
	<div class="container">
		<header>
			<h3 class="general-title">FAÇA PARTE DA MUDANÇA. <strong>PARTICIPE.</strong></h3>
			<p></p>
		</header>
		<div class="row col-sm-10 col-sm-offset-1 textos">
			<article class="col-sm-4">
				<h4>Embaixador</h4>
				<p>Os embaixadores nos ajudarão a divulgar o instituto, nossa causa e nossos projetos em suas respectivas redes sociais. Baixe agora seu kit de imagens!</p>
				<a href="<?= site_url('participe') ?>" class="eu-quero">Eu quero!</a>
			</article>
			<article class="col-sm-4">
				<h4>Doação</h4>
				<p>Os doadores investem o valor que lhes for conveniente, com periodicidade anual, podendo ser definidos como Ouro, Prata ou Bronze.</p>
				<a href="<?= site_url('participe') ?>" class="eu-quero">Eu quero!</a>
			</article>
			<article class="col-sm-4">
				<h4>Voluntários</h4>
				<p>Os voluntários contribuem com seu tempo e sua expertise, conforme sua disponibilidade, para ajudar a realizar nossos projetos.</p>
				<a href="<?= site_url('participe') ?>" class="eu-quero">Eu quero!</a>
			</article>
		</div>
		<div class="row col-sm-10 col-sm-offset-1 botoes">
			<article class="col-sm-4">
				<a href="<?= site_url('participe') ?>" class="eu-quero">Eu quero!</a>
			</article>
			<article class="col-sm-4">
				<a href="<?= site_url('participe') ?>" class="eu-quero">Eu quero!</a>
			</article>
			<article class="col-sm-4">
				<a href="<?= site_url('participe') ?>" class="eu-quero">Eu quero!</a>
			</article>
		</div>
	</div>
	<div class="service-br-flag"><!-- --></div>
</section>

<section id="parceiro" class="front-page-section">
	<div class="container">
		<header>
			<h3 class="general-title">Conheça nossos principais apoiadores</h3>
			<p>Queremos agradecer nossos parceiros, sem quem não seria possível nada.</p>
		</header>
		<ul class="slick-carousel">
<?php
	query_posts( array(
		'category_name' => "principal",
		'posts_per_page' => 2
	));
?>
			<li><a href="javascript:void(0);" target="_blank"><img src="img/Parceiros/Ouro/ITAU.jpg"></a></li>
			<li><a href="javascript:void(0);" target="_blank"><img src="img/Parceiros/Ouro/MULTIPLAN.png"></a></li>
		</ul>
		<button class="bnt-ver-todos logo-carousel-btn">Ver todos</button>
	</div>
</section>

<?php
get_footer();
?>
