<aside id="sidebar" class="sidebar-news">
    <h3>In the News</h3>
    <?php

	// The Query
	
	$the_query = new WP_Query(array( 'posts_per_page' => 2, 'cat' => 4 ));

	// The Loop
	if ( $the_query->have_posts() ) {
		echo '<ul>';
		while ( $the_query->have_posts() ) {
			$the_query->the_post();
			echo '<li>';
			echo '<h4>' . get_the_title() . '</h4>';
			printf(__( '<time class="updated" datetime="%1$s" pubdate>%2$s</time>', 'bonestheme' ), get_the_time('m-d-y'), get_the_time(__( 'm/d/Y', 'bonestheme' )));
			the_content();
			if(get_field('link_to_article'))
			{
				echo '<a class="link-to-article" target="_blank" href="' . get_field('link_to_article') . '">Link to Article >></a>';
			}
			echo '</li>';
		}
		echo '</ul>';
	} else {
		// no posts found
	}
	/* Restore original Post Data */
	wp_reset_postdata();
?>
</aside>
