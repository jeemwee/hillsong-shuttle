<?php

get_header(); ?>

	<section id="primary" class="content-area col-sm-12">
		<main id="main" class="site-main" role="main">
			<div class="container">

				<div class="col-sm-12">
				
					<?php
					while ( have_posts() ) : the_post();
						the_title();

					endwhile; // End of the loop.
					?>
				</div>
			</div>
		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
