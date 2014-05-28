<?php get_header(); ?>

				<!-- Main Section -->
		        <div class="page-row">
		            <div class="wrap pad">
		                <section id="content">

							<h3 class="heading"><?php single_cat_title( '', true ); ?></h3>

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article>
									<h4><?php the_title(); ?> <small><?php printf(__( '<time class="updated" datetime="%1$s" pubdate>%2$s</time>', 'bonestheme' ), get_the_time('m-d-y'), get_the_time(__( 'm/d/Y', 'bonestheme' )));?></small></h4>

									<div class="thumb"><?php the_post_thumbnail(); ?></div>

									<?php the_content(); ?>
							</article>

							<?php endwhile; ?>

									<?php bones_page_navi(); ?>
									
							<?php endif; ?>

						</section>
					
					<?php 
						if(is_category( 'grant-recipients' )){
							get_sidebar('news');
						}else{
							get_sidebar('recipients');
						} 
					?>

				</div>

			</div>

<?php get_footer(); ?>
