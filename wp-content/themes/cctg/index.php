<?php get_header(); ?>
		<!-- Main Section -->
		<div class="page-row">
		    <div class="wrap pad">
		        <section id="content"> 
			
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
							<?php the_post_thumbnail(); ?>
							<?php the_content(); ?>

					<?php endwhile; else : ?>
							<article id="post-not-found" class="hentry cf">						
								<h1><?php _e( 'Oops, Page Not Found!', 'bonestheme' ); ?></h1>																					
								<p><?php _e( 'This is the error message in the page.php template.', 'bonestheme' ); ?></p>
							</article>
					<?php endif; ?>

				</section>
				

				<?php get_sidebar('recipients'); ?>
			</div>
        </div>
		

<?php get_footer(); ?>
