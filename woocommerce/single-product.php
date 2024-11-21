<?php



if (!defined('ABSPATH')) {
	exit;
}

global $product;



get_header('shop'); ?>

<?php require_once get_stylesheet_directory() . '/components/productsParts/ratingComments.php'; ?>

<div class="flex justify-center w-full py-2 font-medium text-sm boder-solid border-y-[1px] border-gray-300" style="margin-top: 128px;">
	<div class="w-[90vw]">
		<?php
		woocommerce_breadcrumb();
		?>
	</div>

</div>
<div class="w-screen flex flex-col items-center ">


	<main class="w-[90vw] pt-[50px]">

		<div class="containerSticky md:flex gap-8">
			<div class="w-full md:w-[72%]">
			<?php wc_print_notices(); ?>

				<div id="product-container">
				<?php wc_print_notices(); ?>

					<?php while (have_posts()) : the_post(); ?>
						<section class="product-section md:flex w-full gap-10">

							<!-- Imagen del producto -->
							<div id="product-image" class="md:flex">
								<?php woocommerce_show_product_images() ?>
							</div>

							<div id="product-description ">

								<div class="flex flex-col pt-4 md:pt-0">

									<!-- Get Category -->
									<p class="pb-2 uppercase font-semibold">
										<?php echo wc_get_product_category_list($product->get_id()); ?>
									</p>

									<!-- Get title -->
									<h3 class="font-bold text-xl"> <?php the_title() ?></h3>

									<!-- Get sku or id  -->
									<p class="font-semibold py-2 text-sm">
										<?php if ($product->get_sku()) : ?>
											Item SKU: <?php echo $product->get_sku(); ?>
										<?php else : ?>
											Item No. <?php echo $product->get_id(); ?>
										<?php endif; ?>
									</p>


									<!-- Obtener los precios -->
									<?php
									$regularPrice = $product->get_regular_price();  // Regular Price
									$salePrice = $product->get_sale_price();        // Offert Price
									?>

									<div id="prices-product" class="flex gap-4">
										<?php if ($salePrice && $salePrice < $regularPrice) : ?>
											<div>
												<p class="regular-price text-sm text-gray-500 line-through"><?php echo wc_price($regularPrice); ?></p>
												<p class="sale-price font-extrabold text-3xl"><?php echo wc_price($salePrice); ?></p>

											</div>

										<?php else: ?>
											<p class="font-extrabold text-2xl"><?php echo wc_price($regularPrice); ?></p>
										<?php endif; ?>
									</div>

									<!-- Obtener Raiting -->
									<div class="flex items-center gap-2 py-4 font-semibold  text-gray-500">
										<div class="stars">
											<?php
											$average_rating = $product->get_average_rating(); // Obtiene la calificación promedio
											$max_rating = 5; // Calificación máxima posible

											if ($average_rating > 0) {
												echo '<div class="flex items-center text-sm">'; // Usamos flex para alinear las estrellas horizontalmente

												for ($i = 1; $i <= $max_rating; $i++) {
													$full_star = ($average_rating >= $i); // Estrella llena
													$half_star = ($average_rating >= $i - 0.5 && $average_rating < $i); // Media estrella
													$empty_star = ($average_rating < $i); // Estrella vacía

													if ($full_star) {
														echo '<i class="fas fa-star text-yellow-400"></i>'; // Estrella llena
													} elseif ($half_star) {
														echo '<i class="fas fa-star-half-alt text-yellow-400"></i>'; // Media estrella
													} elseif ($empty_star) {
														echo '<i class="far fa-star text-gray-400"></i>'; // Estrella vacía
													}
												}

												echo '</div>';
											}
											?>
										</div>


										<!-- // Muestra el valor numérico de la calificación con la palabra "clasificación" -->
										<span class="text-sm"><?php echo $average_rating . ' classification'; ?></span>

										<a href="#comments" class="flex items-center gap-1 scroll-smooth text-sm pl-2 text-gray-500">
											<i class="fa fa-pencil"></i>
											<p class="underline">write a review</p>
										</a>

										<?php


										?>

									</div>

									<!-- is available? -->
									<?php if ($product->is_in_stock()) : ?>
										<div class="flex gap-2 items-center text-sm font-semibold">
											<p>Availability:</p>
											<div class="flex items-center gap-1 text-green-700">
												<span>in stock</span>
												<i class="fa fa-check " aria-hidden="true"></i>
											</div>

										</div>
									<?php else : ?>
										<p class="text-sm font-semibold text-red-700">Agotado</p>
									<?php endif; ?>


								</div>

								<!-- Descripción corta del producto -->
								<div class="product-short-description">
									<h4 class="font-semibold text-xl pt-8 pb-2">Description</h4>
									<p class="text-sm font-medium text-gray-500">
										<?php if ($product->get_short_description()) {
											echo $product->get_short_description();
										} else {
											echo "This product does not have a description.";
										}
										?>
									</p>
								</div>
							</div>

						</section>

					<?php endwhile; // Fin del loop 
					?>
				</div>

				<div class="product-short-description py-4 min-h-[200px] !text-sm !font-medium pb-16 text-gray-500">
					<h2 class="py-4 font-semibold">Product details</h2>
					<p id="descriptionContainerProduct" class="text-justify w-full ">
						<?php
						if ($product->get_description()) {
							echo $product->get_description();
						} else {
							echo "este producto no tiene una descripción todavía";
						}
						?>
					</p>

				</div>

				<div id="related_products" class="w-full">
					<?php
					if (is_product()) :
						woocommerce_related_products(array(
							'posts_per_page' => 4, // Número de productos relacionados
							'columns' => 4,        // Número de columnas para mostrar
						));
					endif;
					?>
				</div>

				<!-- //Comments -->


				<div class="pt-4">
					<div class="flex gap-4 items-center text-	">
						<h4 class="text-md font-semibold py-2">Ratings and reviews</h4>
						<i class="fa fa-arrow-right" aria-hidden="true"></i>
					</div>
					<?php

					global $product;
					RatingComments($product); ?>
				</div>



			</div>


			<div class="add-to-cart hidden md:block w-[24%] relative">
				<div id="stickyBar" class="w-[350px] shadow	 overflow-hidden rounded-lg border-solid border-gray-200 border-[1px] p-6 bg-white fixed" style="top: 220px !important;">
					<div class="pb-4">

						<?php if ($product->is_purchasable() && $product->is_in_stock()) : ?>
							<?php woocommerce_template_single_add_to_cart(); ?>
						<?php endif; ?>
					</div>

					<span class="text-green-700 font-semibold italic mt-6">Fastest delivery</span>
					<div class="flex flex-col gap-2">
						<span class="font-semibold ">Our main logistics partners </span>

						<div class="flex gap-4 w-full">
							<div class="w-20 h-14 bg-[#4E148C] rounded-xl relative bg-contain bg-no-repeat bg-center" style="background-image : url('https://logocreator.io/wp-content/uploads/2023/11/fedex-logo-free-download-free-vector-1-1024x1024.jpg')">

							</div>
							<div class="w-20 h-14 bg-[#014782] rounded-xl relative bg-contain bg-no-repeat  bg-[180%] bg-center" style="background-image : url('https://wallpapers.com/images/hd/all-blue-usps-thjfdngo04ebztdt.jpg')">

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


	</main>
	<div class="add-cart-mobile md:hidden fixed w-screen h-[50px] z-50 px-4 py-2 bg-white" style="bottom: 0">
		<div class="flex flex-col items-center">


			<div class="justify-center flex flex-col items-center w-screen">

				<?php if ($product->is_purchasable() && $product->is_in_stock()) : ?>
					<?php woocommerce_template_single_add_to_cart(); ?>
				<?php endif; ?>
			</div>

			<div>
				<button id="addCartMobile" class="cursor-pointer w-full hidden">Add to cart</button>
			</div>
		</div>
	</div>


	<?php get_footer('shop'); ?>


</div> <!-- Cierre de div #primary -->