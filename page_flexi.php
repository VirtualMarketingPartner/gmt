<?php 
/* Template Name: Flexible */ 
?>


<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="content" id="flexi">
	
	<?php get_template_part('/partials/hero'); ?>
	
	<?php if(have_rows('flex')): while(have_rows('flex')): the_row();
	$bgImage = get_sub_field('bg_image');
	$opacity = get_sub_field('bg_overlay');
	?>
	<section class="container-fluid <?php the_sub_field('bg'); ?> <?php if( get_sub_field('bg') != 'bg' ){ echo 'angle'; } ?>" style="background-image:url(<?php if( get_sub_field('bg') == 'bg'){ echo $bgImage; } ?>);" >
		<?php if(get_sub_field('bg') =='bg'): ?>
		<div class="overlay" style="background-color:rgba(0,0,0, .<?php echo $opacity; ?>);" ></div>
		<?php endif; ?>
		
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
<?php endwhile; endif; ?>
<?php get_footer(); 
