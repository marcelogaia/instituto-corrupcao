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
	global $post;
	$thePost = $post;

	$the_slug = 'blog';
	$args = array(
		'name'        => $the_slug,
		'post_type'   => 'page',
		'post_status' => 'publish',
		'numberposts' => 1
	);
	$my_posts = get_posts($args);
	$post = $my_posts[0];

	get_header();

	$post = $thePost;
?>
	<div class="container">
		<div class="row">
			<section id="main" class="col-sm-8">			
<?
	// List all other posts

	if ( have_posts() ) : 
	$count = 0 ?>
				<section id="last-news">
					<h2><?php single_term_title(); ?></h2>
					<ul>
	<?php while( have_posts() ): the_post(); ?>
						<li>
							<a href="<?php the_permalink(); ?>">
								<div class="img">
								<?php if(get_the_post_thumbnail()): ?>
									<img class="blog-small" src="<?php the_post_thumbnail_url() ?>">
								<?php else: ?>
									<img class="blog-small" src="img/blog-placeholder-small.jpg">
								<?php endif; ?>
								</div>
								<h3><?php the_title() ?></h3>
								<p>
									<span class="date-time"><?php the_time('d \d\e F \d\e Y | G:i' ); ?></span>  
									<span class="comments"><?php comments_number( "Nenhum comentário", "1  comentário", "%  comentários" ); ?></span> | 
									<?php if( has_category('mundo') ) : ?>
									<img src="img/mundo-icon.png" alt="">
									<?php endif; ?>
									<?php if ( has_category('instituto') ) : ?>
									<img src="img/mini-logo.png" alt="">
									<?php endif; ?>
								</p>
							</a>
						</li>
	<?php endwhile; ?>
					</ul>
					<!-- <a href="<?= site_url('blog')?>" title="VER" class="latest-news-button">VER</a> -->
				</section>
<?php endif; ?>
			</section>
			<section id="side" class="col-sm-4">
				<?php get_search_form() ?>
				<div style="width:100%">
					<div class="fb-page" 
						data-href="https://www.facebook.com/institutonaoaceitocorrupcao"
						data-width="420" 
						data-hide-cover="false"
						data-show-facepile="false" 
						data-show-posts="false"></div>
				</div>
				
				<h3>Newsletter</h3><!--/.box-left-->
				<?= do_shortcode('[contact-form-7 id="1131" title="Newsletter short" html_class="newsletter"]') ?>
<?php 

$tags_arr = get_tags(); 
if(sizeof($tags_arr) > 0):
?>	

				<h3>Tags</h3>			
				<ul class="row tags">
<?php foreach ($tags_arr as $tag): ?>
	
					<li class="col-xs-4"><a href="<?php echo get_tag_link($tag->term_id); ?>"><?=$tag->name ?></a></li>
<?php endforeach ?>
				</ul>
<?php endif; ?>
						</section>
		</div>
	</div>		
<?php
  get_footer();
?>