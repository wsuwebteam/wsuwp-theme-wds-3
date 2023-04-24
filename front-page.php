<?php get_header(); ?>
<?php get_template_part( 'template-parts/header-global', 'frontpage', array( 'template' => 'frontpage' )  ); ?>
<?php get_template_part( 'template-parts/header-site', 'frontpage', array( 'template' => 'frontpage' )  ); ?>
<?php get_template_part( 'template-parts/quicklinks', 'frontpage', array( 'template' => 'frontpage' )  ); ?>
<?php get_template_part( 'template-parts/navigation-mobile', 'frontpage', array( 'template' => 'frontpage' )  ); ?>
<?php get_template_part( 'template-parts/navigation-horizontal', 'frontpage', array( 'template' => 'frontpage' )  ); ?>
<?php get_template_part( 'template-parts/navigation-vertical', 'frontpage', array( 'template' => 'frontpage' )  ); ?>
<?php get_template_part( 'template-parts/navigation-quicklinks', 'frontpage', array( 'template' => 'frontpage' )  ); ?>
<?php get_template_part( 'template-parts/content', 'frontpage', array( 'template' => 'frontpage' ) ); ?>
<?php get_template_part( 'template-parts/footer-global', 'frontpage', array( 'template' => 'frontpage' ) ); ?>
<?php get_footer(); ?>