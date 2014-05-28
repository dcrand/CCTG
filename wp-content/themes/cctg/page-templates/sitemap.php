<?php 
/*
 * Template Name: Sitemap Template
 * Description: Sitemap Page.
 */
 ?>

<?php get_header(); ?>
		<!-- Main Section -->
		<div class="page-row">
		    <div class="wrap pad">
		        <section id="content"> 
					<h2 id="pages">Pages</h2>
						<ul>
						<?php
						// Add pages you'd like to exclude in the exclude here
						wp_list_pages(
						  array(
						    'exclude' => '',
						    'title_li' => '',
						  )
						);
						?>
						</ul>
				</section>
				

				<?php get_sidebar(); ?>
			</div>
        </div>

<?php get_footer(); ?>