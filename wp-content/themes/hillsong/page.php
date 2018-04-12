<?php

get_header(); ?>

	<section id="primary" class="content-area col-sm-12">
		<main id="main" class="site-main" role="main">
<?php
	get_template_part( 'template-parts/get_your_ride', get_post_format() );
?>
			<div class="container">

				<div class="col-sm-12">

					<?php
					while ( have_posts() ) : the_post();


					endwhile; // End of the loop.
					?>
				</div>
			</div>
		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
