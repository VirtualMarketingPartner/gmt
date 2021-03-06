<?php if(have_rows('testimonials')): while(have_rows('testimonials')): the_row(); ?>
<section class="container-fluid angle testimonials" >
	<div class="container" >
		<div class="row" >
			<div class="col" >
				<?php the_sub_field('content'); ?>
			</div><!-- .col -->
		</div><!-- .row -->
		<div class="row vcenter" >
			<div class="col-12 col-md-4" >
				<div class="pattern bottom left animate" >
					<div class="image-wrapper circle blocker" style="background-image:url(<?php the_sub_field('image'); ?>);"></div>
					<div class="pattern-block" ></div>
				</div><!-- .pattern -->
			</div><!-- .col -->

			<div class="col-12 col-md-7 animate" >
				<?php if(have_rows('quotes')): $quote=0; $quoteIndicator=0; ?>
				<div id="quoteCarousel" class="carousel slide" data-ride="carousel" >
					<ol class="carousel-indicators" >
						<?php while( have_rows('quotes')): the_row(); ?>
						<li data-target="#quoteCarousel" data-slide-to="<?php echo $quoteIndicator; ?>" class="<?php if($quoteIndicator==0){echo 'active'; } ?>" ></li>
						<?php $quoteIndicator++; endwhile; ?>
					</ol>
					<div class="carousel-inner" >
					<?php while(have_rows('quotes')): the_row(); ?>
						<div class="carousel-item <?php if($quote==0){echo 'active';} ?>" >
							<?php the_sub_field('quote'); ?>
						</div><!-- .carousel-item -->
					<?php $quote++; endwhile; ?>
					</div><!-- .carousel-inner -->
				</div><!-- #quoteCarousel -->
				<?php endif; ?>

			</div><!-- .col -->
		</div><!-- .row -->
	</div><!-- .container -->
</section><!-- .testimonials -->
<?php endwhile; endif; ?>