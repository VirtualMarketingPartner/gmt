<?php if(have_rows('service_plans','options')): while(have_rows('service_plans','options')): the_row(); ?>
<div class="row" >
	<div class="table-responsive offset-md-1 col-md-10 services-table animate slow" >
		<table class="table">
			<thead>
				<tr>
					<?php if(have_rows('th_options')): while(have_rows('th_options')): the_row(); ?>
						<th scope="col"></th>
						<th scope="col"><?php the_sub_field('option_1'); ?></th>
						<th scope="col"><?php the_sub_field('option_2'); ?></th>
						<th scope="col"><?php the_sub_field('option_1'); ?></th>
					<?php endwhile; endif; ?>
				</tr>
			</thead>
			<tbody>
				<?php if(have_rows('table_content')): while(have_rows('table_content')): the_row(); 
				$options = get_sub_field('options') 
				?>
					<tr>
					<td scope="row"><?php the_sub_field('objective'); ?></td>
						<td>
							<?php if($options && in_array('opt3', $options)) {
								echo '<i class="fas fa-check-circle"></i>';
							}?>
						</td>
						<td>
							<?php if($options && in_array('opt2', $options)) {
								echo '<i class="fas fa-check-circle"></i>';
							}?>
						</td>
						<td>
							<?php if($options && in_array('opt1', $options)) {
								echo '<i class="fas fa-check-circle"></i>';
							}?>
						</td>
					</tr>
				<?php endwhile; endif; ?>
			</tbody>
		</table><!-- .table -->
	</div><!-- .offset-md-1 .col-md-10 .services-table -->
</div><!-- .row -->

<div class="row" >
	<div class="col-12 offset-md-1 col-md-10" >
		<div class="row" >
			<div class="col-12 col-md-9" >
				<?php the_sub_field('closing'); ?>
			</div><!-- .col -->

			<div class="col-12 col-md-3" >
			<?php $link = get_sub_field('button');
			$link_url = $link['url'];
			$link_title = $link['title'];
			$link_target = $link['target'] ? $link['target'] : '_self'; ?>
				<a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" class="button" ><?php echo esc_html( $link_title ); ?></a>
			</div>
		</div><!-- .row -->
	</div><!-- .col -->
</div><!-- .row -->
<?php endwhile; endif; ?>