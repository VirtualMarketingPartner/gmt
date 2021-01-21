<div class="sidebar animate slow" >
	<div class="row" >
		<div class="col" >
			<h3><?php the_field('search','options'); ?></h3>
			<?php get_search_form(); ?>
		</div><!-- .col -->
	</div><!-- .row -->

	<div class="row" >
		<div class="col" >
			<h3><?php the_field('categories','options'); ?></h3>
			<ul class="categories">
			<?php 
			$categories = get_categories();
			foreach($categories as $category): ?>
				<li>
					<i class="fas fa-bookmark"></i>
					<a href="/category/<?php echo $category->slug; ?>" >
						<span class="text-left" ><?php echo $category->name; ?></span>
						<span class="text-right" ><?php echo $category->category_count; ?></span>
					</a>

				</li>
			<?php endforeach; ?>
			</ul>
		</div><!-- .col -->
	</div><!-- .row -->
</div><!-- sidebar -->