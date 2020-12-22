<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="content" id="page">
	
	<?php get_template_part('/partials/hero'); ?>
	
	<section class="container-fluid angle" >
		<div class="container" >
			<div class="text-wrapper animate slow" >
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
			</div><!-- .text-wrapper -->
		</div><!-- .container -->
	</section><!-- .container-fluid -->
	
</div><!-- #page -->
<?php endwhile; endif; ?>
<?php get_footer(); 
