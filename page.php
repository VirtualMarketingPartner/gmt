<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="content" id="services">
	
	<?php get_template_part('/partials/hero'); ?>
	
	<?php if(have_rows('intro')): while(have_rows('intro')): the_row(); ?>
	<section class="container-fluid angle intro" >
		<div class="container" >
			<div class="row" >
				<div class="col-sm-12 " >
					<h2><?php the_sub_field('title'); ?></h2>
					<?php the_sub_field('content'); ?>
				</div><!-- .col -->
			</div><!-- .row -->
	<?php endwhile; endif; ?>
	
	<?php if(have_rows('cards')): while(have_rows('cards')): the_row(); ?>
			<div class="row" >
				<div class="col-sm-12 text-center" >
					<?php if(get_sub_field('header')): ?>
						<h2><?php the_sub_field('header'); ?></h2>
					<?php endif; ?>
					
					<?php if(have_rows('list')): ?>
					<div class="row card-list" >
						<?php while(have_rows('list')): the_row(); ?>
						<div class="col-sm-12 col-md-4" >
							<div class="card bottom" >
								<div class="card-body text-left" >
									<div class="image-wrapper icon" style="background-image:url(<?php the_sub_field('icon'); ?>);"></div> 
									<h3><?php the_sub_field('title'); ?></h3>
									<?php the_sub_field('content'); ?>
									<br>
									<?php if(get_sub_field('link')): ?>
									<a href="<?php the_sub_field('link'); ?>" class="button" ><?php the_sub_field('label'); ?> <i class="fas fa-long-arrow-right"></i></a>
									<?php endif; ?>
								</div><!-- .card-body -->
							</div><!-- .card -->
						</div><!-- .col -->
						<?php endwhile; ?>
					</div><!-- .row -->
					<?php endif; ?>
				</div><!-- .col -->
			</div><!-- .row -->
	<?php endwhile; endif; ?>
		</div><!-- .container -->
	</section>

</div><!-- #services -->
<?php endwhile; endif; ?>
<?php get_footer(); 
