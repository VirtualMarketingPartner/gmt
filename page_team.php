<?php 
/* Template Name: Meet the Team */ 
?>


<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="content" id="team">
	
	<?php get_template_part('/partials/hero'); ?>
	
	<?php if(have_rows('team')): while(have_rows('team')): the_row(); ?>
	<section class="container-fluid angle grey team" >
		<div class="container" >
		  <div class="row" >
				<div class="col" >
					<h2><?php the_sub_field('header'); ?></h2>
				</div><!-- .col -->
			</div><!-- .row -->
			
			<?php if(have_rows('group')): $groupNavCount=0; $groupTabCount=0; ?>
			<div id="team_tabs" >
				<div class="row" >
					<div class="col" >
						<ul class="nav horiz"  role="tablist">
							<div class="indicator" ></div>
							<?php while(have_rows('group')): the_row(); ?>
							<li class="nav-item">
								<a class="nav-link <?php if( $groupNavCount==0 ){ echo 'active'; } ?>" id="nav-<?php echo $groupNavCount; ?>" data-toggle="tab" href="#tab-<?php echo $groupNavCount; ?>" role="tab" aria-controls="nav-<?php echo $groupNavCount; ?>" aria-selected="true"><?php the_sub_field('group_name'); ?></a>
							</li>
							<?php $groupNavCount++; endwhile; ?>
						</ul><!-- .nav -->
					</div><!-- .col -->
				</div><!-- .row -->

				<div class="row" >
					<div class="col" >
						<div class="tab-content" id="group-content">
							<?php while(have_rows('group')): the_row(); ?>
							<div class="tab-pane fade <?php if( $groupTabCount==0 ){ echo 'show active'; } ?>" id="tab-<?php echo $groupTabCount; ?>" role="tabpanel" aria-labelledby="nav-<?php echo $groupTabCount; ?>">

								<div class="row" >
								<?php $group = get_sub_field('group_members'); if( $group ): ?>
								<?php foreach( $group as $post ): setup_postdata($post); ?>
									<div class="col-12 col-md-6 col-lg-3" >
										<?php if(have_rows('team_member')): while(have_rows('team_member')): the_row(); ?><a href="<?php the_permalink(); ?>" class="image-wrapper" style="background-image:url(<?php the_sub_field('image'); ?>);" ></a>
										<p class="name" ><a href="<?php the_permalink(); ?>" ><?php 
											$name = get_the_title(); 
											$name_array = explode(' ', $name);
											$first_name = $name_array[0];
											echo $first_name; 
											?></a></p>
										<?php endwhile; endif; ?>
									</div><!-- .col -->
								<?php endforeach; ?>
								<?php wp_reset_postdata(); endif; ?>
								</div><!-- .row -->

							</div><!-- .tab-pane -->
							<?php $groupTabCount++; endwhile; wp_reset_postdata(); ?>
						</div><!-- .#group-content -->
					</div><!-- .col -->
				</div><!-- .row -->
			</div><!-- #team_tabs -->
			<?php endif; ?>
			
		</div><!-- .container -->
	</section ><!-- .team -->
	<?php endwhile; endif; ?>

</div><!-- #team -->
<?php endwhile; endif; ?>
<?php get_footer(); 
