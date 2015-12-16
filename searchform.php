<form action="<?php echo home_url( '/' ); ?>" method="get">
    <fieldset>
		<input type="text" name="s" id="search" placeholder="<?php _e("Buscar", "simple-bootstrap"); ?>" value="<?php the_search_query(); ?>" class="form-control" />
		<button type="submit" class="btn btn-primary"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/search-icon.png"></button>
    </fieldset>
</form>