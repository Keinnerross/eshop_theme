<?php get_header(); ?>
<?php require_once get_stylesheet_directory() . '/components/frontpage/bannerMain.php' ?>
<?php require_once get_stylesheet_directory() . '/components/frontpage/sliderAux.php' ?>
<?php require_once get_stylesheet_directory() . '/components/frontpage/categoriesFestivities.php' ?>
<?php require_once get_stylesheet_directory() . '/components/frontpage/featuredProducts.php' ?>
<?php require_once get_stylesheet_directory() . '/components/frontpage/welcomeMessage.php' ?>

<div id="primary" class="min-h-[80vh] flex justify-center  w-screen " style="margin-top: 80px;">

	<main class="w-full flex items-center flex-col">
		<?php BannerMain() ?>
		<?php SliderAux() ?>
		<?php CategoriesFestivities() ?>
		<div class="pt-8">
			<h3>Recently added products   <i class="fa fa-arrow-right text-lg" aria-hidden="true"></i></h3>
		<?php FeaturedProducts() ?>

		</div>
		<?php WelcomeMessage() ?>

	</main>
</div>

<?php

get_footer();
