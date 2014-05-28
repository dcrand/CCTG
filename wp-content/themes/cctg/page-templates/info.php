<?php 
/*
 * Template Name: Info Template
 * Description: A page template for the information pages.
 */
 ?>

<?php get_header(); ?>
		<!-- Main Section -->
		<div class="page-row">
		    <div class="wrap pad">
		     	<nav class="subnav">
			        <ul>
						<?php
						global $post;
						$current_page_parent = ( $post->post_parent ? $post->post_parent : $post->ID );

						wp_list_pages( array(
						     'title_li' => '',
						     'child_of' => $current_page_parent,
						     'depth' => '1' )
						);
						?>
					</ul>
			    </nav>

		        <section id="content"> 
			
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
							<h3 class="heading"><?php the_title();?></h3>
							<?php the_content(); ?>

					<?php endwhile; endif; ?>							

				</section>
				

				<?php get_sidebar(); ?>
			</div>
        </div>
		

<?php get_footer(); ?>
