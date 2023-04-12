<?php get_template_part( 'template-parts/layout-start', 'post_archive', array( 'template' => 'post_archive' ) ); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php get_template_part( 'template-parts/format', WSUWP\Theme\WDS\Theme::get_wsu_option( 'template_post_archive', 'format', 'index' ), array( 'template' => 'post_archive' ) ); ?>
<?php endwhile; endif; ?>
<?php get_template_part( 'template-parts/layout-end', 'post_archive', array( 'template' => 'post_archive' ) ); ?>
