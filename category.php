
<?php get_header(); ?>

<div class="content" id="post_list">
	
	<?php get_template_part('/partials/hero'); ?>
	
	<section class="container-fluid angle insights" >
		<div class="container" >
			<div class="row" >
				<div class="col-sm-12 col-md-9" >
				<h1>Category: <?php single_cat_title(); ?></h1>
				<?php if(have_posts()): while(have_posts()): the_post(); ?>
				
					<div class="row post" >
						<?php if(have_rows('hero')): while(have_rows('hero')): the_row(); ?>
						<div class="col-sm-12 col-md-4" >
							<div class="image-date-wrapper" >
								<p class="date all-caps" ><?php echo get_the_date('M d'); ?></p>
								<a href="<?php the_permalink(); ?>" >
									<div class="image-wrapper" style="background-image:url(<?php the_sub_field('hero_image'); ?>); background-position:<?php the_sub_field('hero_position'); ?>" ></div>
								</a>
							</div><!-- .image-date-wrapper -->
						</div><!-- .col -->
						<div class="col-sm-12 col-md-8" >
							<h5><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></h5>
							<?php the_excerpt(); ?>
							<a href="<?php the_permalink(); ?>" class="button inverted" >
								<?php the_field('read_more','options'); ?> </a>
						</div><!-- .col -->
						<?php endwhile; else: ?>

						<div class="col-sm-12" >
							<p class="date all-caps" ><?php echo get_the_date('M d'); ?></p>
							<h5><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></h5>
							<?php the_excerpt(); ?>
							<a href="<?php the_permalink(); ?>" class="button inverted" >
								<?php the_field('read_more','options'); ?></a>
						</div><!-- .col -->

						<?php endif; ?>
					</div><!-- .row -->
					
					
				<?php endwhile; else: ?>
					<div class="row" >
						<div class="col" >
							<p><?php the_field('empty_search', 'options'); ?></p>
						</div>
					</div><!-- .row -->
				<?php endif; ?>
				</div><!-- .col -->
				<div class="col-sm-12 col-md-3" >
					<?php get_template_part('/partials/list_sidebar'); ?>
				</div><!-- .col -->
			</div><!-- .row -->
		</div><!-- .container -->
	</section><!-- .insights -->
	
</div><!-- #post_list -->

<?php get_footer(); 
