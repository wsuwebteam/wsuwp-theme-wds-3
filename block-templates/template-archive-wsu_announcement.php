<?php WSUWP\Theme\WDS\Theme::get_wsu_block_template( 'block-templates/template-header', 'archive_wsu_announcement', array( 'sidebar' => 'sidebar_post' ), false ); ?>
		<!-- wp:wsutheme/post-header -->
			<!-- wp:wsutheme/breadcrumbs /-->
			<!-- wp:wsutheme/page-title -->Notices and Announcements<!-- /wp:wsutheme/page-title -->
		<!-- /wp:wsutheme/post-header -->
		<!-- wp:wsutheme/widget-area {"locationPrefix":"before_content"} /-->
		<?php if ( ! is_paged() ) : ?><h2>Recent <strong>Submissions</strong></h2><?php endif; ?>
		<!-- wp:wsutheme/posts {"style":"accordion"} -->
		<!-- /wp:wsutheme/posts -->
		<!-- wp:wsutheme/posts-pagination /-->
		<!-- wp:wsutheme/widget-area {"locationPrefix":"after_content"} /-->
<?php WSUWP\Theme\WDS\Theme::get_wsu_block_template( 'block-templates/template-footer', 'archive_wsu_announcement', array(), false ); ?>
