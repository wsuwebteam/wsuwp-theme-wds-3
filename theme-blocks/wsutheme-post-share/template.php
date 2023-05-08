<ul class="wsu-social-icons">
	<li class="wsu-social-icons__twitter">
		<a href="https://twitter.com/intent/tweet?text=<?php echo esc_attr( urldecode( $args['title'] ) ); ?>&url=<?php echo esc_url( $args['link'] ); ?>" title="Share on Twitter"></a>
	</li>
	<li class="wsu-social-icons__faceblook">
		<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo esc_url( $args['link'] ); ?>" title="Share on FaceBook"></a>
	</li>
	<li class="wsu-social-icons__linkedin">
		<a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo esc_url( $args['link'] ); ?>" title="Share on Linkedin"></a>
	</li>
	<li class="wsu-social-icons__email">
		<a href="mailto:?subject=Shared%20With%20You:%20<?php echo esc_attr( urldecode( $args['title'] ) ); ?>&body=<?php echo esc_url( $args['link'] ); ?>" title="share with email"></a>
	</li>
</ul>
