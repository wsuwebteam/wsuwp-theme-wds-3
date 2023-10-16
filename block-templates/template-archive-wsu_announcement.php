<?php WSUWP\Theme\WDS\Theme::get_wsu_block_template( 'block-templates/template-header', 'archive_wsu_announcement', array( 'sidebar' => 'sidebar_post' ), false ); ?>
		<!-- wp:wsutheme/post-header -->
			<!-- wp:wsutheme/breadcrumbs /-->
			<!-- wp:wsutheme/page-title -->Notices and Announcements<!-- /wp:wsutheme/page-title -->
		<!-- /wp:wsutheme/post-header -->
		<!-- wp:wsutheme/widget-area {"locationPrefix":"before_content"} /-->
		<!-- wp:wsutheme/search-bar /-->
		<h2>
			<?php if ( isset( $_REQUEST['search_announcements'] ) ) : ?>Search <strong>Results</strong>
				<?php elseif ( is_paged() ) : ?>Announcement <strong>Archive</strong>
				<?php else : ?>Recent <strong>Submissions</strong>
			<?php endif; ?>
		</h2>
		<!-- wp:wsutheme/posts {"style":"accordion"} -->
		<!-- /wp:wsutheme/posts -->
		<!-- wp:wsutheme/posts-pagination /-->
		<!-- wp:wsutheme/widget-area {"locationPrefix":"after_content"} /-->
<?php WSUWP\Theme\WDS\Theme::get_wsu_block_template( 'block-templates/template-footer', 'archive_wsu_announcement', array(), false ); ?>
