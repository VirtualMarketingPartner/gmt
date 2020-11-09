</div><!-- #body -->

<div id="newsletter_signup" >
	<div class="text-wrapper" >
	</div><!-- .text-wrapper -->
</div><!-- #newsletter_signup -->
	 
	 
<div id="footer" >
	<div class="container-fluid" id="footer_row1" >
		<div class="container" >
			<div class="row" >
				<div class="col text-left" >
					<a class="image-wrapper" href="<?php bloginfo('url'); ?>" style="background-image:url(<?php the_field('logo', 'options'); ?>);" ></a>
					<?php the_field('site_address','options'); ?>
					<p class="all-caps">Contact Us</p>
					<?php get_template_part('partials/socials'); ?>
				</div><!-- .col -->
				<div class="col-sm-12 col-md-9 text-right" >
					<div class="row" >
						<div class="col offset-md-2" >
						<?php wp_nav_menu( array( 'theme_location' => 'main_menu' ) ); ?>
						</div><!-- .col -->
					</div><!-- .row -->
					
					<div class="row" >
						<div class="col offset-md-2" id="impressum" >
							<p ><?php the_field('impressum','options'); ?></p>
						</div><!-- .col -->
					</div><!-- .row -->
					
					<div class="row" >
						<div class="col offset-md-2" >
							<p><?php the_field('copyright','options'); ?><br>
								Website by <a href="https://taylordesens.com/" >Taylor Desens</a></p>
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