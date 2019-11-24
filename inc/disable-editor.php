<?php 

// Check if Editor Should Be Disabled
function disable_editor( $id = false ) {

  if ( empty( $id ) )  
    return false;

  $excluded_templates = array(
    'page-templates/modules.php'
  );

  $excluded_ids = array(
		get_option( 'page_on_front' )
	);

  $template = get_page_template_slug( $id );

  return in_array( $id, $excluded_ids ) || in_array( $template, $excluded_templates );

}

// Disable Gutenberg Editor
function disable_gutenberg( $can_edit ) {

  if( ! ( is_admin() && !empty( $_GET['post'] ) ) )
		return $can_edit;

	if( disable_editor( $_GET['post'] ) )
		return false;

	return $can_edit;

}
add_filter( 'gutenberg_can_edit_post_type', 'disable_gutenberg', 10, 2 );
add_filter( 'use_block_editor_for_post_type', 'disable_gutenberg', 10, 2 );

// Disable Classic Editor
function disable_classic_editor(  ) {

  $screen = get_current_screen();
	if( 'page' !== $screen->id || ! isset( $_GET['post']) )
		return;

	if( disable_editor( $_GET['post'] ) ) {
		remove_post_type_support( 'page', 'editor' );
	}

}
add_action( 'admin_head', 'disable_classic_editor' );