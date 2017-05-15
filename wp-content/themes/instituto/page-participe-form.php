<?php
global $wpdb, $post;
while(have_posts()): the_post();
?>
	<div class="participe-form">
		<h2><?php the_title() ?></h2>
		<div><?php the_content(); ?></div>
		<p class="note">* campos obrigatórios</p>
	</div>
<?php endwhile; ?>