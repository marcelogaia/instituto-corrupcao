<?php
global $wpdb, $post;
if(empty($_POST)):
while(have_posts()): the_post();
?>
	<div class="participe-form">
		<h2><?php the_title() ?></h2>
		<div><?php the_content(); ?></div>
		<p class="note">* campos obrigatórios</p>
	</div>
<?php endwhile; 
else:
	echo "success";
endif;