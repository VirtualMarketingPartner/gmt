<?php 
/* Template Name: About Us */ 
?>


<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="content" id="services">
	
	<?php get_template_part('/partials/hero'); ?>
	
	<?php get_template_part('/partials/intro'); ?>

	<?php if(have_rows('values')): while(have_rows('values')): the_row(); ?>
	<section class="container-fluid bg values" style="background-image:url(<?php the_sub_field('bg'); ?>);" >
		<div class="container" >
			<div class="row" >
				<div class="offset-md-5 col-md-7" >
					<div class="text-wrapper animate slow" >
						<h2><?php the_sub_field('header'); ?></h2>
						<?php if(have_rows('list')): ?>
					</div><!-- .text-wrapper -->
						<div class="row card-row animate slow" >
						<?php while(have_rows('list')): the_row(); ?>
							<div class="col-6" >
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
				</div><!-- .col -->
			</div><!-- .row -->
		</div><!-- .container -->
	</section><!-- .network -->
	<?php endwhile; endif; ?>
	
	<?php if(have_rows('team')): while(have_rows('team')): the_row(); ?>
	<section class="container-fluid angle team" >
		<div class="container" >
		  <div class="row" >
				<div class="col animate" >
					<h2><?php the_sub_field('header'); ?></h2>
				</div><!-- .col -->
			</div><!-- .row -->
			<div class="row circle-list animate" >
				<?php 
				$args = array(
					'post_type' => 'team',
					'tax_query' => array(
						'relation' => 'AND',
						array(
							'taxonomy' => 'group',
							'field'    => 'slug',
							'terms'    => array( 'leadership' ),
						),
					),
				);
				$leadershipQuery = new WP_Query( $args );
				while( $leadershipQuery->have_posts()): $leadershipQuery -> the_post(); 
				?> 
				
				
				
				<div class="col-6 col-md-3 text-center" >
					<?php if(have_rows('team_member')): while(have_rows('team_member')): the_row(); ?>
					<a href="<?php the_permalink(); ?>" class="list-item" >
						<div class="image-wrapper circle" style="background-image:url(<?php the_sub_field('image'); ?>);" ></div>
						<h3><?php the_title(); ?></h3>
					</a>
					<?php endwhile; endif; ?>
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
				<div class="col-12 col-md-6" >
					<div class="text-wrapper animate" >
						<h2><?php the_sub_field('title'); ?></h2>
						<?php the_sub_field('content'); ?>
						<a href="<?php the_sub_field('link'); ?>" class="button" ><?php the_sub_field('label'); ?> <i class="fas fa-long-arrow-right"></i></a>
					</div><!-- .text-wrapper -->
				</div><!-- .col -->
			</div><!-- .row -->
		</div><!-- .container -->
	</section><!-- .partners -->
	<?php endwhile; endif; ?>
	
	<?php if(have_rows('careers')): while(have_rows('careers')): the_row(); ?>
	<section class="container-fluid angle careers" >
		<div class="container" >
			<div class="row vcenter" >
				<div class="col-12 col-md-5" >
					<div class="pattern left animate" >
						<div class="image-wrapper circle blocker" style="background-image:url(<?php the_sub_field('image'); ?>);" ></div>
						<div class="pattern-block" ></div>
					</div><!-- .pattern -->
				</div><!-- .col -->
				
				<div class="col-12 md-offset-1 col-md-6" >
					<div class="text-wrapper animate" >
						<h2><?php the_sub_field('title'); ?></h2>
						<?php the_sub_field('content'); ?>
						<a href="<?php the_sub_field('link'); ?>" class="button" ><?php the_sub_field('label'); ?> <i class="fas fa-long-arrow-right"></i></a>
					</div><!-- .text-wrapper -->
				</div><!-- .col -->
			</div><!-- .row -->
		</div><!-- .container -->
	</section ><!-- .careers -->
	<?php endwhile; endif; ?>
	

</div><!-- #services -->
<?php endwhile; endif; ?>
<?php get_footer(); 
