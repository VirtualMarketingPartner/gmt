<?php 
/* Template Name: Services */ 
?>


<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="content" id="services">
	
	<?php get_template_part('/partials/hero'); ?>
	
	<?php get_template_part('/partials/intro'); ?>
	
	<section class="container-fluid angle grey services" >
		<div class="container" >
			<div class="row" >
				<?php $services_query = new WP_Query( array( 'post_type' => 'services' ) );  if($services_query->have_posts()): $serviceNavCount=0; $serviceTabCount=0; ?>
				<div class="col-sm-12 col-md-3" >
					<ul class="nav flex-column nav-tabs" id="myTab" role="tablist">
						<?php while($services_query->have_posts()): $services_query->the_post(); ?>
						<li class="nav-item">
							<a class="nav-link <?php if( $serviceNavCount==0 ){ echo 'active'; } ?>" id="nav-<?php echo $serviceNavCount; ?>" data-toggle="tab" href="#tab-<?php echo $serviceNavCount; ?>" role="tab" aria-controls="nav-<?php echo $serviceNavCount; ?>" aria-selected="true"><?php the_title(); ?></a>
						</li>
						<?php $serviceNavCount++; endwhile; wp_reset_postdata(); ?>
					</ul><!-- .nav -->
				</div><!-- .col -->
				
				<div class="col-sm-12 col-md-9" >
					<div class="tab-content" id="service-content">
						<?php while($services_query->have_posts()): $services_query->the_post(); ?>
						<div class="tab-pane fade <?php if( $serviceTabCount==0 ){ echo 'show active'; } ?>" id="tab-<?php echo $serviceTabCount; ?>" role="tabpanel" aria-labelledby="nav-<?php echo $serviceTabCount; ?>">
							<h2><?php the_title(); ?></h2>
							<?php the_content(); ?>
						</div><!-- .tab-pane -->
						<?php $serviceTabCount++; endwhile; wp_reset_postdata(); ?>
					</div><!-- .#service-content -->
				</div><!-- .col -->
			</div><!-- .row -->
			<?php endif; ?>
		</div><!-- .container -->
	</section><!-- .services -->
	
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
