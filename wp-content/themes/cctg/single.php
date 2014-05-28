<?php get_header(); ?>
		<!-- Main Section -->
		<div class="page-row">
		    <div class="wrap pad">
		        <section id="content"> 
			
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
							<h3 class="heading"><?php the_title();?></h3>
							<div class="thumb"><?php the_post_thumbnail(); ?></div>
							<?php the_content(); ?>

					<?php endwhile; else : ?>
												
								<h1><?php _e( 'Oops, Page Not Found!', 'bonestheme' ); ?></h1>																												
						
					<?php endif; ?>

				</section>
	
				<?php get_sidebar('grants'); ?>
			</div>
        </div>
		

<?php get_footer(); ?>
