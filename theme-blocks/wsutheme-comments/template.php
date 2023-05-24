<div id="comments" class="wsu-comments__wrapper">
	<h2 class="wsu-comments__title">Comments</h2>
	<?php if ( have_comments() ) : ?>
		<div class="wsu-comments__subtitle">
			<span class="wsu-comments__subtitle-count"><?php echo esc_attr( get_comments_number() ); ?></span> comments on "<?php echo wp_kses_post( get_the_title() ); ?>"
		</div>
		<ol class="wsu-comments__list">
			<?php
			wp_list_comments( array(
				'style'       => 'ol',
				'short_ping'  => false,
			) );
			?>
		</ol><!-- .comment-list -->
		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
			<nav class="navigation comment-navigation" role="navigation">

				<h1 class="screen-reader-text section-heading"><?php _e( 'Comment navigation', 'twentythirteen' ); ?></h1>
				<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'twentythirteen' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'twentythirteen' ) ); ?></div>
			</nav><!-- .comment-navigation -->
		<?php endif; // Check for comment navigation ?>

		<?php if ( ! comments_open() && get_comments_number() ) : ?>
			<p class="no-comments"><?php _e( 'Comments are closed.', 'twentythirteen' ); ?></p>
		<?php endif; ?>
	<?php endif; // have_comments() ?>
	<?php comment_form(); ?>
</div>