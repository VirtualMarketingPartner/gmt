	<div id="header" >
		<div class="container-fluid" >
			<div class="container" >
				<div class="row" >
					<nav class="navbar navbar-expand-md" >
						<a class="navbar-brand" title="<?php the_field('company','options'); ?>" href="<?php bloginfo('url'); ?>" id="site_id" style="background-image:url(<?php the_field('logo', 'options'); ?>);" ></a>
						<button title="Toggle Navigation Menu" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header_nav" aria-controls="#header_nav" aria-expanded="false" aria-label="Toggle Navigation" >
							<i class="fas fa-bars"></i>
						</button>
						
						<div class="collapse navbar-collapse" id="header_nav" >
							<div class="navbar-nav" >
								<?php wp_nav_menu( array( 'theme_location' => 'main_menu' ) ); ?>
							</div><!-- .navbar-nav -->
						</div><!-- .navbar-collapse -->
					</nav>
					
				</div><!-- .row -->
			</div><!-- .container -->
		</div><!-- .container-fluid -->
	</div><!-- #header -->