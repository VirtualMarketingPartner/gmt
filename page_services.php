<?php 
/* Template Name: Services */ 
?>


<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="content" id="services">
	
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
	</div><!-- .hero -->
	<?php endwhile; endif; ?>
	
	<?php if(have_rows('intro')): while(have_rows('intro')): the_row(); ?>
	<section class="container-fluid angle intro" >
		<div class="container" >
			<div class="row vcenter" >
				<div class="col-sm-12 col-md-6" >
					<h2><?php the_sub_field('title'); ?></h2>
					<?php the_sub_field('content'); ?>
				</div><!-- .col -->
				
				<div class="col-sm-12 offset-md-1 col-md-5" >
					<div class="image-wrapper circle" style="background-image:url(<?php the_sub_field('image'); ?>);" ></div>
				</div><!-- .col -->
			</div><!-- .row -->
		</div><!-- .container -->
	</section ><!-- .intro -->
	<?php endwhile; endif; ?>
	
	<?php if(have_rows('services')): while(have_rows('services')): the_row(); ?>
	<section class="container-fluid services" >
		<div class="container" >
			<div class="row" >
				<div class="col-sm-12 offset-md-1 col-md-10" >
					<p>Tab List Here</p>
				</div><!-- .col -->
			</div><!-- .row -->
		</div><!-- .container -->
	</section><!-- .services -->
	<?php endwhile; endif; ?>
	
	<?php if(have_rows('approach')): while(have_rows('approach')): the_row(); ?>
	<section class="container-fluid angle approach" >
		<div class="container" >
			<div class="row" >
				<div class="col-sm-12 text-center" >
					<h2><?php the_sub_field('header'); ?></h2>
					<?php if(have_rows('list')): ?>
					<div class="row card-list" >
						<?php while(have_rows('list')): the_row(); ?>
						<div class="col-sm-12 col-md-4" >
							<div class="card bottom" >
								<div class="card-body text-left" >
									<div class="image-wrapper icon" style="background-image:url(<?php the_sub_field('icon'); ?>);"></div> 
									<h3><?php the_sub_field('title'); ?></h3>
									<?php the_sub_field('content'); ?>
								</div><!-- .card-body -->
							</div><!-- .card -->
						</div><!-- .col -->
						<?php endwhile; ?>
					</div><!-- .row -->
					<?php endif; ?>
				</div><!-- .col -->
			</div><!-- .row -->
		</div><!-- .container -->
	</section><!-- .approach -->
	<?php endwhile; endif; ?>
	
	<?php if(have_rows('fees')): while(have_rows('fees')): the_row(); ?>
	<section class="container-fluid grey fees" >
		<div class="container" >
			<div class="row vcenter" >
				<div class="col-sm-12 col-md-6" >
					<h2><?php the_sub_field('header'); ?></h2>
					<?php the_sub_field('content'); ?>
				</div><!-- .col -->
				
				<div class="col-sm-12 offset-md-1 col-md-5" >
					<div class="image-wrapper circle" style="background-image:url(<?php the_sub_field('image'); ?>);"></div>
				</div><!-- .col -->
			</div><!-- .row -->
			
			<div class="row" >
				<div class="col-sm-12 offset-md-1 col-md-10" >
					[FEES TABLE WILL GO HERE]
				</div><!-- .col -->
			</div><!-- .row -->
		</div><!-- .container -->
	</section><!-- .fees -->
	<?php endwhile; endif; ?>
	

</div><!-- #services -->
<?php endwhile; endif; ?>
<?php get_footer(); 
