
<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
<div class="content" id="post_list">
	
	<?php get_template_part('/partials/hero'); ?>
	
	<section class="container-fluid angle insights" >
		<div class="container" >
			<div class="row" >
				<div class="col-sm-12 col-md-8" >
				<h1><?php printf(__('Search Results for: %s', 'materialwp'), '<span>' . get_search_query() . '</span>');?></h1>
				<?php while(have_posts()): the_post(); ?>
				<div class="row post" >
					<div class="col-sm-12 col-md-4" >
						<div class="image-date-wrapper" >
							<p class="date all-caps" ><?php echo get_the_date('M d'); ?></p>
							<a href="<?php the_permalink(); ?>" >
								<div class="image-wrapper" style="background-image:url();" ></div>
							</a>
						</div><!-- .image-date-wrapper -->
					</div><!-- .col -->
					<div class="col-sm-12 col-md-8" >
						<h5><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></h5>
						<?php the_excerpt(); ?>
						<a href="<?php the_permalink(); ?>" class="button inverted" >
							<?php the_field('read_more','options'); ?> <i class="fas fa-long-arrow-right"></i></a>
					</div><!-- .col -->
				</div><!-- .row -->
				<?php endwhile; ?>
				</div><!-- .col -->
				<div class="col-sm-12 offset-md-1 col-md-3" >
					<?php get_template_part('/partials/list_sidebar'); ?>
				</div><!-- .col -->
			</div><!-- .row -->
		</div><!-- .container -->
	</section><!-- .insights -->
	
</div><!-- #post_list -->

<?php else: ?>
<div class="content" id="post_list">
	
	<?php get_template_part('/partials/hero'); ?>
	
	<section class="container-fluid angle insights" >
		<div class="container" >
			<div class="row" >
				<div class="col-sm-12 col-md-8" >
				<h1><?php printf(__('Search Results for: %s', 'materialwp'), '<span>' . get_search_query() . '</span>');?></h1>
					<p><?php the_field('empty_search', 'options'); ?></p>
				</div><!-- .col -->
				<div class="col-sm-12 offset-md-1 col-md-3" >
					<?php get_template_part('/partials/list_sidebar'); ?>
				</div><!-- .col -->
			</div><!-- .row -->
		</div><!-- .container -->
	</section><!-- .insights -->
	
</div><!-- #post_list -->

<?php endif; ?>

<?php get_footer(); 
