<?php get_header(); ?>

				<!-- Main Section -->
		        <div class="page-row">
		            <div class="wrap pad">
		                <section id="content">

							<h3 class="heading"><?php single_cat_title( '', true ); ?></h3>

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article>
									
									<?php if(has_post_thumbnail()) : ?><div class="thumb"><?php the_post_thumbnail(); ?></div><?php endif; ?>
									<h4><?php the_title(); ?> <small><?php printf(__( '<time class="updated" datetime="%1$s" pubdate>%2$s</time>', 'bonestheme' ), get_the_time('m-d-y'), get_the_time(__( 'm/d/Y', 'bonestheme' )));?></small></h4>

										<?php the_content(); ?>
										<?php if(get_field('link_to_article'))
										{
										echo '<a target="_blank" href="' . get_field('link_to_article') . '">Link to Article >></a>';
										} ?>
							

							</article>

							<?php endwhile; ?>

									<?php bones_page_navi(); ?>
									
							<?php endif; ?>

						</section>
					
					<?php get_sidebar('recipients'); ?>

				</div>

			</div>

<?php get_footer(); ?>
