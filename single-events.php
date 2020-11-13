
<?php get_header(); ?>

<?php if( get_field('hero') ): ?>
	<div class="jumbotron-fluid hero" style="background-image:url(<?php the_field('hero'); ?>);" ></div>
<?php endif; ?>
<div class="content" >
	<div class="container" >
		<div class="row" >
			<div class="col-sm" >
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
				<?php endwhile; endif; ?>
			</div><!-- .col-sm -->
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- .content -->


<?php get_footer(); 