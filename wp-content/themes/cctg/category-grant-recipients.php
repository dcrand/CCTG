<?php get_header(); ?>

				<!-- Main Section -->
		        <div class="page-row">
		            <div class="wrap pad">
		                <section id="content">

							<h3 class="heading"><?php single_cat_title( '', true ); ?></h3>

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article>
									<h4><?php the_title(); ?>, 

										<?php if(get_field('website'))
										{
											echo '<a class="website" target="_blank" href="' . get_field('website') . '">Website</a>';
										} ?>
									</h4>

									<?php if(has_post_thumbnail()) : ?><div class="thumb"><?php the_post_thumbnail(); ?></div><?php endif; ?>
									<?php 
										if(get_field('grant_value'))
										{
											echo '<span>Grant Value ' . get_field('grant_value') . '</span>';
										}
									 ?>

									<?php the_content(); ?>
							</article>

							<?php endwhile; ?>

									<?php bones_page_navi(); ?>
									
							<?php endif; ?>

						</section>
					
					<?php get_sidebar('news'); ?>

				</div>

			</div>

<?php get_footer(); ?>
