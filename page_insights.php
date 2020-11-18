<?php 
/* Template Name: Insights */ 
?>


<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="content" id="post_list">
	
	<?php get_template_part('/partials/hero'); ?>
	
	<section class="container-fluid angle insights" >
		<div class="container" >
			<?php if(have_rows('intro')): while(have_rows('intro')): the_row(); ?>
			<div class="row" >
				<h2><?php the_sub_field('title'); ?></h2>
			</div><!-- .row -->
			<?php endwhile; endif; ?>
			<div class="row" >
				<div class="col-sm-12 col-md-8" >
					<div class="row post-list" >
					<?php $query = new WP_Query( array( 'post_type' => 'insights', 'posts_per_page'=>10 ) ); while ( $query->have_posts() ) : $query->the_post(); ?> 
						<div class="col-sm-12 col-md-4" >
							<p class="date" ><?php echo get_the_date('M d'); ?></p>
							<div class="image-wrapper" style="background-image:url();" ></div>
						</div><!-- .col -->
						<div class="col-sm-12 col-md-8" >
							<h5><?php the_title(); ?></h5>
							<?php the_excerpt(); ?>
							<a href="<?php the_permalink(); ?>" ><?php the_field('read_more','options'); ?> <i class="fas fa-long-arrow-right"></i></a>
						</div><!-- .col -->
					<?php endwhile; ?>
					</div><!-- .post-list -->
				</div><!-- .col -->
				
				<div class="col-sm-12 offset-md-1 col-md-3" >
					<h4><?php the_field('search','options'); ?></h4>
					[The Sidebar will go here.]
					<h4><?php the_field('categories','options'); ?></h4>
					[The Sidebar will go here.]
				</div><!-- .col -->
			</div><!-- .row -->
		</div><!-- .container -->
	</section><!-- .insights -->
	
	

</div><!-- #services -->
<?php endwhile; endif; ?>
<?php get_footer(); 
