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
							<div class="col-12 col-md-8" >
								<div class="hero-text animate" >
									<div class="content" >
										<?php the_sub_field('content'); ?>
									</div><!-- .content -->
								</div><!-- .hero-text -->
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
				<div class="col-12 animate" >
					<?php the_sub_field('content'); ?>
				</div><!-- .col -->
			</div><!-- .row -->
		</div><!-- .container -->
	</section><!-- .services -->
	<?php endwhile; endif; ?>
	

	<?php if(have_rows('network')): while(have_rows('network')): the_row(); ?>
	<section class="container-fluid bg network" style="background-image:url(<?php the_sub_field('bg'); ?>);" >
		<div class="overlay" style="background-color:rgba(0,0,0, .<?php the_sub_field('bg_overlay'); ?>);" ></div>
		<div class="container" >
			<div class="row" >
				<div class="offset-md-2 col-md-8 text-center" >
					<div class="text-wrapper animate" >
						<?php the_sub_field('content'); ?>
					</div><!-- .text-wrapper -->
				</div><!-- .col -->
			</div><!-- .row -->
		</div><!-- .container -->
	</section><!-- .network -->
	<?php endwhile; endif; ?>
	
	<?php if(have_rows('approach')): while(have_rows('approach')): the_row(); ?>
		<section class="container-fluid angle approach" >
			<div class="container" >
				<div class="row" >
					<div class="col-12 text-center" >
						<h2><?php the_sub_field('header'); ?></h2>
						<?php if(have_rows('list')): ?>
						<div class="row card-row" >
							<?php while(have_rows('list')): the_row(); ?>
							<div class="col-12 col-md-4" >
								<div class="card bottom animate" >
									<div class="card-body text-left" >
										<div class="image-wrapper icon" style="background-image:url(<?php the_sub_field('icon'); ?>);"></div> 
										<h4><?php the_sub_field('title'); ?></h4>
										<?php the_sub_field('content'); ?>
									</div><!-- .card-body -->
								</div><!-- .card -->
							</div><!-- .col -->
							<?php endwhile; ?>
						</div><!-- .row -->
						<?php endif; ?>
					</div><!-- .col -->
				</div><!-- .row -->
				<br><br>
			</div><!-- .container -->
		</section><!-- .approach -->
		<?php endwhile; endif; ?>
	
	<?php if(have_rows('clients')): while(have_rows('clients')): the_row(); ?>
	<section class="container-fluid angle grey" >
		<div class="container" >
			<?php if(get_sub_field('content')): ?>
			<div class="row" >
				<div class="col-12 text-center" >
					<?php the_sub_field('content'); ?>
				</div><!-- .col -->
			</div><!-- .row -->
			<?php endif; ?>
			
			<?php if(have_rows('client_list')): ?>
			<div class="row" >
				<div class="col-12" id="client_list" style="overflow:hidden;" >
					<div class="row text-center scroll-left" style="flex-wrap: nowrap;" >
						<?php while(have_rows('client_list')): the_row(); ?>
						<div class="col-4 col-md-2 logo" >
							<div class="image-wrapper brand" style="background-image:url(<?php the_sub_field('logo'); ?>);" title="<?php the_sub_field('name'); ?>"></div> 
						</div><!-- .col -->
						<?php endwhile; ?>
					</div><!-- .row -->
				</div><!-- .col-12 -->
			</div><!-- .row -->
			<?php endif; ?>
			<?php if(have_rows('client_list')): ?>
			<div class="row" >
				<div class="col-12" id="client_list" style="overflow:hidden;" >
					<div class="row text-center scroll-right" style="flex-wrap: nowrap;" >
						<?php while(have_rows('client_list')): the_row(); ?>
						<div class="col-4 col-md-2 logo" >
							<div class="image-wrapper brand" style="background-image:url(<?php the_sub_field('logo'); ?>);" title="<?php the_sub_field('name'); ?>"></div> 
						</div><!-- .col -->
						<?php endwhile; ?>
					</div><!-- .row -->
				</div><!-- .col-12 -->
			</div><!-- .row -->
			<?php endif; ?>
		</div><!-- .container -->
	</section><!-- .container-fluid -->
	<?php endwhile; endif; ?>
	

	
	<?php if(have_rows('news')): while(have_rows('news')): the_row(); ?>
	<section class="container-fluid white news" >
		<div class="container" >
			<div class="row" >
				<div class="col-12" >
					<h2><?php the_sub_field('header'); ?></h2>
					<br>
					<div class="row card-row-2" >
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

<style type="text/css" >
	
	.brand{
		margin:40px auto;
		height:60px; width:100%; 
		background-size:contain;
		background-position: center center;
		-webkit-filter: grayscale(100%) brightness(60%) contrast(10000000%); opacity: .3;}
</style>

<?php get_footer(); 