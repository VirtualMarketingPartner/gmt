<div class="container column_flex" >
	<div class="row" >
		<div class="col" >
			<div class="text-wrapper animate slow" >
				<?php the_sub_field('content'); ?>
				<?php 
					$count = count(get_sub_field('columns')); 
					if(have_rows('columns')): ?>
				<div class="row" >
					<?php while(have_rows('columns')): the_row(); ?>
					<div class="col <?php 
								if($count %6 == 0){ echo "col-md-4"; }else  
								if($count %5 == 0){ echo "col-md-4"; }else
								if($count %4 == 0){ echo "col-md-3"; }else
								if($count %3 == 0){ echo "col-md-4"; }else
								if($count %2 == 0){ echo "col-md-6"; }?>" >
						<?php the_sub_field('content'); ?>
					</div><!-- .col -->
					<?php endwhile; ?>
				</div><!-- .row -->
				<?php endif; ?>
			</div><!-- .text-wrapper -->
		</div><!-- .col -->
	</div><!-- .row -->
</div><!-- .container -->