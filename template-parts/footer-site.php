<?php if ( is_active_sidebar( 'before_footer' ) ) : ?>
<div class="wsu-widget-area wsu-widget-area--before-footer">
    <?php dynamic_sidebar( 'before_footer' ); ?>
</div>
<?php endif; ?>
<?php WSUWP\Theme\WDS\Theme::render_block( 'footer-site' ); ?>