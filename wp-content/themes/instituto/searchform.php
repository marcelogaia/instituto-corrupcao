<?php echo '<form role="search" method="get" class="search-form" action="' . esc_url( home_url( '/' ) ) . '">
	<input type="search" class="search-field" placeholder="' . esc_attr_x( 'Search &hellip;', 'placeholder' ) . '" value="' . get_search_query() . '" name="s" />
	<button type="submit" class="search-submit">'. esc_attr_x( 'Procurar', 'submit button' ) .'</button>
</form>';

?>