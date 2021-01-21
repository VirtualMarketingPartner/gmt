<?php 
/* Template Name: Partner Network */ 
?>


<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="content" id="network">
	
	<?php get_template_part('/partials/hero'); ?>
	
	<?php get_template_part('/partials/intro'); ?>
	
	<?php if(have_rows('network')): ?>
	<section class="container-fluid bg partner-map" >	
		<div class="acf-map" data-zoom="2">
		<?php while ( have_rows('network') ) : the_row(); 
			$location = get_sub_field('map');
			$title = get_sub_field('name');
			?>
			<div class="marker" data-lat="<?php echo esc_attr($location['lat']); ?>" data-lng="<?php echo esc_attr($location['lng']); ?>">
				<h3><?php echo esc_html( $title ); ?></h3>
			</div>
		<?php endwhile; ?>
		</div>
		<?php get_template_part('partials/map_helper'); ?>
	</section><!-- .network-map -->
	<?php endif; ?>
	
	<?php if(have_rows('approach')): while(have_rows('approach')): the_row(); ?>
	<section class="container-fluid angle approach" >
		<div class="container" >
			<div class="row" >
				<div class="col offset-md-2 col-md-8 text-center animate" >
					<h2><?php the_sub_field('header'); ?></h2>
				</div><!-- .col -->
			</div><!-- .row -->
			<?php if(have_rows('list')): ?>
			<div class="row card-row animate slow" >
			<?php while(have_rows('list')): the_row(); ?>
				<div class="col-12 col-md-4" >
					<div class="card narrow left" >
						<div class="card-body vcenter" >
							<div class="image-wrapper icon" style="background-image:url(<?php the_sub_field('icon'); ?>);"></div> 
							<h4><?php the_sub_field('title'); ?></h4>
						</div><!-- .card-body -->
					</div><!-- .card -->
				</div><!-- .col -->
			<?php endwhile; ?>
			</div><!-- .row -->
			<?php endif; ?>
		</div><!-- .container -->
	</section><!-- .approach -->
	<?php endwhile; endif; ?>
	
	<?php if(have_rows('contact')): while(have_rows('contact')): the_row(); ?>
		<section class="container-fluid angle grey contact" >
		<div class="container" >
			<div class="row vcenter" >
				<div class="col-12 col-md-5" >
					<div class="pattern left animate" >
						<div class="image-wrapper circle blocker" style="background-image:url(<?php the_sub_field('image'); ?>);" ></div>
						<div class="pattern-block" ></div>
					</div><!-- .pattern -->
				</div><!-- .col -->
				
				<div class="col-12 md-offset-1 col-md-6" >
					<div class="text-wrapper animate slow" >
						<h2><?php the_sub_field('title'); ?></h2>
						<?php the_sub_field('content'); ?>
						<a href="<?php the_sub_field('link'); ?>" class="button" ><?php the_sub_field('label'); ?> <i class="fas fa-long-arrow-right"></i></a>
					</div><!-- .text-wrapper -->
				</div><!-- .col -->
			</div><!-- .row -->
		</div><!-- .container -->
	</section ><!-- .contact -->
	<?php endwhile; endif; ?>
	

</div><!-- #network -->
<?php endwhile; endif; ?>
<?php get_footer(); 
