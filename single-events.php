
<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php get_template_part('/partials/hero'); ?>

<section class="container-fluid angle post" >
		<div class="container" >
			
			<div class="row" >
				<div class="col-12 col-md-7 post-body" >
					
                  	<div class="text-wrapper animate" >
						<p class="date all-caps" ><?php the_date(); ?></p>
						<h1><?php the_title(); ?></h1>
						<?php the_content(); ?>
					</div><!-- .text-wrapper -->
				</div><!-- .col .post-body -->
				
				<div class="col-12 offset-md-1 col-md-4" >
					<?php get_template_part('/partials/post_sidebar'); ?>
				</div><!-- .col -->
			</div><!-- .row -->
			
		</div><!-- .container -->
	</section><!-- .post -->



					<?php wp_reset_postdata(); endwhile; endif; ?>
<?php get_footer(); 