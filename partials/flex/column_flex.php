<div class="container column_flex" >
	<div class="row" >
		<div class="col" >
			<div class="text-wrapper animate slow" >
				<?php the_sub_field('content'); ?>
				<?php if(have_rows('columns')): ?>
				<div class="row" >
					<?php while(have_rows('columns')): the_row(); ?>
					<div class="col" >
						<?php the_sub_field('content'); ?>
					</div><!-- .col -->
					<?php endwhile; ?>
				</div><!-- .row -->
				<?php endif; ?>
			</div><!-- .text-wrapper -->
		</div><!-- .col -->
	</div><!-- .row -->
</div><!-- .container -->