<aside id="sidebar" class="sidebar-recipients">
    <h3>Latest Recipients</h3>
<?php
	
	// The Query
	$the_query = new WP_Query( array( 'posts_per_page' => 5, 'cat' => 3 ) );

	// The Loop
	if ( $the_query->have_posts() ) {
		echo '<ul>';
		while ( $the_query->have_posts() ) {
			$the_query->the_post();
			
			echo '<li>';
				echo '<h4>'.get_the_title().'</h4>';
				if(get_field('website')){ echo '<a class="website" target="_blank" href="' . get_field('website') . '">Website</a>'; }
				echo '<p>Grant Value '. get_field('grant_value') .'</p>';
			echo '</li>';

		}
		echo '</ul>';		
	} else {
		// no posts found
	}
	/* Restore original Post Data */
	wp_reset_postdata();

?>
    

<a class="btn" href="<?php echo home_url();?>/category/grant-recipients">View all Recipients</a>

</aside>
