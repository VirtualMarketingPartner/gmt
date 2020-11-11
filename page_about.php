<?php 
/* Template Name: About Us */ 
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

	<?php if(have_rows('values')): while(have_rows('values')): the_row(); ?>
	<section class="container-fluid bg values" style="background-image:url(<?php the_sub_field('bg'); ?>);" >
		<div class="container" >
			<div class="row" >
				<div class="offset-md-5 col-md-7" >
					<div class="text-wrapper" >
						<h2><?php the_sub_field('header'); ?></h2>
						<?php if(have_rows('list')): ?>
						<div class="row card-row" >
						<?php while(have_rows('list')): the_row(); ?>
							<div class="col-sm-12 col-md-6" >
								<div class="card left" >
									<div class="card-body vcenter" >
										<div class="image-wrapper icon" style="background-image:url(<?php the_sub_field('icon'); ?>);"></div> 
										<h3><?php the_sub_field('title'); ?></h3>
									</div><!-- .card-body -->
								</div><!-- .card -->
							</div><!-- .col -->
						<?php endwhile; ?>
						</div><!-- .row -->
						<?php endif; ?>
					</div><!-- .text-wrapper -->
				</div><!-- .col -->
			</div><!-- .row -->
		</div><!-- .container -->
	</section><!-- .network -->
	<?php endwhile; endif; ?>
	
	<?php if(have_rows('team')): while(have_rows('team')): the_row(); ?>
	<section class="container-fluid angle team" >
		<div class="container" >
		  <div class="row" >
				<div class="col" >
					<h2><?php the_sub_field('header'); ?></h2>
				</div><!-- .col -->
			</div><!-- .row -->
			<div class="row circle-list" >
				<?php $teamQuery = new WP_Query( array( 'post_type' => 'team', 'orderby' => 'rand', 'posts_per_page'=>8, ) ); while ( $teamQuery->have_posts() ) : $teamQuery->the_post(); ?> 
				<div class="col-sm-6 col-md-3 text-center" >
					<div class="image-wrapper circle" style="background-image:url(<?php the_field('image'); ?>);" ></div>
					<h3><?php the_title(); ?></h3>
				</div><!-- .col -->	 
				<?php endwhile; wp_reset_postdata(); ?>
			</div><!-- .row -->
			<div class="row" >
			  <div class="col text-center" >
					<a href="<?php the_sub_field('link'); ?>" class="button" ><?php the_sub_field('button_label'); ?> <i class="fas fa-long-arrow-right"></i></a>
				</div><!-- .col -->
			</div><!-- .row -->
		</div><!-- .container -->
	</section ><!-- .team -->
	<?php endwhile; endif; ?>
	
	<?php if(have_rows('partners')): while(have_rows('partners')): the_row(); ?>
	<section class="container-fluid bg partners" style="background-image:url(<?php the_sub_field('bg'); ?>);" >
		<div class="container" >
			<div class="row vcenter" >
				<div class="col-sm-12 col-md-6" >
					<h2><?php the_sub_field('title'); ?></h2>
					<?php the_sub_field('content'); ?>
					<a href="<?php the_sub_field('link'); ?>" class="button" ><?php the_sub_field('label'); ?> <i class="fas fa-long-arrow-right"></i></a>
				</div><!-- .col -->
			</div><!-- .row -->
		</div><!-- .container -->
	</section><!-- .partners -->
	<?php endwhile; endif; ?>
	
	<?php if(have_rows('careers')): while(have_rows('careers')): the_row(); ?>
	<section class="container-fluid angle careers" >
		<div class="container" >
			<div class="row vcenter" >
				<div class="col-sm-12 col-md-5" >
					<div class="image-wrapper circle" style="background-image:url(<?php the_sub_field('image'); ?>);" ></div>
				</div><!-- .col -->
				
				<div class="col-sm-12 md-offset-1 col-md-6" >
					<h2><?php the_sub_field('title'); ?></h2>
					<?php the_sub_field('content'); ?>
					<a href="<?php the_sub_field('link'); ?>" class="button" ><?php the_sub_field('label'); ?> <i class="fas fa-long-arrow-right"></i></a>
				</div><!-- .col -->
			</div><!-- .row -->
		</div><!-- .container -->
	</section ><!-- .intro -->
	<?php endwhile; endif; ?>
	

</div><!-- #services -->
<?php endwhile; endif; ?>
<?php get_footer(); 
