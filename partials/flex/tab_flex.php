<?php if(have_rows('tabs')): while(have_rows('tabs')): the_row(); ?>
<div class="container" >
	<div class="row" >
		<div class="col" >
			<?php the_sub_field('content'); ?>
		</div><!-- .col -->
	</div><!-- .row -->
	<div id="tabs" >
	<div class="row" >
		<div class="col-12 col-md-4" >
			<ul class="nav flex-column nav-tabs" role="tablist">
				<div class="indicator" ></div>
				<?php while(have_rows('service_tabs')): the_row(); ?>
				<li class="nav-item">
					<a class="nav-link <?php if( $serviceNavCount==0 ){ echo 'active'; } ?>" id="nav-<?php echo $serviceNavCount; ?>" data-toggle="tab" href="#tab-<?php echo $serviceNavCount; ?>" role="tab" aria-controls="nav-<?php echo $serviceNavCount; ?>" aria-selected="true"><?php the_sub_field('title'); ?></a>
				</li>
				<?php $serviceNavCount++; endwhile; ?>
			</ul><!-- .nav -->
		</div><!-- .col -->

		<div class="col-12 col-md-8" >
			<div class="tab-content" id="group-content">
				<?php while(have_rows('service_tabs')): the_row(); ?>
				<div class="tab-pane fade <?php if( $serviceTabCount==0 ){ echo 'show active'; } ?>" id="tab-<?php echo $serviceTabCount; ?>" role="tabpanel" aria-labelledby="nav-<?php echo $serviceTabCount; ?>">
					<?php the_sub_field('content'); ?>
				</div><!-- .tab-pane -->
				<?php $serviceTabCount++; endwhile; wp_reset_postdata(); ?>
			</div><!-- .#group-content -->
		</div><!-- .col -->
	</div><!-- .row -->
</div><!-- #tabs -->
</div><!-- .container -->
<?php endwhile; endif; ?>