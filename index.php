<?php


get_header(); ?>

<div id="primary" class="min-h-[80vh] flex justify-center   md:mt-[80px]">
		<main class="w-[80vw]">

		<?php
		if (have_posts()):

			get_template_part('loop');

		else:

			get_template_part('content', 'none');

		endif;
		?>

		</main>
	</div>

<?php
get_footer();
