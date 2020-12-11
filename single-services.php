
<?php get_header(); ?>

<div class="content" id="page">
	
	<?php get_template_part('/partials/hero'); ?>
	
	<section class="container-fluid angle" >
		<div class="container" >
			<div class="text-wrapper animate slow" >
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
			</div><!-- .text-wrapper -->
		</div><!-- .container -->
	</section><!-- .container-fluid -->
	
</div><!-- #page -->

<?php get_footer(); 