<div class="container combo_flex" >
	<div class="row vcenter" >
		<?php if( get_sub_field('layout') == 'image-left' ): ?>
		<div class="col-12 col-md-4" >
			<?php if(get_sub_field('image_type') == 'image'): ?>
			<div class="pattern left animate" >
				<div class="image-wrapper circle blocker" style="background-image:url(<?php the_sub_field('image'); ?>);" ></div>
				<div class="pattern-block" ></div>
			</div><!-- .pattern -->
			<?php elseif(get_sub_field('image_type') == 'embed'): ?>
				<div class="embed-container" >
					<?php the_sub_field('video_embed'); ?>
				</div><!-- .embed-container -->
			<?php elseif(get_sub_field('image_type') == 'video'): ?>
				<video autoplay="true" muted="true" loop="true" style="width:100%; height:auto;">
					<source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/videos/GMT_Video.mp4" type="video/mp4">
					<source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/videos/GMT_Video.webm" type="video/webm">
				</video>
			<?php endif; ?>
		</div><!-- .col -->
		<div class="col-12 col-md-8" >
			<div class="text-wrapper animate slow" >
			<?php the_sub_field('content'); ?>
			</div><!-- .text-wrapper -->
		</div><!-- .col -->
		
		
		<?php elseif( get_sub_field('layout') == 'image-right' ): ?>
		<div class="col-12 col-md-7" >
			<div class="text-wrapper animate slow" >
			<?php the_sub_field('content'); ?>
			</div><!-- .text-wrapper -->
		</div><!-- .col -->
		<div class="col-12 offset-md-1 col-md-4" >
			<?php if(get_sub_field('image_type') == 'image'): ?>
			<div class="pattern left animate" >
				<div class="image-wrapper circle blocker" style="background-image:url(<?php the_sub_field('image'); ?>);" ></div>
				<div class="pattern-block" ></div>
			</div><!-- .pattern -->
			<?php elseif(get_sub_field('image_type') == 'embed'): ?>
				<div class="embed-container" >
					<?php the_sub_field('video_embed'); ?>
				</div><!-- .embed-container -->
			<?php elseif(get_sub_field('image_type') == 'video'): ?>
				<video autoplay="true" muted="true" loop="true" style="width:100%; height:auto;">
					<source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/videos/GMT_Video.mp4" type="video/mp4">
					<source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/videos/GMT_Video.webm" type="video/webm">
				</video>
			<?php endif; ?>
		</div><!-- .col -->
		<?php endif; ?>
	</div><!-- .row -->
</div><!-- .container -->