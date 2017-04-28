<?php get_template_part('blog-header'); ?>
<?php 
	while(have_posts()): the_post();

		$profession = get_cimyFieldValue(get_the_author_ID(), 'PROFESSION');
		$twitter = get_cimyFieldValue(get_the_author_ID(), 'TWITTER');
		$picture = get_cimyFieldValue(get_the_author_ID(), 'PROFILE_PICTURE');

?>
	<div class="container"><div class="featured-img"<?php
		if(has_post_thumbnail()) {
			echo 'style="background-image:url(' . get_the_post_thumbnail_url() . ');"';
		}
	?>><!-- Featured img --></div></div>
	<section id="the-news">
		<div class="container">
			<div class="row">
<?php // TODO: The Author ?>
				<div class="col-sm-3 author">
					<img src="<?= $picture ?>" alt="">

					<h3><?php the_author_meta('display_name'); ?></h3>
					<h4><?= $profession ?></h4>
					<a class="twitter" href="http://www.twitter.com/<?= $twitter ?>">
						<span><i class="fa fa-twitter" aria-hidden="true"></i> <?= $twitter ?></span>
					</a>
					<a href="javascript:void(0);" class="share"><!-- share --></a>
				</div>
				<article class="col-sm-8 the-article">
					<header>
						<?php foreach(get_the_category() as $cat): 
							if(!in_array($cat->category_nicename,array("destaque","principal"))): ?>
							<span class="category"><?= $cat->cat_name ?></span>
						<?php endif;
						endforeach; ?>
						<span class="date-time"><?php the_time('d \d\e F \d\e Y | G:i' ); ?></span>
						<h1><?php the_title(); ?></h1>
					</header>

					<?php the_content(); ?>

					<?php echo get_the_tag_list('<ul class="tags"><li>','</li><li>','</li></ul>'); ?>
				</article>
			</div>
		</div>
	</section>
<?php endwhile; ?>
	<section id="prev-next">
		<?php 
			$prev = get_adjacent_post(false,'',true); 
			$next = get_adjacent_post(false,'',false); 

			$pLimit = $nLimit = 100;
		?>
		<div class="container">
			<div class="row">	
				<div class="col-sm-5 col-sm-offset-1 prev-news">
				<?php if($prev != ""): ?>
					<a href="<?php the_permalink($prev) ?>">
						<?php if(has_post_thumbnail($prev->ID)):
							$postThumbID = get_post_thumbnail_id($prev->ID);
							$thumbUrl = wp_get_attachment_thumb_url($postThumbID);
							$pLimit = 65;
						?>
						<img src="<?= $thumbUrl ?>" alt="">
						<?php endif; ?>
						<h4>Matéria Anterior</h4>
						<h3><?= limit_chars($prev->post_title,$pLimit) ?></h3>
						<i class="fa fa-angle-left" aria-hidden="true"></i>
					</a>
				<?php endif; ?>
				</div>
				<div class="col-sm-5 next-news">
				<?php if($next != ""): ?>
					<a href="<?php the_permalink($next) ?>">
						<?php if(has_post_thumbnail($next->ID)):
							$postThumbID = get_post_thumbnail_id($next->ID);
							$thumbUrl = wp_get_attachment_thumb_url($postThumbID);
							$nLimit = 65;
						?>
						<img src="<?= $thumbUrl ?>" alt="">
						<?php endif; ?>
						<h4>Matéria Seguinte</h4>
						<h3><?= limit_chars($next->post_title,$nLimit) ?></h3>
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</a>
				</div>
				<?php endif; ?>
			</div>
		</div>
	</section>
	<section id="related">
		<div class="container">
			<div class="row">	
				<h3 class="col-xs-12">Posts relacionados</h3>
				<ul class="col-xs-12 row">
<?php
	$orig_post = $post;
	global $post;
	$tags = wp_get_post_tags($post->ID);

	if ($tags):
		$tag_ids = array();
		foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
		$args=array(
			'tag__in' => $tag_ids,
			'post__not_in' => array($post->ID),
			'posts_per_page'=>3, // Number of related posts to display.
			'caller_get_posts'=>1
		);

	$my_query = new wp_query( $args );

	while( $my_query->have_posts() ):
		$my_query->the_post();
?>
					<li class="col-sm-4">
						<a href="#">
							<img src="<?php get_the_post_thumbnail_url() ?>" alt="">
							<h4>
								<i class="fa fa-caret-right" aria-hidden="true"></i>
								<?php the_short_title(35) ?>
							</h4>
							<span class="date-time"><?php the_time('d \d\e F \d\e Y | G:i' ); ?></span>
						</a>
					</li>
<?php endwhile;
	endif;
	?>
				</ul>
			</div>
		</div>
	</section>

<?php 
// If comments are open or we have at least one comment, load up the comment template.
 if ( comments_open() || get_comments_number() ) :
     comments_template();
 endif;
?>
<?php get_footer() ?>