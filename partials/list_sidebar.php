
<h4><?php the_field('search','options'); ?></h4>
[The Sidebar will go here.]

<h4><?php the_field('categories','options'); ?></h4>
<ul class="categories">
<?php 
$categories = get_categories();
foreach($categories as $category): ?>
	<li>
		<a href="<?php get_category_link($category->term_id); ?>" >
			<?php echo $category->name ?>
		</a>
		
	</li>
<?php endforeach; ?>
</ul>