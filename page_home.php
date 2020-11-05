<?php 
/* Template Name: Home */ 
?>


<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="content" id="home">
	
	<?php if( have_rows('slideshow')): $slideCount = 0; $indicatorCount = 0; ?>
	<section class="container-fluid bg hero" >
		<div id="slideshow" class="carousel slide" data-ride="carousel" >
			<ol class="carousel-indicators" >
				<?php while( have_rows('slideshow')): the_row(); ?>
				<li data-target="#slideshow" data-slide-to="<?php echo $indicatorCount; ?>" class="<?php if($indicatorCount==0){echo 'active'; } ?>" ></li>
				<?php $indicatorCount++; endwhile; ?>
			</ol>
			<div class="carousel-inner" >
			<?php while( have_rows('slideshow')): the_row(); ?>
				<div class="carousel-item <?php if( $slideCount==0 ){echo 'active'; } ?>" style="background-image:url(<?php the_sub_field('image'); ?>);" >
					<div class="container" >
						<div class="row" >
							<div class="col-sm-12 col-md-8" >
								<div class="text-wrapper" >
									<?php if($slideCount==0): ?>
										<h6>Issue of the Day</h6>
									<?php else: ?>
										<h6><?php echo get_the_date('d M Y'); ?></h6>
									<?php endif; ?>
									<h2><?php the_sub_field('title'); ?></h2>
									<a href="<?php the_sub_field('link'); ?>" class="button" >
										<?php the_sub_field('button_text'); ?>
									</a>
								</div><!-- .text-wrapper -->
							</div><!-- .col -->
						</div><!-- .row -->
					</div><!-- .container -->
				</div><!-- .carousel-item -->
			<?php $slideCount++; endwhile; ?>		
			</div><!-- .carousel-inner -->
		</div><!-- #slideshow -->
	</section><!-- .hero -->
	<?php endif; ?>
	
	<?php if(have_rows('services')): while(have_rows('services')): the_row(); ?>
	<section class="container-fluid angle services" >
		<div class="container" >
			<div class="row" >
				<div class="col-sm-12 col-md-8 service" >
					<div class="row" >
						<?php $servicesQuery = new WP_Query( array( 'post_type' => 'services' ) ); while ( $servicesQuery->have_posts() ) : $servicesQuery->the_post(); ?> 
						<div class="col-sm-6 col-md-4" >
							<div class="image-wrapper icon" style="background-image:url(<?php the_field('icon'); ?>);" ></div>
							<h3><?php the_title(); ?></h3>
						</div><!-- .col -->	 
						<?php endwhile; wp_reset_postdata(); ?>
					</div><!-- .row -->
				</div><!-- .col -->
				<div class="col-sm-12 col-md-4" >
					<div class="card" >
						<h2><?php the_sub_field('header'); ?></h2>
						<?php if(have_rows('services_link')): while(have_rows('services_link')): the_row(); ?>
						<a href="<?php the_sub_field('link'); ?>" ><?php the_sub_field('label'); ?> <i class="fas fa-long-arrow-right"></i></a>
						<?php endwhile; endif; ?>
					</div><!-- .card -->
				</div><!-- .col -->
			</div><!-- .row -->
		</div><!-- .container -->
	</section><!-- .services -->
	<?php endwhile; endif; ?>
	

	<?php if(have_rows('network')): while(have_rows('network')): the_row(); ?>
	<section class="container-fluid bg network" style="background-image:url(<?php the_sub_field('bg'); ?>);" >
		<div class="container" >
			<div class="row" >
				<div class="offset-md-2 col-md-8 text-center" >
					<div class="text-wrapper" >
						<h2><?php the_sub_field('header'); ?></h2>
						<p><?php the_sub_field('content'); ?></p>
						<?php if(have_rows('button')): ?>
							<?php while(have_rows('button')): the_row(); ?>
							<a href="<?php the_sub_field('link'); ?>" class="button" ><?php the_sub_field('label'); ?></a>
							<?php endwhile; ?>
						<?php endif; ?>
					</div><!-- .text-wrapper -->
				</div><!-- .col -->
			</div><!-- .row -->
		</div><!-- .container -->
	</section><!-- .network -->
	<?php endwhile; endif; ?>
	
	<?php if(have_rows('testimonials')): while(have_rows('testimonials')): the_row(); ?>
	<section class="container-fluid angle testimonials" >
		<div class="container" >
			<div class="row" >
				<div class="col-sm-12 col-md-5" >
					<div class="image-wrapper circle" style="background-image:url(<?php the_sub_field('image'); ?>);"></div>
				</div><!-- .col -->
				
				<div class="col-sm-12 col-md-7" >
					<h2><?php the_sub_field('header'); ?></h2>
					<?php if(have_rows('quotes')): $quote=0; ?>
					<div id="quoteCarousel" class="carousel slide" data-ride="carousel" >
						<div class="carousel-inner" >
						<?php while(have_rows('quotes')): the_row(); ?>
							<div class="carousel-item <?php if($quote==0){echo 'active';} ?>" >
								<p><?php the_sub_field('quote'); ?></p>
								<p class="author" ><?php the_sub_field('author'); ?></p>
								<p class="company" ><?php the_sub_field('company'); ?></p>
							</div><!-- .carousel-item -->
						<?php $quote++; endwhile; ?>
						</div><!-- .carousel-inner -->
					</div><!-- #quoteCarousel -->
					<?php endif; ?>
					
				</div><!-- .col -->
			</div><!-- .row -->
		</div><!-- .container -->
	</section><!-- .testimonials -->
	<?php endwhile; endif; ?>
	
	<?php if(have_rows('news')): while(have_rows('news')): the_row(); ?>
	<section class="container-fluid bg news" >
		<div class="container" >
			<div class="row" >
				<div class="col" >
					<h2><?php the_sub_field('header'); ?></h2>
					<br>
					<div class="row" >
					<?php $query = new WP_Query( array( 'post_type' => 'post' ) ); while ( $query->have_posts() ) : $query->the_post(); ?> 
						<div class="col-sm-12 col-md-4 recent-news" >
							<div class="row" >
								<div class="col-xs-12 col-md-4" >
									<div class="date square" >
										<p>
											<span class="day" ><?php echo get_the_date('d'); ?></span><span class="month" ><?php echo get_the_date('M'); ?></span>
										</p>
									</div>
								</div><!-- .col -->
								
								<div class="col-sm-12 col-md-8" >
									<h4><?php the_title(); ?></h4>
									<a href="<?php the_permalink(); ?>" ><?php the_field('read_more','options'); ?> <i class="fas fa-long-arrow-right"></i></a>
								</div><!-- .col -->
							</div><!-- .row -->						
						</div><!-- .col -->	 
						<?php endwhile; wp_reset_postdata(); ?>
					</div><!-- .row -->
				</div><!-- .col -->
			</div><!-- .row -->
		</div><!-- .container -->
	</section><!-- .news -->
	<?php endwhile; endif; ?>

</div><!-- #home -->
<?php endwhile; endif; ?>
<?php get_footer(); 