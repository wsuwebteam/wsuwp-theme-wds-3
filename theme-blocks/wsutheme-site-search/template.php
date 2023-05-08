<section class="wsu-section  wsu-width--full wsu-spacing-after--xxmedium">
    <div class="wsu-section__inner wsu-width--content">    
        <form class="wsu-search " method="get" action="<?php echo get_site_url(); ?>">
            <div class="wsu-search__search-bar">
                <input class="wsu-search__input" type="text" aria-lable="Search input" placeholder="Search" name="s" value="<?php echo esc_attr( $_REQUEST['s'] ); ?>" />
                <button class="wsu-search__submit" aria-lable="Submit Search"></button>
            </div>

            <div class="wsu-search__search-options">
                <input type="radio" class="wsu-search__search-toggle" id="wsu-search__search-toggle-site" name="search_context" value="site" <?php if ( empty( $_REQUEST['search_context'] ) || 'site' === $_REQUEST['search_context'] ) : ?> checked="checked"<?php endif; ?> /><label for="wsu-search__search-toggle-site" class="wsu-search__search-toggle-label">Search <?php echo wp_parse_url( get_site_url(), PHP_URL_HOST ); ?></label>
                <input type="radio" class="wsu-search__search-toggle" id="wsu-search__search-toggle-wsu" name="search_context" value="wsu" <?php if ( 'wsu' === $_REQUEST['search_context'] ) : ?> checked="checked"<?php endif; ?> /><label for="wsu-search__search-toggle-wsu" class="wsu-search__search-toggle-label">Search all wsu.edu</label>
            </div>

        </form>
    </div>
</section>
<script async src="https://cse.google.com/cse.js?cx=54e8a42262bb5e5f2"></script>
<div class="gcse-searchresults-only" data-queryParameterName="s" <?php if ( empty( $_REQUEST['search_context'] ) || 'site' === $_REQUEST['search_context'] ) : ?>data-as_sitesearch="<?php echo get_site_url(); ?>"<?php endif; ?>></div>
