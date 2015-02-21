<?php
	
	// Pagination
	function skeletic_pagination() {
		global $wp_query;
	 
		$big = 999999999; // This needs to be an unlikely integer
	 
		// For more options and info view the docs for paginate_links()
		// http://codex.wordpress.org/Function_Reference/paginate_links
		$paginate_links = paginate_links( array(
			'base' => str_replace( $big, '%#%', get_pagenum_link($big) ),
			'current' => max( 1, get_query_var('paged') ),
			'total' => $wp_query->max_num_pages,
			'mid_size' => 5,
			'prev_next' => True,
		    'prev_text' => __('&laquo;'),
		    'next_text' => __('&raquo;'),
			'type' => 'list'
		) );
	 
		$paginate_links = str_replace( "<ul class='page-numbers'>", "<ul class='pagination'>", $paginate_links );
		$paginate_links = str_replace( "<li><span class='page-numbers current'>", "<li class='current'><a href='#'>", $paginate_links );
		$paginate_links = str_replace( "</span>", "</a>", $paginate_links );
		$paginate_links = preg_replace( "/\s*page-numbers/", "", $paginate_links );

		// Display the pagination if more than one page is found
		if ( $paginate_links ) {
			echo '<div class="container">';
			echo $paginate_links;
			echo '</div><!--// end .pagination -->';
		}
	}

	// A better title
	// http://www.deluxeblogtips.com/2012/03/better-title-meta-tag.html
	function rw_title( $title, $sep, $seplocation ) {
	  global $page, $paged;
	  // Don't affect in feeds.
	  if ( is_feed() ) return $title;
	  // Add the blog's name
	  if ( 'right' == $seplocation ) {
	    $title .= get_bloginfo( 'name' );
	  } else {
	    $title = get_bloginfo( 'name' ) . $title;
	  }
	  // Add the blog description for the home/front page.
	  $site_description = get_bloginfo( 'description', 'display' );
	  if ( $site_description && ( is_home() || is_front_page() ) ) {
	    $title .= " {$sep} {$site_description}";
	  }
	  // Add a page number if necessary:
	  if ( $paged >= 2 || $page >= 2 ) {
	    $title .= " {$sep} " . sprintf( __( 'Page %s', 'dbt' ), max( $paged, $page ) );
	  }
	  return $title;
	} // end better title
?>