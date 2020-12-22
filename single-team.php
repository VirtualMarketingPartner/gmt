<?php 
/* Template Name: Single Team */ 
?>

<?php get_header(); ?>

<section>
	<div class="content" >
		<div class="container single-team">
			<div class="row vcenter" >
				<?php if ( have_rows('team_member') ): while ( have_rows('team_member') ) : the_row(); ?>
				<?php if(get_sub_field('image')): ?>
				<div class="col-sm col-md-4 offset-md-1 order-md-5">
					<div class="pattern large left" >
						<div class="image-wrapper blocker" style="background-image:url(<?php the_sub_field('image'); ?>);" ></div>
						<div class="pattern-block" ></div>
					</div><!-- .pattern -->
				</div><!-- .col-sm .col-md-4 .single-team-image -->
				<?php endif; ?>
				<div class="col-sm-12 <?php if(get_sub_field('image')): ?>col-md-7<?php endif; ?> single-team-content" >
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<h1><?php the_title(); ?></h1>
						<h3 class="all-caps"><?php the_sub_field('title');?></h3>
					<?php endwhile; endif;?>
					<?php the_content(); ?>
					<div class="single-team-contact">
						<?php if(get_sub_field('email')): ?>
						<i class="far fa-envelope"></i>
						<a href="mailto:<?php the_sub_field('email');?>"><?php the_sub_field('email');?></a>
						<br>
						<?php endif; ?>
						<?php if(get_sub_field('phone')): ?>
						<i class="far fa-phone"></i>
						<a href="tel:<?php the_sub_field('phone');?>"><?php the_sub_field('phone');?></a>
						<?php endif; ?>
					</div><!-- .single-team-contact -->
				</div><!-- .col-sm-12 .col-md-8 .single-team -->
				<?php endwhile; endif; ?>
			</div><!-- .row -->
			<div class="row">
				<?php if( have_rows('get_to_know_content') ): while ( have_rows('get_to_know_content') ) : the_row(); ?>
					<?php if(have_rows('fact')): ?>
					<div class="card single-team-info">
						<div class="row" >
						<div class="col-12 col-md-4 col-lg-3">
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
							
							<h2><?php the_field('get_to_know','options'); ?></h2>
							<?php 
							$name = get_the_title();
							$name_array = explode(' ', $name);
							$first_name = $name_array[0];
							?> 
							<h2><?php echo $first_name; ?></h2>
						</div><!-- .col-12 .col-md-4 -->
							
						<div class="col-12 col-md-8 col-lg-9" >
							<div class="row" >
								
								<?php 
								$rows = get_field('fact'); //get all rows
								shuffle ($rows); //randomize rows
								if($rows) {
									foreach($rows as $row) { //print rows
										echo $row['header'];
										echo ' ';
										echo $row['content'];
										echo '<br>';
									} 
								}
								?>
								
								
								<?php if(have_rows('fact')): while(have_rows('fact')): the_row(); ?>
								<div class="col-6 col-md-4" >
									<div class="text-wrapper" >
										<h5><?php the_sub_field('header'); ?></h4>
										<?php the_sub_field('content'); ?>
									</div><!-- .text-wrapper -->
								</div><!-- .col -->
								<?php endwhile; endif; ?>
							</div><!-- .row -->
						</div><!-- .col -->
					</div><!-- .row -->
				</div><!-- .card .single-team-info -->
				<?php endif; ?>
				<?php endwhile; endif; ?>
		</div><!-- .container -->
	</div><!-- .content -->
</section>

<?php get_footer(); 