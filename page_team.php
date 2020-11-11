<?php 
/* Template Name: Meet the Team */ 
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
	
	<?php if(have_rows('team')): while(have_rows('team')): the_row(); ?>
	<section class="container-fluid angle grey team" >
		<div class="container" >
		  <div class="row" >
				<div class="col" >
					<h2><?php the_sub_field('header'); ?></h2>
				</div><!-- .col -->
			</div><!-- .row -->
			<div class="row circle-list" >
				<?php $teamQuery = new WP_Query( array( 'post_type' => 'team' ) ); while ( $teamQuery->have_posts() ) : $teamQuery->the_post(); ?> 
					<?php if(have_rows('team_member')): while(have_rows('team_member')): the_row(); ?>
					<div class="col-sm-6" >
						<div class="row vcenter" >
							<div class="col-sm-12 col-md-4" >
								<a href="<?php the_permalink(); ?>" >
									<div class="image-wrapper circle" style="background-image:url(<?php the_sub_field('image'); ?>);" ></div>
								</a>
							</div><!-- .col -->
							<div class="col-sm-12 col-md-8" >
								<p class="name" ><?php the_title(); ?></p>
								<p class="title"><?php the_sub_field('title'); ?></p>
								<a href="<?php the_permalink(); ?>"><?php the_field('meet_team_member','options'); ?> 
									<?php 
									$name = get_the_title();
									$name_array = explode(' ', $name);
									$first_name = $name_array[0];
									echo $first_name; ?> 
									<i class="fas fa-long-arrow-right"></i></a>
							</div><!-- .col -->
						</div><!-- .row -->
					</div><!-- .col -->
					<?php endwhile; endif; ?>

				<?php endwhile; wp_reset_postdata(); ?>
			</div><!-- .row -->
		</div><!-- .container -->
	</section ><!-- .team -->
	<?php endwhile; endif; ?>

</div><!-- #services -->
<?php endwhile; endif; ?>
<?php get_footer(); 
