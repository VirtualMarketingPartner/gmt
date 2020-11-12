<?php 
/* Template Name: Services */ 
?>


<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="content" id="services">
	
	<?php get_template_part('/partials/hero'); ?>
	
	<?php get_template_part('/partials/intro'); ?>
	
	<section class="container-fluid services" >
		<div class="container" >
			<div class="row" >
				<div class="col" >
					<ul class="nav flex-column nav-tabs" id="myTab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="nav-ACTIVETAB" data-toggle="tab" href="#tab-ACTIVETAB" role="tab" aria-controls="nav-ACTIVETAB" aria-selected="true">ACTIVE TAB</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="nav-INACTIVETAB" data-toggle="tab" href="#tab-INACTIVETAB" role="tab" aria-controls="nav-INACTIVETAB" aria-selected="true">INACTIVE TAB</a>
						</li>
					</ul><!-- .nav -->
				</div><!-- .col -->

				<div class="col" >
					<div class="tab-content" id="service-content">
						<div class="tab-pane fade show active" id="tab-ACTIVETAB" role="tabpanel" aria-labelledby="nav-ACTIVETAB">
							<h3>ACTIVE TAB HEADER</h3>
						</div><!-- .tab-pane -->
						<div class="tab-pane fade" id="tab-INACTIVETAB" role="tabpanel" aria-labelledby="nav-INACTIVETAB">
							<h3>INACTIVE TAB HEADER</h3>
						</div><!-- .tab-pane -->
					</div><!-- .#service-content -->
				</div><!-- .col -->
			</div><!-- .row -->
			<div class="row" >
				<div class="col-sm-12 offset-md-1 col-md-10" >
					<?php $servicesQuery = new WP_Query( array( 'post_type' => 'services' ) ); while ( $servicesQuery->have_posts() ) : $servicesQuery->the_post(); ?>
						<h2><?php the_title(); ?></h2>
					<?php endwhile; ?>
				</div><!-- .col -->
			</div><!-- .row -->
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
