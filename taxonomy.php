<?php get_header(); ?>
<?php WSUWP\Theme\WDS\Theme::get_wsu_block_template( 'block-templates/template-taxonomy', get_queried_object()->taxonomy ); ?>
<?php get_footer(); ?>