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
	<section>
		<div class="container">
			<header class="col-sm-10 col-sm-offset-1">
				<h3 class="general-title">aqui você achará as respostas</h3>
				<p>Basta clicar em um dos campos ou procurar usando palavras chaves</p>
			</header>
			<form action="" class="search">
				<input type="text" placeholder="Buscar por palavra(s) chave(s)">
				<button>PROCURAR <i class="fa fa-search"></i></button>
			</form>
<?php $args = array(
	'orderby'          => 'date',
	'order'            => 'ASC',
	'post_type'        => 'pt_faq',
	'post_status'      => 'publish',
	'suppress_filters' => true, 
    'posts_per_page'   => -1, 
    'numberposts'	   => -1
);
$posts_array = get_posts( $args ); 

$c = 1;
foreach($posts_array as $post):
?>
			<article class="pergunta row">
				<?php if($c==1):?>
				<h4><a href="#resposta-<?= $c ?>" data-toggle="collapse" data-target="#resposta-<?= $c ?>" aria-expanded="true" aria-controls="resposta-<?= $c ?>"><span><?= $post->post_title; ?></span></a></h4>
				<div id="resposta-<?= $c ?>" class="col-sm-10 col-sm-offset-1 collapse in">
				<?php else: ?>
				<h4><a href="#resposta-<?= $c ?>" data-toggle="collapse" data-target="#resposta-<?= $c ?>" aria-expanded="true" aria-controls="resposta-<?= $c ?>" class="collapsed"><span><?= $post->post_title; ?></span></a></h4>
				<div id="resposta-<?= $c ?>" class="col-sm-10 col-sm-offset-1 collapse">
				<?php endif; ?>
					<div class="resposta">
					<?= $post->post_content; ?>
					</div>
				</div>
			</article>
<?php 
	$c++;
endforeach; ?>
		</div>
	</section>

<?php
  get_footer();
?>