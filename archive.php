
<?php get_header(); ?>

<div style="margin-top:200px; display:block;" ></div>
<?php if(have_posts()): while(have_posts()): the_post(); ?>
<a href="<?php the_permalink(); ?>" >
<h1><?php the_title(); ?></h1></a>
<?php endwhile; else: ?>
<h1>Nothing to show</h1>
<?php endif; ?>
<?php get_footer(); 
