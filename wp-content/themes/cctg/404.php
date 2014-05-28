<?php get_header(); ?>
		<!-- Main Section -->
		<div class="page-row">
		    <div class="wrap pad">
		        <section id="content"> 
			
					<article id="post-not-found" class="hentry cf">

							<h1><?php _e( 'Error 404 - Article Not Found', 'bonestheme' ); ?></h1>

							<p><?php _e( 'The article you were looking for was not found, but maybe try looking in our <a href="'.home_url().'/sitemap">sitemap!</a>', 'bonestheme' ); ?></p>

							

						</article>

				</section>
				

				<?php get_sidebar(); ?>
			</div>
        </div>

<?php get_footer(); ?>
