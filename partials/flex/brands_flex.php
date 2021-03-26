<?php if(have_rows('clients','options')): while(have_rows('clients','options')): the_row(); ?>
<div class="container" >
	<?php if(have_rows('client_list')): ?>
	<div class="row" >
		<div class="col-12" id="client_list" >
			<div class="row text-center scroll-left" style="flex-wrap: nowrap;" >
				<?php while(have_rows('client_list')): the_row(); ?>
				<div class="col-8 col-md-2 logo" >
					<div class="image-wrapper brand" style="background-image:url(<?php the_sub_field('logo'); ?>);" title="<?php the_sub_field('name'); ?>"></div> 
				</div><!-- .col -->
				<?php endwhile; ?>
			</div><!-- .row -->
		</div><!-- .col-12 -->
	</div><!-- .row -->
	<?php endif; ?>
</div><!-- .container -->
<?php endwhile; endif; ?>