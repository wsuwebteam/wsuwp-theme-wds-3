<?php get_template_part( 'template-parts/layout-start', 'post', array( 'template' => 'post' ) ); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php get_template_part( 'template-parts/format', WSUWP\Theme\WDS\Theme::get_template_setting( 'template_post', 'format', 'article' ), array( 'template' => 'post' ) ); ?>
<?php endwhile; endif; ?>
<?php get_template_part( 'template-parts/layout-end', 'post', array( 'template' => 'post' ) ); ?>