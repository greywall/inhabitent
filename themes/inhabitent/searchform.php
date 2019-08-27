<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	
		
		<a class="icon-search" href="#">
			<i class="fa fa-search"></i>
		</a>

		<label>
			<input type="search" class="search-field" placeholder="Type and Hit Enter..." value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" />
		</label>

		<button class="search-submit screen-reader-text">
			<?php echo esc_html( 'Search' ); ?>
		</button>
	
</form>
