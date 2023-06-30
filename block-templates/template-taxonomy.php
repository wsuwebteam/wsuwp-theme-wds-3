<?php WSUWP\Theme\WDS\Theme::get_wsu_block_template( 'block-templates/template-header', get_queried_object()->taxonomy, array( 'sidebar' => 'sidebar_post' ), false ); ?>
<!-- wp:wsutheme/post-header -->
	<!-- wp:wsutheme/breadcrumbs /-->
	<!-- wp:wsutheme/page-title /-->
<!-- /wp:wsutheme/post-header -->
<!-- wp:wsutheme/posts {"style":"index"} -->
<!-- /wp:wsutheme/posts -->
<?php WSUWP\Theme\WDS\Theme::get_wsu_block_template( 'block-templates/template-footer', get_queried_object()->taxonomy, array(), false ); ?>
