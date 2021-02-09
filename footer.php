</div><!-- #body -->


<?php if(have_rows('newsletter_signup','options')): while(have_rows('newsletter_signup','options')): the_row(); ?>
<section class="container-fluid bg" style="background-image:url(<?php the_sub_field('bg'); ?>); background-color:<?php the_sub_field('bg_color'); ?>" id="newsletter_signup" >
	<div id="page_down" ></div>
	<div class="container" >
		<div class="row" >
			<div class="col-sm-12 offset-md-1 col-md-10 text-align-center" >
				<div class="row animate" >
					<div class="col-sm-3" >
						<div class="image-wrapper" style="background-image:url(<?php the_sub_field('icon'); ?>);" ></div>
					</div><!-- col -->
					<div class="col-sm-8" >
						<div class="text-wrapper" >
							<?php the_sub_field('content'); ?>
						</div><!-- .text-wrapper -->
						<div class="form-wrapper" >
							<?php get_template_part('/partials/email_signup'); ?>
						</div><!-- .form-wrapper -->
					</div><!-- .col -->
				</div><!-- .row -->
			</div><!-- .col -->
		</div><!-- .row -->
	</div><!-- .container -->
</section><!-- #newsletter_signup -->
<?php endwhile; endif; ?>
	 
	 
<div id="footer" >
	<div class="container-fluid" id="footer_row1" >
		<div class="container" >
			<div class="row" >
				<div class="col text-left" >
					<a class="image-wrapper" href="<?php bloginfo('url'); ?>" style="background-image:url(<?php the_field('footer_logo', 'options'); ?>);" ></a>
					<p><?php the_field('site_address','options'); ?></p>
					<p class="all-caps">Contact Us</p>
					<?php get_template_part('partials/socials'); ?>
				</div><!-- .col -->
				<div class="col-sm-12 col-md-9 text-right" >
					<div class="row" >
						<div class="col offset-md-2" >
						<?php wp_nav_menu( array( 'theme_location' => 'main_menu' ) ); ?>
						</div><!-- .col -->
					</div><!-- .row -->
					
					<?php if(get_field('impressum','options')): ?>
					<div class="row" >
						<div class="col offset-md-2" id="impressum" >
							<p ><?php the_field('impressum','options'); ?></p>
						</div><!-- .col -->
					</div><!-- .row -->
					<?php endif; ?>
					
					<div class="row" >
						<div class="col offset-md-2" >
							<p><?php the_field('copyright','options'); ?><br>
								Website by <a href="https://taylordesens.com/" target="_blank" >Taylor Desens</a></p>
						</div><!-- .col -->
					</div><!-- .row -->
				</div><!-- .col -->
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- #footer_row2 -->
</div><!-- #footer -->

	<?php wp_footer(); ?>
</body>
</html>