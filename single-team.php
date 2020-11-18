<?php 
/* Template Name: Single Team */ 
?>

<?php get_header(); ?>
<section>
	<div class="content" >
		<div class="container single-team">
			<div class="row" >
				<?php if ( have_rows('team_member') ): while ( have_rows('team_member') ) : the_row(); ?>
					<div class="col-sm col-md-5 order-md-5">
						<div class="single-team-image" style="background-image:url(<?php the_sub_field('image'); ?>);" ></div><!-- .single-team-image -->
					</div><!-- .col-sm .col-md-4 .single-team-image -->
					<div class="col-sm-12 col-md-7 single-team-content" >
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							<h1><?php the_title(); ?></h1>
							<h3 class="all-caps"><?php the_sub_field('title');?></h3>
						<?php endwhile; endif;?>
						<?php the_content(); ?>
						<div class="single-team-contact">
								<i class="fal fa-envelope"></i><a href="mailto:<?php the_sub_field('email');?>"><?php the_sub_field('email');?></a><br>
								<i class="fal fa-phone"></i><a href="tel:<?php the_sub_field('phone');?>"><?php the_sub_field('phone');?></a>
						</div><!-- .single-team-contact -->
					</div><!-- .col-sm-12 .col-md-8 .single-team -->
				<?php endwhile; endif; ?>
			</div><!-- .row -->
			<div class="row">
				<?php if ( have_rows('get_to_know_content') ): while ( have_rows('get_to_know_content') ) : the_row(); ?>
					<div class="card single-team-info">
						<div class="col-sm-12 col-md-4">
							<h2><?php the_field('get_to_know','options'); ?></h2>
							<h2><?php the_sub_field('team_member_first_name'); ?></h2>
						</div><!-- .col-sm-12 .col-md-4 -->
						<div class="col-sm-12 col-md-4">
							<h3><?php the_field('favorite_quote','options'); ?></h3>
							<p><?php the_sub_field('team_member_favorite_quote');?></p>
							<p class="all-caps"><?php the_sub_field('author');?></p>
						</div><!-- .col-sm-12 .col-md-4 -->
						<div class="col-sm-12 col-md-4">
							<h3><?php the_field('favorite_hobbies','options'); ?></h3>
							<p><?php the_sub_field('team_member_favorite_hobbies');?></p>
						</div><!-- .col-sm-12 .col-md-4 -->
					</div><!-- .card .single-team-info -->
				<?php endwhile; endif; ?>
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- .content -->
</section>

<?php get_footer(); 