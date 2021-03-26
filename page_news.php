<?php 
/* Template Name: News */ 
?>


<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="content" id="post_list">
	
	<?php get_template_part('/partials/hero'); ?>
	
	<section class="container-fluid angle insights" >
		<div class="container" >
			<div class="row" >
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
			</div><!-- .row -->
			<div class="row" >
				<div class="col-12 col-md-9" >
					<?php
						$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
						$args = array(
							'paged'          => $paged,
							'post_type'		 => 'company_news'
						);

						$the_query = new WP_Query( $args ); 
						?>
					
					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?> 
					<div class="row post animate" >
						<?php if(have_rows('hero')): while(have_rows('hero')): the_row(); ?>
						<div class="col-12 col-md-4" >
							<div class="image-date-wrapper" >
								<p class="date all-caps" ><?php echo get_the_date('M d'); ?></p>
								<a href="<?php the_permalink(); ?>" >
									<div class="image-wrapper" style="background-image:url(<?php the_sub_field('hero_image'); ?>); background-position:<?php the_sub_field('hero_position'); ?>" ></div>
								</a>
							</div><!-- .image-date-wrapper -->
						</div><!-- .col -->
						<div class="col-12 col-md-8" >
							<h5><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></h5>
							<?php the_excerpt(); ?>
							<a href="<?php the_permalink(); ?>" class="button inverted" >
								<?php the_field('read_more','options'); ?></a>
						</div><!-- .col -->
						<?php endwhile; endif; ?>
					</div><!-- .row -->
					<?php endwhile; ?>
					
					<div class="row" >
						<div class="col text-left" >
							<p><?php next_posts_link( '<i class="fas fa-angle-left"></i> Older Entries', $the_query->max_num_pages ); ?></p>
						</div><!-- .col -->
						
						<div class="col text-right" >
							<p><?php previous_posts_link( 'Newer Entries <i class="fas fa-angle-right"></i>' ); ?></p>
							<?php wp_reset_postdata(); ?>
						</div><!-- .col -->
					</div><!-- .row -->

				</div><!-- .col -->
				
				<div class="col-12 col-md-3" >
					<?php get_template_part('/partials/list_sidebar'); ?>
				</div><!-- .col -->
			</div><!-- .row -->
		</div><!-- .container -->
	</section><!-- .insights -->
	
	

</div><!-- #services -->
<?php endwhile; endif; ?>
<?php get_footer(); 
