<div class="sidebar animate slow" >
	<div class="row" >
		<div class="col" >
			<h4><?php the_field('recent_news','options'); ?></h4>
			<?php $query = new WP_Query( array( 'post_type' => 'insights', 'posts_per_page'=>3 ) ); while ( $query->have_posts() ) : $query->the_post(); ?> 
			<div class="recent-news" >
				<div class="row" >
					<div class="col-12 col-md-4" >
						<div class="date square" >
							<p>
								<span class="day" ><?php echo get_the_date('d'); ?></span><span class="month" ><?php echo get_the_date('M'); ?></span>
							</p>
						</div>
					</div><!-- .col -->

					<div class="col-12 col-md-8" >
						<h4><?php the_title(); ?></h4>
						<a href="<?php the_permalink(); ?>" class="button inverted" ><?php the_field('read_more','options'); ?> <i class="fas fa-long-arrow-right"></i></a>
					</div><!-- .col -->
				</div><!-- .row -->						
			</div><!-- .recent-news -->	
			<?php endwhile; wp_reset_postdata(); ?>
		</div><!-- .col -->
	</div><!-- .row -->
	
	<div class="row" >
		<div class="col" >
			<h4><?php the_field('search','options'); ?></h4>
			<?php get_search_form(); ?>
		</div><!-- .col -->
	</div><!-- .row -->
</div><!-- sidebar -->