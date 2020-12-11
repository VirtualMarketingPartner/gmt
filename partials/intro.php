<?php if(have_rows('intro')): while(have_rows('intro')): the_row(); ?>
	<section class="container-fluid angle intro" >
		<div class="container" >
			<div class="row vcenter" >
				<div class="col-12 <?php if(get_sub_field('image')){ echo 'col-md-6'; } ?>" >
					<div class="text-wrapper animate" >
						<h2><?php the_sub_field('title'); ?></h2>
						<?php the_sub_field('content'); ?>
					</div><!-- .text-wrapper -->
				</div><!-- .col -->
				
				<?php if(get_sub_field('image')): ?>
				<div class="col-12 offset-md-1 col-md-5" >
					<div class="pattern left animate" >
						<div class="image-wrapper circle blocker" style="background-image:url(<?php the_sub_field('image'); ?>);" ></div>
						<div class="pattern-block" ></div>
					</div><!-- .pattern -->
				</div><!-- .col -->
				<?php endif; ?>
			</div><!-- .row -->
		</div><!-- .container -->
	</section ><!-- .intro -->
	<?php endwhile; endif; ?>