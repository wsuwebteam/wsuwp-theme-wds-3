<?php get_template_part( 'template-parts/layout-start', 'page', array( 'template' => 'page' ) ); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php get_template_part( 'template-parts/format', WSUWP\Theme\WDS\Theme::get_template_setting( 'template_page', 'format', 'page' ), array( 'template' => 'page' ) ); ?>
<?php endwhile; endif; ?>
<?php get_template_part( 'template-parts/layout-end', 'page', array( 'template' => 'page' ) ); ?>
