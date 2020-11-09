<ul class="socials" >
	<?php if( get_field('facebook','options') ): ?>
	<li>
		<a href="<?php the_field('facebook', 'options'); ?>" target="_blank">
			<i class="fab fa-facebook-f"></i>
		</a>
	</li>
	<?php endif; ?>
	<?php if( get_field('twitter','options') ): ?>
	<li>
		<a href="<?php the_field('twitter', 'options'); ?>" target="_blank">
			<i class="fab fa-twitter"></i>
		</a>
	</li>
	<?php endif; ?>
	<?php if( get_field('linkedin','options') ): ?>
	<li>
		<a href="<?php the_field('linkedin', 'options'); ?>" target="_blank">
			<i class="fab fa-linkedin-in"></i>
		</a>
	</li>
	<?php endif; ?>
	<?php if( get_field('instagram','options') ): ?>
	<li>
		<a href="<?php the_field('instagram', 'options'); ?>" target="_blank">
			<i class="fab fa-instagram"></i>
		</a>
	</li>
	<?php endif; ?>
	<?php if( get_field('youtube','options') ): ?>
	<li>
		<a href="<?php the_field('youtube', 'options'); ?>" target="_blank">
			<i class="fab fa-youtube"></i>
		</a>
	</li>
	<?php endif; ?>
	<?php if( get_field('vimeo','options') ): ?>
	<li>
		<a href="<?php the_field('vimeo', 'options'); ?>" target="_blank">
			<i class="fab fa-vimeo-v"></i>
		</a>
	</li>
	<?php endif; ?>
	<?php if( get_field('snapchat','options') ): ?>
	<li>
		<a href="<?php the_field('snapchat', 'options'); ?>" target="_blank">
			<i class="fab fa-snapchat-ghost"></i>
		</a>
	</li>
	<?php endif; ?>
</ul>