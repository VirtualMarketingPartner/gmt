<?php 
/* Template Name: Services */ 
?>


<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="content" id="services">
		
		<?php get_template_part('/partials/hero'); ?>
		
		<?php if(have_rows('intro')): while(have_rows('intro')): the_row(); ?>
		<section class="container-fluid angle intro" >
			<div class="container" >
				<div class="row vcenter" >
					<div class="col-12 col-md-6" >
						<div class="text-wrapper animate" >
							<h2><?php the_sub_field('title'); ?></h2>
							<?php the_sub_field('content'); ?>
						</div><!-- .text-wrapper -->
					</div><!-- .col -->
					
					<div class="col-12 col-md-6" >
						<div class="animate" >
							<video autoplay="true" muted="true" loop="true" style="width:100%; height:auto;">
								<source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/videos/GMT_Video.mp4" type="video/mp4">
								<source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/videos/GMT_Video.webm" type="video/webm">
							</video>
						</div><!-- .animate -->
					</div><!-- .col -->
				</div><!-- .row -->
			</div><!-- .container -->
		</section ><!-- .intro -->
		<?php endwhile; endif; ?>

		<?php if(have_rows('services')): while(have_rows('services')): the_row(); ?>
		<section class="container-fluid angle grey services" >
			<div class="container" >
				
				<div id="service_tabs" >
					<div class="row" >
						<div class="col-12 col-md-4" >
							<ul class="nav flex-column nav-tabs" role="tablist">
								<div class="indicator" ></div>
								<?php while(have_rows('service_tabs')): the_row(); ?>
								<li class="nav-item">
									<a class="nav-link <?php if( $serviceNavCount==0 ){ echo 'active'; } ?>" id="nav-<?php echo $serviceNavCount; ?>" data-toggle="tab" href="#tab-<?php echo $serviceNavCount; ?>" role="tab" aria-controls="nav-<?php echo $serviceNavCount; ?>" aria-selected="true"><?php the_sub_field('title'); ?></a>
								</li>
								<?php $serviceNavCount++; endwhile; ?>
							</ul><!-- .nav -->
						</div><!-- .col -->

						<div class="col-12 col-md-8" >
							<div class="tab-content" id="group-content">
								<?php while(have_rows('service_tabs')): the_row(); ?>
								<div class="tab-pane fade <?php if( $serviceTabCount==0 ){ echo 'show active'; } ?>" id="tab-<?php echo $serviceTabCount; ?>" role="tabpanel" aria-labelledby="nav-<?php echo $serviceTabCount; ?>">
									<?php the_sub_field('content'); ?>
								</div><!-- .tab-pane -->
								<?php $serviceTabCount++; endwhile; wp_reset_postdata(); ?>
							</div><!-- .#group-content -->
						</div><!-- .col -->
					</div><!-- .row -->
				</div><!-- #service_tabs -->
				
				
			</div><!-- .container -->
		</section><!-- .services -->
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
		
		<?php if(have_rows('fees')): while(have_rows('fees')): the_row(); ?>
			<section class="container-fluid grey fees" >
				<div class="container" >
					<div class="row vcenter" >
						<div class="col-12 col-md-6" >
							<div class="text-wrapper animate" >
								<h2><?php the_sub_field('header'); ?></h2>
								<?php the_sub_field('content'); ?>
							</div><!-- .text-wrapper -->
						</div><!-- .col -->
						
						<div class="col-12 offset-md-1 col-md-5" >
							<div class="pattern left animate" >
								<div class="image-wrapper circle blocker" style="background-image:url(<?php the_sub_field('image'); ?>);"></div>
								<div class="pattern-block" ></div>
							</div><!-- .pattern -->
						</div><!-- .col -->
					</div><!-- .row -->
					
					<div class="row" >
						<?php if(have_rows('table')): while(have_rows('table')): the_row(); ?>
							<div class="table-responsive offset-md-1 col-md-10 services-table animate slow" >
								<table class="table">
									<thead>
										<tr>
											<?php if(have_rows('th_options')): while(have_rows('th_options')): the_row(); ?>
												<th scope="col"></th>
												<th scope="col"><?php the_sub_field('option_3'); ?></th>
												<th scope="col"><?php the_sub_field('option_2'); ?></th>
												<th scope="col"><?php the_sub_field('option_1'); ?></th>
											<?php endwhile; endif; ?>
										</tr>
									</thead>
									<tbody>
										<?php if(have_rows('table_content')): while(have_rows('table_content')): the_row(); 
										$options = get_sub_field('options') 
										?>
											<tr>
											<td scope="row"><?php the_sub_field('objective'); ?></td>
												<td>
													<?php if($options && in_array('compliance', $options)) {
														echo '<i class="fas fa-check-circle"></i>';
													}?>
												</td>
												<td>
													<?php if($options && in_array('performance', $options)) {
														echo '<i class="fas fa-check-circle"></i>';
													}?>
												</td>
												<td>
													<?php if($options && in_array('strategic', $options)) {
														echo '<i class="fas fa-check-circle"></i>';
													}?>
												</td>
											</tr>
										<?php endwhile; endif; ?>
									</tbody>
								</table><!-- .table -->
								<div class="row" >
									<div class="col-12 col-md-9" >
										<?php the_sub_field('content'); ?>
									</div><!-- .col -->
									
									<div class="col-12 col-md-3" >
									<?php $link = get_sub_field('button_link');
									$link_url = $link['url'];
									$link_title = $link['title'];
									$link_target = $link['target'] ? $link['target'] : '_self'; ?>
										<a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" class="button" ><?php echo esc_html( $link_title ); ?></a>
									</div>
								</div><!-- .row -->
								
							</div><!-- .offset-md-1 .col-md-10 .services-table -->
						<?php endwhile; endif; ?>
					</div><!-- .row -->
				</div><!-- .container -->
			</section><!-- .fees -->
		<?php endwhile; endif; ?>
	</div><!-- #services -->
<?php endwhile; endif; ?>

<?php get_footer(); 
