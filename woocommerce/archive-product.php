<?php
get_header();
?>

<?php require_once get_stylesheet_directory() . '/components/sidebarShop/priceFilter.php'; ?>
<?php require_once get_stylesheet_directory() . '/components/sidebarShop/categoriesBar.php'; ?>
<?php require_once get_stylesheet_directory() . '/components/sidebarShop/sidebarShopMobile.php'; ?>



<div id="primary" class="w-screen min-h-[100vh] flex justify-center md:mt-[128px] mt-[50px] ">

	<main class=" w-[90vw] max-w-[1650px] flex pt-4">

		<div class="hidden md:block w-[23%] rounded-xl relative">

			<div class="content-bar bg-white text-text top-[110px] z-[9999] px-4 py-6 rounded-xl flex flex-col gap-4 ">
				<div class="headerBar">
					<h3 class="text-lg font-semibold">
						<?php
						if (is_product_category()) {
							$term = get_queried_object();
							echo $term->name;
						}
						?>
					</h3>
					<p class="text-sm  text-text-light">

						<?php
						if (is_product_category() || is_shop()) {
							global $wp_query;
							$total_results = $wp_query->found_posts;
							echo 'Total de productos: ' . $total_results;
						}
						?>

					</p>
				</div>


				<?php PriceFilter();	?>

				<?php echo do_shortcode('[fibosearch]'); ?>
				<div class="pt-4">
					<?php CategoriesBar();	?>

				</div>


			</div>
		</div>

		<div class="content-shop md:px-8 md:w-[72%] w-full">


			<?php
			if (woocommerce_product_loop()) {

			?>
				<div class="hidden md:flex w-full justify-between">
					<?php do_action('woocommerce_before_shop_loop'); ?>
				</div>
				<div x-data="{
				isOpen: false, 
				isFilter: false, 
				isSearch: false, 
				isOrder: false}">
					<div class="filtersMobile w-full md:hidden flex justify-between py-4">
						<div x-on:click="isOpen= !isOpen" class="shopSideMobileBtn flex gap-2 items-center">
							<i class="fa fa-filter" aria-hidden="true"></i>

							<p>Filter</p>
						</div>
						<div x-on:click="isOpen= !isOpen" class="shopSideMobileBtn flex gap-2 items-center">
							<i class="fa fa-search" aria-hidden="true"></i>
							<p>Search</p>
						</div>
						<div x-on:click="isOpen= !isOpen" class="shopSideMobileBtn flex gap-2 items-center">
							<i class="fa fa-sort" aria-hidden="true"></i>

							<p>Order</p>
						</div>
					</div>


					<?php sidebarShopMobile(); ?>


				</div>


				<ul class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-4 gap-4">
					<?php
					if (wc_get_loop_prop('total')) {
						while (have_posts()) {
							the_post();

							// Mostrar el producto
							do_action('woocommerce_shop_loop');
							wc_get_template_part('content', 'product');
						}
					}
					?>
				</ul>

				<div class="hidden md:flex">


					<?php
					do_action('woocommerce_after_shop_loop'); ?>
				</div>
			<?php
			} else {
				// Si no se encuentran productos, mostrar mensaje
				echo '<p>No se han encontrado productos para este rango de precios.</p>';
			}
			?>
		</div>


	</main>

	<?php get_footer('shop'); ?>

</div>