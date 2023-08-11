<?php WSUWP\Theme\WDS\Theme::get_wsu_block_template( 'block-templates/template-header', 'archive', array( 'sidebar' => 'sidebar_post' ), false ); ?>
		<!-- wp:wsutheme/post-header -->
			<!-- wp:wsutheme/breadcrumbs /-->
			<!-- wp:wsutheme/page-title /-->
		<!-- /wp:wsutheme/post-header -->
		<!-- wp:wsutheme/widget-area {"locationPrefix":"before_content"} /-->
		<!-- wp:wsutheme/posts {"style":"index"} -->
		<!-- /wp:wsutheme/posts -->
		<!-- wp:wsutheme/posts-pagination /-->
		<!-- wp:wsutheme/widget-area {"locationPrefix":"after_content"} /-->
<?php WSUWP\Theme\WDS\Theme::get_wsu_block_template( 'block-templates/template-footer', 'archive', array(), false ); ?>
