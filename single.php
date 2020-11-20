
<?php get_header(); ?>

<?php get_template_part('/partials/hero'); ?>

<section class="container-fluid angle post" >
		<div class="container" >
			
			<div class="row" >
				<div class="col-sm-12 col-md-8" >
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<?php the_date(); ?>
					<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
					<?php endwhile; endif; ?>
				</div><!-- .col -->
				
				<div class="col-sm-12 offset-md-1 col-md-3" >
					<?php get_template_part('/partials/post_sidebar'); ?>
				</div><!-- .col -->
			</div><!-- .row -->
		</div><!-- .container -->
	</section><!-- .post -->


<?php get_footer(); 