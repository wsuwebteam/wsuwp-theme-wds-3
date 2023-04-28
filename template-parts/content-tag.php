<?php get_template_part( 'template-parts/layout-start', 'tag', array( 'template' => 'tag' ) ); ?>
<?php get_template_part( 'template-parts/article-header', 'tag', array( 'template' => 'tag' ) ); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php get_template_part( 'template-parts/format', WSUWP\Theme\WDS\Theme::get_template_setting( 'template_tag', 'format', 'index' ), array( 'template' => 'tag' ) ); ?>
<?php endwhile; endif; ?>
<?php get_template_part( 'template-parts/layout-end', 'tag', array( 'template' => 'tag' ) ); ?>
