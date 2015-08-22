<?php

	function theme_name_scripts() {
  wp_enqueue_style( 'style-bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
  wp_enqueue_style( 'style-name', get_template_directory_uri() . '/css/df_style.css');
  wp_enqueue_style( 'jquery.bxslider', get_template_directory_uri() . '/css/jquery.bxslider.css');


  wp_enqueue_script( 'jQuery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js', array(), '', true );
  wp_enqueue_script( 'Bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array(), '', true );
  wp_enqueue_script( 'bxslider', get_template_directory_uri() . '/js/jquery.bxslider.js', array(), '', true );
  wp_enqueue_script( 'global', get_template_directory_uri() . '/js/globe.js', array(), '', true );
}

add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

	// Register Custom Navigation Walker
	require_once('wp_bootstrap_navwalker.php');

	register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'THEMENAME' ),
	
	) );

	function custom_pagination($numpages = '', $pagerange = '', $paged='') {

  if (empty($pagerange)) {
    $pagerange = 2;
  }

  /**
   * This first part of our function is a fallback
   * for custom pagination inside a regular loop that
   * uses the global $paged and global $wp_query variables.
   * 
   * It's good because we can now override default pagination
   * in our theme, and use this function in default quries
   * and custom queries.
   */
  global $paged;
  if (empty($paged)) {
    $paged = 1;
  }
  if ($numpages == '') {
    global $wp_query;
    $numpages = $wp_query->max_num_pages;
    if(!$numpages) {
        $numpages = 1;
    }
  }

  /** 
   * We construct the pagination arguments to enter into our paginate_links
   * function. 
   */
  $pagination_args = array(
    'base'            => get_pagenum_link(1) . '%_%',
    'format'          => 'page/%#%',
    'total'           => $numpages,
    'current'         => $paged,
    'show_all'        => False,
    'end_size'        => 1,
    'mid_size'        => $pagerange,
    'prev_next'       => True,
    'prev_text'       => __('&laquo;'),
    'next_text'       => __('&raquo;'),
    'type'            => 'plain',
    'add_args'        => false,
    'add_fragment'    => ''
  );

  $paginate_links = paginate_links($pagination_args);

  if ($paginate_links) {
    echo "<nav class='custom-pagination'>";
      echo "<span class='page-numbers page-num'>Page " . $paged . " of " . $numpages . "</span> ";
      echo $paginate_links;
    echo "</nav>";
  }

}

?>
