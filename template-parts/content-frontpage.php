<?php get_template_part( 'template-parts/layout-start', 'frontpage', array( 'template' => 'frontpage' ) ); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php get_template_part( 'template-parts/format', WSUWP\Theme\WDS\Theme::get_template_setting( 'template_frontpage', 'format', 'page' ), array( 'template' => 'frontpage' ) ); ?>
<?php endwhile; endif; ?>
<?php get_template_part( 'template-parts/layout-end', 'frontpage', array( 'template' => 'frontpage' ) ); ?>
