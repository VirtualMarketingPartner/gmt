<div class="container column_flex" >
	<div class="row" >
		<div class="col-12" >
			<div class="text-wrapper animate slow" >
				<?php the_sub_field('content'); ?>
			</div><!-- .text-wrapper -->
		</div><!-- .col -->
	</div><!-- .row -->
	<div class="row" >
		<div class="col" >
			<div class="text-wrapper animate slow" >
				<?php 
					$count = count(get_sub_field('columns')); 
					if(have_rows('columns')): ?>
				<div class="row" >
					<?php while(have_rows('columns')): the_row(); 
					$colSize = get_sub_field('column_size'); ?>
					<div class="col <?php 
								if($colSize == 1){ echo "col-md-12"; }else  
								if($colSize == 2){ echo "col-md-6"; }else  
								if($colSize == 3){ echo "col-md-4"; }else 
								if($colSize == 4){ echo "col-md-3"; }?>" style="margin-bottom:40px;" >
						<?php the_sub_field('content'); ?>
					</div><!-- .col -->
					<?php endwhile; ?>
				</div><!-- .row -->
				<?php endif; ?>
			</div><!-- .text-wrapper -->
		</div><!-- .col -->
	</div><!-- .row -->
	<div class="row" >
		<div class="col-12" >
			<div class="text-wrapper animate slow" >
				<?php the_sub_field('closing_content'); ?>
			</div><!-- .text-wrapper -->
		</div><!-- .col -->
	</div><!-- .row -->
</div><!-- .container -->