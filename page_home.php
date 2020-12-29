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
							<div class="col-12 col-md-7" >
								<div class="text-wrapper animate" >
									<h6><?php the_sub_Field('subtitle'); ?></h6>
									<h2><?php the_sub_field('title'); ?></h2>
									<a href="<?php the_sub_field('link'); ?>" class="button" >
										<?php the_sub_field('button_text'); ?> <i class="fas fa-long-arrow-right"></i>
									</a>
								</div><!-- .text-wrapper -->
							</div><!-- .col -->
						</div><!-- .row -->
					</div><!-- .container -->
				</div><!-- .carousel-item -->
			<?php $slideCount++; endwhile; ?>		
			</div><!-- .carousel-inner -->
			<div class="overlay" ></div>
		</div><!-- #slideshow -->
	</section><!-- .hero -->
	<?php endif; ?>
	
	<?php if(have_rows('services')): while(have_rows('services')): the_row(); ?>
	<section class="container-fluid angle services" >
		<div class="container" >
			<div class="row vcenter" >
				<div class="col-12 col-md-4 animate" >
					<div class="pattern left large" >
						<div class="card blocker" >
							<div clas="card-body" >
								<h2><?php the_sub_field('header'); ?></h2>
								<?php if(have_rows('services_link')): while(have_rows('services_link')): the_row(); ?>
								<a href="<?php the_sub_field('link'); ?>" class="button inverted" ><?php the_sub_field('label'); ?> <i class="fas fa-long-arrow-right"></i></a>
								<?php endwhile; endif; ?>
							</div><!-- .card-body -->
						</div><!-- .card -->
						<div class="pattern-block" ></div>
					</div><!-- .pattern right -->
				</div><!-- .col -->
				
				<div class="col-12 col-md-8 service" >
					<div class="row" >
						<?php $services_query = new WP_Query( array( 'post_type' => 'services', 'order' => 'ASC' ) ); ?>

						<?php if ( $services_query->have_posts() ) : ?>
							<?php while ( $services_query->have_posts() ) : $services_query->the_post(); ?>
							<div class="col-6 col-md-4" >
								<div class="row" >
									<div class="col-12 offset-md-2 col-md-8 animate" >
										<a href="<?php the_permalink(); ?>" >
											<div class="image-wrapper circle icon" style="background-image:url(<?php the_field('icon'); ?>);" ></div>
										</a>
										<h3><?php the_title(); ?></h3>
									</div><!-- .col -->
								</div><!-- .row -->
							</div><!-- .col -->	 
							<?php endwhile; wp_reset_postdata(); ?>
						<?php endif; ?>
					</div><!-- .row -->
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
					<div class="text-wrapper animate" >
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
			<div class="row vcenter" >
				<div class="col-12 col-md-5 " >
					<div class="pattern bottom left animate" >
						<div class="image-wrapper circle blocker" style="background-image:url(<?php the_sub_field('image'); ?>);"></div>
						<div class="pattern-block" ></div>
					</div><!-- .pattern -->
				</div><!-- .col -->
				
				<div class="col-12 col-md-7 animate" >
					<h2><?php the_sub_field('header'); ?></h2>
					<?php if(have_rows('quotes')): $quote=0; $quoteIndicator=0; ?>
					<div id="quoteCarousel" class="carousel slide carousel-fade" data-ride="carousel" >
						<ol class="carousel-indicators" >
							<?php while( have_rows('quotes')): the_row(); ?>
							<li data-target="#quoteCarousel" data-slide-to="<?php echo $quoteIndicator; ?>" class="<?php if($quoteIndicator==0){echo 'active'; } ?>" ></li>
							<?php $quoteIndicator++; endwhile; ?>
						</ol>
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
				<div class="col-12" >
					<h2><?php the_sub_field('header'); ?></h2>
					<br>
					<div class="row card-row" >
					<?php $query = new WP_Query( array( 'post_type' => 'insights', 'posts_per_page'=>3 ) ); while ( $query->have_posts() ) : $query->the_post(); ?> 
						<div class="col-12 col-md-4 recent-news animate" >
							<div class="card" >
								<?php if(have_rows('hero')): while(have_rows('hero')): the_row(); if(get_sub_field('hero_image')): ?>
								<div class="image-wrapper" style="background-image:url(<?php the_sub_field('hero_image'); ?>); background-position:<?php the_sub_field('position'); ?>" >
									<div class="date" >
										<p>
											<span class="day" ><?php echo get_the_date('d'); ?></span><span class="month" ><?php echo get_the_date('M'); ?></span>
										</p>
									</div>
								</div><!-- .image-wrapper -->
								<?php endif; endwhile; endif; ?>
								
								<div class="card-body" >
									<h4><?php the_title(); ?></h4>
									<a href="<?php the_permalink(); ?>" class="button inverted" ><?php the_field('read_more','options'); ?> <i class="fas fa-long-arrow-right"></i></a>
								</div><!-- .card-body -->
							</div><!-- .card -->						
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
