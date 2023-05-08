<ul class="wsu-social-icons">
	<?php foreach ( $social_accounts as $slug => $url ) : ?>
	<?php if ( ! empty( $url ) ) : ?>
	<li class="wsu-social-icons__<?php echo esc_attr( $slug ); ?>">
		<a href="<?php echo esc_url( $url ); ?>"><span class="screen-reader-only">Go to wsu <?php echo esc_attr( $slug ); ?></span></a>
	</li><?php endif; ?>
	<?php endforeach; ?>
</ul>