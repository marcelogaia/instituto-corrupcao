<?php
/*
Plugin Name: Extend Comment
Version: 1.0
Plugin URI: http://smartwebworker.com
Description: A plug-in to add additional fields in the comment form.
Author: Specky Geek
Author URI: http://www.speckygeek.com
*/

// Add custom meta (ratings) fields to the default comment form
// Default comment form includes name, email and URL
// Default comment form elements are hidden when user is logged in
add_filter('comment_form_default_fields','custom_fields');
function custom_fields($fields) {

		$fields[ 'author' ] = '<div class="col-sm-3">
						<label for="author">Nome</label>
						<input type="text" id="author" name="author">
					</div>';
		
		$fields[ 'email' ] = '<div class="col-sm-3">
						<label for="email">Email</label>
						<input type="text" id="email" name="email">
					</div>';
		$fields[ 'url' ] = "";
		$fields[ 'phone' ] = "";

	return $fields;
}

// Add fields after default fields above the comment box, always visible

add_action( 'comment_form_logged_in_after', 'additional_fields' );
add_action( 'comment_form_after_fields', 'additional_fields' );

function additional_fields () {
	echo '
		<div class="col-sm-3">
			<label for="Cidade">cidade</label>
			<input type="text" id="cidade" name="cidade">
		</div>';

	echo '
		<div class="col-sm-3">
			<label for="Empresa">empresa</label>
			<input type="text" id="empresa" name="empresa">
		</div>';

}

// Save the comment meta data along with comment

add_action( 'comment_post', 'save_comment_meta_data' );
function save_comment_meta_data( $comment_id ) {
	if ( ( isset( $_POST['cidade'] ) ) && ( $_POST['cidade'] != '') )
	$cidade = wp_filter_nohtml_kses($_POST['cidade']);
	add_comment_meta( $comment_id, 'cidade', $cidade );

	if ( ( isset( $_POST['empresa'] ) ) && ( $_POST['empresa'] != '') )
	$empresa = wp_filter_nohtml_kses($_POST['empresa']);
	add_comment_meta( $comment_id, 'empresa', $empresa );
}


// Add the filter to check if the comment meta data has been filled or not

add_filter( 'preprocess_comment', 'verify_comment_meta_data' );
function verify_comment_meta_data( $commentdata ) {
	
	return $commentdata;
}

//Add an edit option in comment edit screen  

add_action( 'add_meta_boxes_comment', 'extend_comment_add_meta_box' );
function extend_comment_add_meta_box() {
    add_meta_box( 'title', __( 'Comment Metadata - Extend Comment' ), 'extend_comment_meta_box', 'comment', 'normal', 'high' );
}
 
function extend_comment_meta_box ( $comment ) {
    $cidade = get_comment_meta( $comment->comment_ID, 'cidade', true );
    $empresa = get_comment_meta( $comment->comment_ID, 'empresa', true );
    wp_nonce_field( 'extend_comment_update', 'extend_comment_update', false );
    ?>
    <p>
        <label for="cidade"><?php _e( 'Cidade' ); ?></label>
        <input type="text" name="cidade" value="<?php echo esc_attr( $cidade ); ?>" class="widefat" />
    </p>
    <p>
        <label for="empresa"><?php _e( 'Empresa' ); ?></label>
        <input type="text" name="empresa" value="<?php echo esc_attr( $empresa ); ?>" class="widefat" />
    </p>
    <?php
}

// Update comment meta data from comment edit screen 

add_action( 'edit_comment', 'extend_comment_edit_metafields' );
function extend_comment_edit_metafields( $comment_id ) {
    if( ! isset( $_POST['extend_comment_update'] ) || ! wp_verify_nonce( $_POST['extend_comment_update'], 'extend_comment_update' ) ) return;

	if ( ( isset( $_POST['cidade'] ) ) && ( $_POST['cidade'] != '') ) : 
	$cidade = wp_filter_nohtml_kses($_POST['cidade']);
	update_comment_meta( $comment_id, 'cidade', $cidade );
	else :
	delete_comment_meta( $comment_id, 'cidade');
	endif;
		
	if ( ( isset( $_POST['empresa'] ) ) && ( $_POST['empresa'] != '') ):
	$empresa = wp_filter_nohtml_kses($_POST['empresa']);
	update_comment_meta( $comment_id, 'empresa', $empresa );
	else :
	delete_comment_meta( $comment_id, 'empresa');
	endif;

}

// Add the comment meta (saved earlier) to the comment text 
// You can also output the comment meta values directly in comments template  

add_filter( 'comment_text', 'modify_comment');
function modify_comment( $text ){

	$plugin_url_path = WP_PLUGIN_URL;

	if( $commenttitle = get_comment_meta( get_comment_ID(), 'cidade', true ) ) {
		$commenttitle = '<strong>' . esc_attr( $commenttitle ) . '</strong><br/>';
		$text = $commenttitle . $text;
	} 

	if( $commenttitle = get_comment_meta( get_comment_ID(), 'empresa', true ) ) {
		$commenttitle = '<strong>' . esc_attr( $commenttitle ) . '</strong><br/>';
		$text = $commenttitle . $text;
	} 

	return $text;			 
}