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
	<div class="container">
		<div class="row">
			<section id="main" class="col-sm-8">
			
<?php // List all main posts
	query_posts(array('category_name' => 'principal') );

	if ( have_posts() ) : ?>
				<section id="news">
					<h2>Principais notícias</h2>
					<ul class="slick-carousel-blog">	
	<?php while( have_posts() ): the_post(); ?>
						<?php if(get_the_post_thumbnail()): ?>
						<li style="background-image: url(<?= the_post_thumbnail_url() ?>)">
						<?php else: ?>
						<li>
						<?php endif; ?>
							<a href="<?php the_permalink(); ?>" <?= post_class() ?>>
								<span class="date-label">
									<b><?php the_time('d'); ?></b> 
									<?php the_time('M Y'); ?>
								</span>
								<?php if( has_category('mundo') ) : ?>
								<span class="flag-label"><img src="img/mundo-icon.png" alt=""></span>
								<?php elseif ( has_category('instituto') ) : ?>
								<span class="flag-label"><img src="img/mini-logo.png" alt=""></span>
								<?php endif; ?>
								<h3><?= the_title() ?></h3>
							</a>
							<div class="hover">
								<h4><?php the_title() ?></h4>
								<?php my_excerpt(60) ?>
								<a href="<?php the_permalink() ?>">ler mais</a>
							</div>
						</li>
	<?php endwhile; ?>
					</ul>
				</section>
<?php  // List all featured posts
	endif; 
	query_posts( array(	
		'category_name' => "destaque", 
		'posts_per_page' => 4
	));

	if ( have_posts() ) : 
	$count = 0 ?>
				<section id="featured">
					<h2>Destaque</h2>
					<ul class="row">
<?php while( have_posts() ): the_post(); ?>	
						<li class="<?= $count<=0 ? 'col-sm-7' : 'col-sm-5 col-xs-12' ?>">
						<?php if(get_the_post_thumbnail()): ?>
							<div style="background-image: url(<?= the_post_thumbnail_url() ?>)">
								<a href="<?php the_permalink(); ?>">
						<?php else: ?>
							<div>
								<a href="<?php the_permalink(); ?>">
						<?php endif; ?>
									<span class="date-label"><b><?php the_time('d'); ?></b><?php the_time('M Y'); ?></span>
<?php if( has_category('mundo') ) : ?>
									<span class="flag-label"><img src="img/mundo-icon.png" alt=""></span>
<?php elseif ( has_category('instituto') ) : ?>
									<span class="flag-label"><img src="img/mini-logo.png" alt=""></span>
<?php endif; 
	$tags = get_the_tags();
	if($tags):
		foreach($tags as $t):
?>
									<span class="tag"><?= $t->name ?></span>
<?php 	endforeach;
	endif; ?>
									<h3><?= the_title() ?></h3>
								</a>
							</div>
<?php if($count == 0): ?>
							<div class="hover">
								<h4><?php the_title() ?></h4>
								<?php my_excerpt(20) ?>
								<a href="<?php the_permalink() ?>">ler mais</a>
							</div>
						</li>
<?php endif; ?>
	<?php 
			$count++;
		endwhile; ?>
					</ul>
				</section>
<?php endif;
	// List all other posts
	query_posts( 'category_name=uncategorized' );
	if ( have_posts() ) : 
	$count = 0 ?>
				<section id="last-news">
					<h2>ultimas notícias</h2>
					<ul class="filters">
						<li class="instituto"><button><img src="img/mini-logo.png" alt=""> Instituto</button></li>
						<li class="mundo"><button><img src="img/mundo-icon.png" alt=""> Mundo</button></li>
					</ul>
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
									<span class="date-time"><?php the_time('d \d\e F \d\e Y | G:i | ' ); ?></span>  
									<span class="comments"><?php comments_number( "Nenhum comentário", "1  comentário", "%  comentários" ); ?></span> | 
									<?php if( has_category('mundo') ) : ?>
									<img src="img/mundo-icon.png" alt="">
									<?php elseif ( has_category('instituto') ) : ?>
									<img src="img/mini-logo.png" alt="">
									<?php endif; ?>
								</p>
							</a>
						</li>
	<?php endwhile; ?>
					</ul>
					<a href="blog/" title="VER" class="latest-news-button">VER</a>
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
				<div class="form">
					<form action="#" method="post" class="wpcf7-form newsletter">
						<p>
							<label>
								<span class="wpcf7-form-control-wrap email">
									<input type="email" name="email" placeholder="email" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" />
								</span>
							</label>
							<input type="submit" value="enviar" class="wpcf7-form-control wpcf7-submit" />
						</p>
					</form>
				</div>
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