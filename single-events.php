
<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php get_template_part('/partials/hero'); ?>

<section class="container-fluid angle post" >
		<div class="container" >
			
			<div class="row" >
				<div class="col-12 col-md-8 post-body" >
					
                  	<div class="text-wrapper animate" >
						<p class="date all-caps" ><?php the_date(); ?></p>
						<h1><?php the_title(); ?></h1>
						<?php the_content(); ?>
					</div><!-- .text-wrapper -->
					
					<?php if(get_field('author')): ?>
					<?php $authors = get_field('author'); if( $authors ): ?>
					<?php foreach( $authors as $post ): setup_postdata($post); ?>
					<div class="row" >
						<div class="col" >
							<div class="card bottom" >
								<div class="card-body" >
									<div class="row" >
										<div class="col-12 col-md-4" >
											<?php if(have_rows('team_member')): while(have_rows('team_member')): the_row(); ?>
											<div class="image-wrapper circle" style="background-image:url(<?php the_sub_field('image'); ?>);" ></div>
											
											<?php endwhile; endif; ?>
										</div><!-- .col -->
										<div class="col-12 col-md-8" >
											<div class="text-wrapper" >
												<h5><?php the_title(); ?></h5>
												<?php if( have_rows('get_to_know_content') ): while ( have_rows('get_to_know_content') ) : the_row(); ?>
													<?php if(have_rows('social_media_accounts')): ?>
													<ul class="socials" >
														<?php while(have_rows('social_media_accounts')): the_row(); ?>
														<li>
															<a href="<?php the_sub_field('url'); ?>" target="_blank" >
																<?php if(get_sub_field('account') == 'Linkedin'): ?>
																	<i class="fab fa-linkedin"></i>
																<?php elseif(get_sub_field('account') == 'Twitter'):?>
																	<i class="fab fa-twitter"></i>
																<?php elseif(get_sub_field('account') == 'Facebook'):?>
																	<i class="fab fa-facebook-square"></i>
																<?php elseif(get_sub_field('account') == 'Instagram'):?>
																	<i class="fab fa-instagram"></i>
																<?php endif; ?>
															</a>
														</li>
														<?php endwhile; ?>
													</ul>
													<?php endif; ?>
													<?php endwhile; endif; ?>
												
												<?php the_content(); ?>
											</div><!-- .text-wrapper -->
										</div><!-- .col -->
									</div><!-- .row -->
								</div><!-- .card-body -->
							</div><!-- .card -->						
						</div><!-- .col -->
					</div><!-- .row -->
					<br>
					<?php endforeach; wp_reset_postdata(); endif; ?>
					<?php endif; ?>

					
					<?php if(get_field('post_cta','options')): ?>
					<br><br>
					<div id="post_cta" >
						
							<?php the_field('post_cta','options'); ?>
						
					</div><!-- #post_cta -->
					<?php endif; ?>
					
					
				</div><!-- .col .post-body -->
				
				<div class="col-12 col-md-4" >
					<?php get_template_part('/partials/post_sidebar'); ?>
				</div><!-- .col -->
			</div><!-- .row -->
			
		</div><!-- .container -->
	</section><!-- .post -->



					<?php wp_reset_postdata(); endwhile; endif; ?>
<?php get_footer(); 