<?php 
/* Template Name: Contact Us */ 
?>


<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="content" id="contact">
	
	<?php get_template_part('/partials/hero'); ?>
	
	<?php if(have_rows('intro')): while(have_rows('intro')): the_row(); ?>
	<section class="container-fluid angle intro" >
		<div class="container" >
			<div class="row" >
				<div class="col-sm-12 col-md-5" >
					<h2><?php the_sub_field('title'); ?></h2>
					<?php the_sub_field('content'); ?>
				</div><!-- .col -->
				<div class="col-sm-12 offset-md-1 col-md-6" >
					<div class="pattern left" >
						<div class="card blocker" >
							<?php the_sub_field('form'); ?>
						</div><!-- .card -->
						<div class="pattern-block" ></div>
					</div><!-- .pattern -->
				</div><!-- .col -->
			</div><!-- .row -->
		</div><!-- .container -->
	</section ><!-- .intro -->
	<?php endwhile; endif; ?>
	
	<?php if(have_rows('offices')): while(have_rows('offices')): the_row(); ?>
	<section class="container-fluid bg contact-map" >
		<?php $location = get_sub_field('map');
			$street = get_sub_field('street_address');
			$cityState = get_sub_field('city_state');
			$address = $street.' '. $cityState;
		?>
		<?php get_template_part('partials/map_helper'); ?>
		<div class="acf-map" data-zoom="17">
			<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>">
				<h3><?php the_field('site_name', 'options'); ?></h3>
				<br>
				<p><i class="far fa-phone"></i> <?php the_field('site_phone', 'options'); ?></p>
				<p><i class="far fa-map-marker-alt"></i> 
					<?php the_field('site_address', 'options'); ?></p>
			</div>
		</div><!-- .acf-map -->
	</section>
	
	<section class="container-fluid angle offices" >
		<div class="container" >
			<div class="row" >
				<div class="col" >
					<h2><?php the_sub_field('header'); ?></h2>
					<?php if(have_rows('gmt_offices')): ?>
					<div class="card" >
						<div class="row" >
						<?php while(have_rows('gmt_offices')): the_row(); ?>
							<div class="col" >
								<h3><?php the_sub_field('name'); ?></h3>
								<p><i class="far fa-phone"></i> <?php the_sub_field('phone'); ?><br>
								<i class="far fa-envelope"></i> <?php the_sub_field('email'); ?><br>
								<i class="far fa-map-marker-alt"></i> <?php the_sub_field('address'); ?><br>
								<?php the_sub_field('city_state_zip'); ?></p>
							</div><!-- .col -->
						<?php endwhile; ?>
						</div><!-- .row -->
					</div><!-- .card -->
					<?php endif; ?>
				</div><!-- .col -->
			</div><!-- .row -->
		</div><!-- .container -->
	</section><!-- .offices -->
	<?php endwhile; endif; ?>

</div><!-- #contact -->
<?php endwhile; endif; ?>
<?php get_footer(); 
