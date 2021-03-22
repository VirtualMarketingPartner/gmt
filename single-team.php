<?php 
/* Template Name: Single Team */ 
?>

<?php get_header(); ?>

<?php 
$name = get_the_title();
$name_array = explode(' ', $name);
$first_name = $name_array[0];?> 

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
						<h4 class="all-caps grey"><?php the_sub_field('title');?></h4>
					<?php endwhile; endif;?>
					<?php the_content(); ?>
					
				</div><!-- .col-sm-12 .col-md-8 .single-team -->
				<?php endwhile; endif; ?>
			</div><!-- .row -->
			
			<div class="row">
				<?php if( have_rows('get_to_know_content') ): while ( have_rows('get_to_know_content') ) : the_row(); ?>
					<div class="card single-team-info">
						<div class="row" >
						<div class="col-12 col-md-4 col-lg-3">
							<h3><?php the_field('get_to_know','options'); ?></h3>
							
							<h3><?php echo $first_name; ?></h3>
							
							<?php if(have_rows('social_media_accounts')): ?>
							<ul class="socials" style="margin-top:20px;">
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
						</div><!-- .col-12 .col-md-4 -->
							
						<div class="col-12 col-md-8 col-lg-9" >
							<div class="row" >	
								<?php 
								$rows = get_sub_field('fact');
								$temp_arr = $rows;
								shuffle ($temp_arr); 
								$random_rows = array_slice( $temp_arr, 0, 2 );
								foreach($random_rows as $row): ?>
								<div class="col-6" >
									<h4 class="all-caps"><?php echo $row['header']; ?></h4>
									<p><?php echo $row['content']; ?></p>
								</div><!-- .col -->
								<?php endforeach; ?>
							</div><!-- .row -->
						</div><!-- .col -->
					</div><!-- .row -->
				</div><!-- .card .single-team-info -->
				<?php endwhile; endif; ?>
		</div><!-- .container -->
		<div class="container" >
			<div class="row" >
				<div class="col-12 col-md-4" >
					<div class="expand">
					<a class="expand-header" >
						<h3><i class="far fa-angle-right indicator"></i> <?php the_field('contact_team_button','options'); echo ' '.$first_name; ?></h3>
					</a>
						<div class="expand-content" >
							<?php gravity_form( 1, false, false, false, '', false ); ?>
						</div><!-- .expand-content -->
					</div><!-- .expand -->
					
				</div><!-- .col -->
			</div><!-- .row -->
		</div><!-- container -->
	</div><!-- .content -->
</section>

<?php get_footer(); 