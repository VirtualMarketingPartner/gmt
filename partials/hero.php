<?php if(have_rows('hero')): while(have_rows('hero')): the_row(); 
$bgImage = get_sub_field('hero_image');
$minHeight = get_sub_field('hero_height');
$imagePos = get_sub_field('hero_position');
?>

<?php if(get_sub_field('hero_image')): ?>
<section class="container-fluid bg hero" style="background-image:url(<?php echo $bgImage; ?>); background-position:<?php echo $imagePos; ?>; min-height:<?php echo $minHeight; ?>px;" >
	<div class="container" >
		<div class="row" >
			<div class="col-12 col-md-8" >
				<div class="hero-text animate" style="min-height:<?php echo $minHeight; ?>px;" >
					<div class="content" >
						<p class="all-caps" ><?php the_sub_field('sub_header'); ?></p>
						<h1><?php the_sub_field('header'); ?></h1>
					</div><!-- .content -->
				</div><!-- .hero-text -->
			</div><!-- .col -->
		</div><!-- .row -->
	</div><!-- .container -->
	<div class="overlay" ></div>
</section><!-- .hero -->

<?php else: ?>
<section class="container-fluid hero-spacer" >
	<div class="container" >
		<div class="row" >
			<div class="col-12 col-md-8" >
				<div class="hero-text animate" style="min-height:<?php echo $minHeight; ?>px;" >
					<div class="content" >
						<p class="all-caps" ><?php the_sub_field('sub_header'); ?></p>
						<h1><?php the_sub_field('header'); ?></h1>
					</div><!-- .content -->
				</div><!-- .hero-text -->
			</div><!-- .col -->
		</div><!-- .row -->
	</div><!-- .container -->
</section><!-- .hero-spacer -->
<?php endif; ?>



<?php endwhile; endif; ?>