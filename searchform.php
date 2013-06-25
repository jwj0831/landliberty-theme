<form action="/" method="get">
        <input type="text" name="s" id="search-text" size="20" value="<?php the_search_query(); ?>" />
        <input type="image" id="search-btn" alt="Search" src="<?php bloginfo( 'template_url' ); ?>/images/top_btn_search.gif" />
</form>