<?php 
/* The 404 Page */ 
?>

<?php get_header(); ?>
<div class="content" id="flexi">
	
	<?php if(have_rows('error_page','options')): while(have_rows('error_page','options')): the_row();
	$bgImage = get_sub_field('bg_image'); 
	?>
	<section class="container-fluid <?php the_sub_field('bg'); ?> <?php if( get_sub_field('bg') != 'bg' ){ echo 'angle'; } ?>" style="background-image:url(<?php if( get_sub_field('bg') == 'bg'){ echo $bgImage; } ?>);" >
		<?php if( get_row_layout() == 'full_flex'): ?>
		<?php get_template_part('/partials/flex/full_flex'); ?>
		<?php elseif( get_row_layout() == 'column_flex'): ?>
		<?php get_template_part('/partials/flex/column_flex'); ?>
		<?php elseif( get_row_layout() == 'cards_flex'): ?>
		<?php get_template_part('/partials/flex/cards_flex'); ?>
		<?php elseif( get_row_layout() == 'combo_flex'): ?>
		<?php get_template_part('/partials/flex/combo_flex'); ?>		
		<?php endif; ?>
	</section><!-- .container-fluid -->
	
	<?php endwhile; endif; ?>
	
</div><!-- #flexi -->
<?php get_footer(); 
