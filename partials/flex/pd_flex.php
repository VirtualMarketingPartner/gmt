<?php if(have_rows('pd')): while(have_rows('pd')): the_row(); ?>
<div class="container pd_flex" >
	<div class="row" >
		<div class="col-12" >
			<?php the_sub_field('content'); ?>
		</div><!-- .col -->
	</div><!-- .row -->
	<?php if(have_rows('pd_repeater')): ?>
	<div class="row" >
		<?php while(have_rows('pd_repeater')): the_row(); 
		$colSize = get_sub_field('pd_width'); ?>
		<div class="col <?php 
						if($colSize == 1){ echo "col-md-2"; }else  
						if($colSize == 2){ echo "col-md-4"; }else  
						if($colSize == 3){ echo "col-md-6"; }else
						if($colSize == 4){ echo "col-md-8"; }else
						if($colSize == 5){ echo "col-md-10"; }else
						if($colSize == 6){ echo "col-md-12"; }?>" >
			<div class="expand" >
				<a class="expand-header" >
				<i class="far fa-angle-right indicator"></i> 
					<?php the_sub_field('header'); ?>
				</a>
				<div class="expand-content" >
					<?php the_sub_field('content'); ?>
				</div><!-- .expand-content -->
			</div><!-- .expand -->
		</div><!-- .col -->
		<?php endwhile; ?>
	</div><!-- .row -->
	<?php endif; ?>
</div><!-- .container -->
<?php endwhile; endif; ?>





