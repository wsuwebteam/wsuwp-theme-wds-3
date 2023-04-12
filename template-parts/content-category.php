<?php get_template_part( 'template-parts/layout-start', 'category', array( 'template' => 'category' ) ); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php get_template_part( 'template-parts/format', WSUWP\Theme\WDS\Theme::get_template_setting( 'template_category', 'format', 'index' ), array( 'template' => 'category' ) ); ?>
<?php endwhile; endif; ?>
<?php get_template_part( 'template-parts/layout-end', 'category', array( 'template' => 'category' ) ); ?>
