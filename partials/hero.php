<?php if(have_rows('hero')): while(have_rows('hero')): the_row(); ?>
<?php if(get_sub_field('hero_image')): ?>

<section class="container-fluid bg hero" style="background-image:url(<?php the_sub_field('hero_image'); ?>); background-position:<?php the_sub_field('hero_position'); ?>" >
	<div class="container" >
		<div class="row" >
			<div class="col-12 col-md-8" >
				<div class="hero-text animate" >
					<div class="content" >
						<p class="all-caps" ><?php the_sub_field('sub_header'); ?></p>
						<h1><?php the_sub_field('header'); ?></h1>
						<?php if( get_sub_field('label')): ?>
						<a href="<?php the_sub_field('link'); ?>" class="button" ><?php the_sub_field('label'); ?> <i class="fas fa-long-arrow-right"></i></a>
						<?php endif; ?>
					</div><!-- .content -->
				</div><!-- .hero-text -->
			</div><!-- .col -->
		</div><!-- .row -->
	</div><!-- .container -->
	<div class="overlay" ></div>
</section><!-- .hero -->

<?php else: ?>

<div class="hero-spacer" ></div>

<?php endif; ?>



<?php endwhile; endif; ?>