
<?php get_header(); ?>

<?php get_template_part('/partials/hero'); ?>

<section class="container-fluid angle post" >
		<div class="container" >
			
			<div class="row" >
				<div class="col-sm-12 col-md-7 post-body" >
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                  	<p class="date all-caps" ><?php the_date(); ?></p>
					<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
					<?php endwhile; endif; ?>
					
					<?php if(get_field('post_cta','options')): ?>
					<div class="card bottom" id="post_cta" >
						<div class="card-body" >
							<?php the_field('post_cta','options'); ?>
						</div><!-- .card-body -->
					</div><!-- .card -->
					<?php endif; ?>
				</div><!-- .col .post-body -->
				
				<div class="col-sm-12 offset-md-1 col-md-4" >
					<?php get_template_part('/partials/post_sidebar'); ?>
				</div><!-- .col -->
			</div><!-- .row -->
		</div><!-- .container -->
	</section><!-- .post -->


<?php get_footer(); 