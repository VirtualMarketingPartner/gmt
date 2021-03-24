<div class="container cards_flex" >
	<div class="row" >
		<div class="col-12" >
			<div class="text-wrapper animate slow" >
				<?php the_sub_field('content'); ?>
			</div><!-- .text-wrapper -->
		</div><!-- .col -->
	</div><!-- .row -->
	
	<div class="row" >
		<div class="col-12" >
			<div class="text-wrapper animate slow" >
				<?php if( get_sub_field('icon_layout') == 'left' ): ?>
					<?php if(have_rows('cards')): ?>
					<div class="row card-row" >
						<?php while(have_rows('cards')): the_row(); ?>
						<div class="col-12 col-md-4" >
							<div class="card left narrow animate" >
								<div class="card-body vcenter" >
									<div class="image-wrapper icon" style="background-image:url(<?php the_sub_field('icon'); ?>);"></div> 
									<div class="text-left" >
										<?php the_sub_field('content'); ?>
									</div><!-- .text-left -->
								</div><!-- .card-body -->
							</div><!-- .card -->
						</div><!-- .col -->
						<?php endwhile; ?>
					</div><!-- .row -->
					<?php endif; ?>
				
				<?php elseif( get_sub_field('icon_layout') == 'bottom' ): ?>
					<?php if(have_rows('cards')): ?>
					<div class="row card-row" >
						<?php while(have_rows('cards')): the_row(); ?>
						<div class="col-12 col-md-4" >
							<div class="card bottom animate" >
								<div class="card-body text-left" >
									<div class="image-wrapper icon" style="background-image:url(<?php the_sub_field('icon'); ?>);"></div> 
									<h3><?php the_sub_field('title'); ?></h3>
									<?php the_sub_field('content'); ?>
								</div><!-- .card-body -->
							</div><!-- .card -->
						</div><!-- .col -->
						<?php endwhile; ?>
					</div><!-- .row -->
					<?php endif; ?>
				
				<?php elseif( get_sub_field('icon_layout') == 'full' ): ?>
					<?php if(have_rows('cards')): ?>
					<div class="row card-row" >
						<?php while(have_rows('cards')): the_row(); ?>
						<div class="col-12 col-md-4" >
							<div class="card animate" >
								<div class="image-wrapper" style="background-image:url(<?php the_sub_field('icon'); ?>); height:200px;" ></div>
								<div class="card-body text-left" >
									<h3><?php the_sub_field('title'); ?></h3>
									<?php the_sub_field('content'); ?>
								</div><!-- .card-body -->
							</div><!-- .card -->
						</div><!-- .col -->
						<?php endwhile; ?>
					</div><!-- .row -->
					<?php endif; ?>
				
				<?php elseif( get_sub_field('icon_layout') == 'none' ): ?>
					<?php if(have_rows('cards')): ?>
					<div class="row card-row" >
						<?php while(have_rows('cards')): the_row(); ?>
						<div class="col-12 col-md-4" >
							<div class="card bottom animate" >
								<div class="card-body  text-left" >
									<h3><?php the_sub_field('title'); ?></h3>
									<?php the_sub_field('content'); ?>
								</div><!-- .card-body -->
							</div><!-- .card -->
						</div><!-- .col -->
						<?php endwhile; ?>
					</div><!-- .row -->
					<?php endif; ?>
				
				<?php endif; ?>
			</div><!-- .text-wrapper -->
		</div><!-- .col -->
	</div><!-- .row -->
	<br>
	<div class="row" >
		<div class="col-12" >
			<div class="text-wrapper animate slow" >
				<?php the_sub_field('closing_content'); ?>
			</div><!-- .text-wrapper -->
		</div><!-- .col -->
	</div><!-- .row -->
</div><!-- .container -->