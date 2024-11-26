<?php
get_header();
?>

<?php require_once get_stylesheet_directory() . '/components/sidebarShop/priceFilter.php'; ?>
<?php require_once get_stylesheet_directory() . '/components/sidebarShop/categoriesBar.php'; ?>
<?php require_once get_stylesheet_directory() . '/components/sidebarShop/sidebarShopMobile.php'; ?>
<?php require_once get_stylesheet_directory() . '/components/frontpage/categoriesFestivities.php'; ?>



<div id="primary" class="w-screen min-h-[100vh] flex justify-center md:mt-[128px] mt-[80px] ">

	<main class=" w-[90vw] max-w-[1650px] flex pt-4">

		<div class="hidden md:block w-[23%] rounded-lg relative">

			<div class="content-bar bg-white text-text top-[110px] z-[9999] px-4 py-6 rounded-lg flex flex-col gap-2 ">
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
							echo 'Products in this category: ' . $total_results;
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

		<div class="content-shop md:px-4 md:w-[72%] w-full">
			<div class="rounded-lg bg-white p-4 mb-4 md:hidden">
				<div class="flex justify-between py-2">


					<p class="text-lg font-light"><?php
						if (is_product_category()) {
							$term = get_queried_object();
							echo $term->name;
						}
						?></p>
					<p class="text-gray-400 text-sm"> <?php
						if (is_product_category() || is_shop()) {
							global $wp_query;
							$total_results = $wp_query->found_posts;
							echo 'results(' . $total_results . ')';
						}
						?></p>
				</div>

				<div x-data="{
					isOpen: false, 
					isFilter: false, 
					isSearch: false, 
					isOrder: false
				}">
					<div class="filtersMobile w-full  flex justify-between px-2">
						<div x-on:click="isOpen= !isOpen; isFilter= !isFilter" id="filterBtn" class="flex gap-2 items-center">
							<i class="fa fa-filter" aria-hidden="true"></i>

							<p>Filter</p>
						</div>
						<div x-on:click="isSearch = !isSearch" id="isSearch" class="shopSideMobileBtn flex gap-2 items-center">
							<i class="fa fa-search" aria-hidden="true"></i>
							<p>Search</p>
						</div>
						<div x-on:click="isOpen= !isOpen; isOrder= !isOrder" id="isOrder" class="shopSideMobileBtn flex gap-2 items-center">
							<i class="fa fa-sort" aria-hidden="true"></i>

							<p>Order</p>
						</div>
					</div>


					<?php sidebarShopMobile(); ?>
					<div x-show="isSearch" class="pb-4">
						<?php echo do_shortcode('[fibosearch]'); ?>
					</div>


				</div>
			</div>

			<?php
			if (woocommerce_product_loop()) {

			?>
				<div class="hidden md:flex w-full justify-between items-center py-4 px-4 bg-white rounded-lg mb-4 shadow-sm">
					<?php do_action('woocommerce_before_shop_loop'); ?>
				</div>

				<ul class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-4 gap-4 pb-8">
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
			} else {
				// Si no se encuentran productos, mostrar mensaje
				?>
					<div class="p-8 bg-white rounded-lg">
						<p class="text-xl text-text"><i class="fa fa-search text-base pr-2" aria-hidden="true"></i>Sorry, we didn't find any results.</p>

						<span class="text-sm text-gray-400">Perhaps your search was too specific, try searching with a more general term.</span>
					</div>

				<?php
			}
				?>
				</div>

	</main>

	<?php get_footer('shop'); ?>

</div>