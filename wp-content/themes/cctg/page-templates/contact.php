<?php 
/*
 * Template Name: Contact Template
 * Description: Contact Page Template.
 */
 ?>

<?php get_header(); ?>
		<!-- Main Section -->
		<div class="page-row">
		    <div class="wrap pad">
		        <section id="content"> 
			
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<h3 class="heading">Contact us if you have any questions!</h3>	
							
							<?php the_content(); ?>
							<?php gravity_form(1, false, false, false, '', true, 12); ?>
							

					<?php endwhile; else : ?>
							<article id="post-not-found" class="hentry cf">						
								<h1><?php _e( 'Oops, Page Not Found!', 'bonestheme' ); ?></h1>																					
								<p><?php _e( 'This is the error message in the page.php template.', 'bonestheme' ); ?></p>
							</article>
					<?php endif; ?>

				</section>
				

				<aside id="sidebar">
					<h3>Contact</h3>
					<address>
                        <strong>TransAlta Grants</strong> <br>
                         1234 Address Street <br> 
                         Centralia, Wa 99999 
                    </address>
                    <address>
                        <strong>Phone:</strong>(555)555-5555<br>
                        <strong>Fax:</strong>(555)555-5555<br>
                        <strong>Email:</strong>(555)555-5555
                    </address>
				</aside>
			</div>
        </div>
		

<?php get_footer(); ?>