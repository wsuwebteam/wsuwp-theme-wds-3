<?php get_header(); ?>
<?php get_template_part( 'template-parts/header-global', get_post_type(), array( 'template' => get_post_type() )  ); ?>
<?php get_template_part( 'template-parts/header-site', get_post_type(), array( 'template' => get_post_type() )  ); ?>
<?php get_template_part( 'template-parts/navigation-mobile', get_post_type(), array( 'template' => get_post_type() )  ); ?>
<?php get_template_part( 'template-parts/navigation-horizontal', get_post_type(), array( 'template' => get_post_type() )  ); ?>
<?php get_template_part( 'template-parts/navigation-vertical', get_post_type(), array( 'template' => get_post_type() )  ); ?>
<?php get_template_part( 'template-parts/navigation-quicklinks', get_post_type(), array( 'template' => get_post_type() )  ); ?>
<?php get_template_part( 'template-parts/content', get_post_type(), array( 'template' => get_post_type() ) ); ?>
<?php get_template_part( 'template-parts/footer-global', get_post_type(), array( 'template' => get_post_type() ) ); ?>
<?php get_footer(); ?>