<?php 
	/*
	 * Template Name: Grants Template
	 * Description: Template to be used for grants section of site.
	 */
 ?>

<?php get_header(); ?>
		<!-- Main Section -->
		<div class="page-row">
		    <div class="wrap pad">
		        <section id="content"> 
			
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
							<h3 class="heading"><?php the_title();?> <span>| Overview</span></h3>
							<?php the_content(); ?>
								
								
							<?php $image = wp_get_attachment_image_src(get_field('board_members'), 'cctg-thumb-650'); ?> 														
							<?php if(get_field('board_members')) : ?>
								<h3 class="heading">Board Members</h3>
								<img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('board_members')) ?>" />
								<p><?php the_field('members_names'); ?></p>
							<?php endif; ?>


					<?php endwhile; endif; ?>
							
				</section>
				

				<?php get_sidebar( 'grants' ); ?>
			</div>
        </div>
		

<?php get_footer(); ?>
