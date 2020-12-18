
<h4><?php the_field('search','options'); ?></h4>
[The Sidebar will go here.]

<h4><?php the_field('categories','options'); ?></h4>

<?php 
$args = array('orderby' => 'name', 'order' => 'ASC', 'fields' => 'all');
$terms = wp_get_post_terms( $post_id, $taxonomy, $args ); 
?>