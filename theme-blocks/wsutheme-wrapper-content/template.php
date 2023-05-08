<div class="wsu-wrapper-content<?php if ( ! empty( $args['className'] ) ) : ?> <?php echo esc_attr( $args['className'] ); ?><?php endif; ?>">
	<?php echo $content; ?>
	<?php if ( ! empty( $args['sidebar'] ) ) : ?>
	<aside class="wsu-wrapper-sidebar">
		<?php if ( is_active_sidebar( $args['sidebar'] ) ) : ?>
		<?php dynamic_sidebar( $args['sidebar'] ); ?>
		<?php endif; ?>
	</aside>
	<?php endif; ?>
</div>