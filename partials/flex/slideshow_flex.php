<?php if( have_rows('slideshow')): $slideCount = 0; $indicatorCount = 0; ?>
	<div id="slideshow" class="carousel slide" data-ride="carousel" >
		<ol class="carousel-indicators" >
			<?php while( have_rows('slideshow')): the_row(); ?>
			<li data-target="#slideshow" data-slide-to="<?php echo $indicatorCount; ?>" class="<?php if($indicatorCount==0){echo 'active'; } ?>" ></li>
			<?php $indicatorCount++; endwhile; ?>
		</ol>
		<div class="carousel-inner" >
		<?php while( have_rows('slideshow')): the_row(); ?>
			<div class="carousel-item <?php if( $slideCount==0 ){echo 'active'; } ?>" style="background-image:url(<?php the_sub_field('image'); ?>); background-position:<?php the_sub_field('image_position') ?>" >
				<div class="container" >
					<div class="row" >
						<div class="col-12 col-md-8" >
							<div class="hero-text animate" >
								<div class="content" >
									<?php the_sub_field('content'); ?>
								</div><!-- .content -->
							</div><!-- .hero-text -->
						</div><!-- .col -->
					</div><!-- .row -->
				</div><!-- .container -->

			</div><!-- .carousel-item -->
		<?php $slideCount++; endwhile; ?>		
		</div><!-- .carousel-inner -->
		<div class="overlay" ></div>
	</div><!-- #slideshow -->
<?php endif; ?>

<style type="text/css" >
	.hero-spacer{display:none !important;}
</style>