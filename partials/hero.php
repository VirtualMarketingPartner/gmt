<?php if(have_rows('hero')): while(have_rows('hero')): the_row(); ?>
<div class="container-fluid bg hero" style="background-image:url(<?php the_sub_field('hero_image'); ?>); background-position:<?php the_sub_field('hero_position'); ?>" >
	<div class="container" >
		<div class="row" >
			<div class="col-sm-12 col-md-6" >
				<div class="text-wrapper" >
					<p class="all-caps" ><?php the_sub_field('sub_header'); ?></p>
					<h2><?php the_sub_field('header'); ?></h2>
				</div><!-- .text-wrapper -->
			</div><!-- .col -->
		</div><!-- .row -->
	</div><!-- .container -->
	<div class="overlay" ></div>
</div><!-- .hero -->
<?php endwhile; endif; ?>