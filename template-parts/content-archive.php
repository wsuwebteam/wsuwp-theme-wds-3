<?php get_template_part( 'template-parts/layout-start', 'archive', array( 'template' => 'archive' ) ); ?>
<?php get_template_part( 'template-parts/article-header', 'archive', array( 'template' => 'archive' ) ); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php get_template_part( 'template-parts/format', WSUWP\Theme\WDS\Theme::get_wsu_option( 'template_archive', 'format', 'index' ), array( 'template' => 'archive' ) ); ?>
<?php endwhile; endif; ?>
<?php get_template_part( 'template-parts/layout-end', 'archive', array( 'template' => 'archive' ) ); ?>
