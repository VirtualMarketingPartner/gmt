
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="content" id="home">
	<div class="container-fluid" id="hero" >
		<div class="container" >
			<div class="row" >
				<div class="col" >
				</div>
			</div><!-- .row -->
			
			<div class="row" >
				<div class="col" >
					<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
				</div><!-- .col -->
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- #hero -->
		
</div><!-- #home -->

<?php endwhile; endif; ?>
<?php get_footer(); 
