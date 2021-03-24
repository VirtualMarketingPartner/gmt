<div class="container" >
			<div class="row" >
				<div class="col-12" >
					<h2><?php the_sub_field('content'); ?></h2>
					<br>
					<div class="row card-row-2" >
					<?php 
					$type = get_sub_field('posts');
					$range = get_sub_field('number_posts');
					$post_query = new WP_Query( array('post_type'=>$type, 'posts_per_page'=>$range, 'sort_by'=>'ASC') ); ?>
					<?php while ( $post_query->have_posts() ) : $post_query->the_post(); ?> 
						<div class="col-12 col-md-4 recent-news animate" >
							<div class="card" >
								<?php if(have_rows('hero')): while(have_rows('hero')): the_row(); if(get_sub_field('hero_image')): ?>
								<div class="image-wrapper" style="background-image:url(<?php the_sub_field('hero_image'); ?>); background-position:<?php the_sub_field('position'); ?>" >
									<div class="date" >
										<p>
											<span class="day" ><?php echo get_the_date('d'); ?></span><span class="month" ><?php echo get_the_date('M'); ?></span>
										</p>
									</div>
								</div><!-- .image-wrapper -->
								<?php endif; endwhile; endif; ?>
								
								<div class="card-body" >
									<h4><?php the_title(); ?></h4>
									<a href="<?php the_permalink(); ?>" class="button inverted" ><?php the_field('read_more','options'); ?></a>
								</div><!-- .card-body -->
							</div><!-- .card -->						
						</div><!-- .col -->	 
						<?php endwhile; wp_reset_postdata(); ?>
					</div><!-- .row -->
				</div><!-- .col -->
			</div><!-- .row -->
		</div><!-- .container -->