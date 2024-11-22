<?php

/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined('ABSPATH') || exit;

global $product;

// Asegúrate de que el producto esté visible
if (empty($product) || !$product->is_visible()) {
	return;
}

$regularPrice = $product->get_regular_price();
$salePrice = $product->get_sale_price();
$titleProduct = $product->get_title();

// Obtener el ID de la imagen destacada del producto
$image_id = $product->get_image_id();

// Verificar si el producto tiene una imagen destacada
if ($image_id) {
	// Obtener la URL de la imagen
	$image_url = wp_get_attachment_image_url($image_id, 'full');
} else {
	// Si no hay imagen destacada, asignar una imagen por defecto
	$image_url = get_stylesheet_directory_uri() . '/assets/img/without_img.png';
}

?>
<li class="group md:p-4 border border-transparent w-full md:pb-[75px] pb-[68px] hover:border-gray-300 relative rounded-xl bg-white <?php wc_product_class('', $product); ?>">
	<div class="w-full flex flex-col gap-1">
		<!-- Aquí se muestra la imagen del producto con clases personalizadas -->
		<a href="<?php echo esc_url(get_permalink()); ?>" class="product-link">

			<div class="overflow-hidden rounded-lg  aspect-square">
				<img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($titleProduct); ?>" class="custom-product-image w-full h-full object-cover " />
			</div>

		</a>
		<div id="textInfoContainer" class="flex flex-col px-2">


			<div class="font-semibold text-left w-full min-h-[30px] max-h-[80px] overflow-hidden">
				<p class="text-sm leading-5 text-text line-clamp-3 "><?php echo $titleProduct; ?></p>
			</div>
			<div class="">
				<!-- Con descuento -->
				<?php if ($salePrice && $salePrice < $regularPrice) {
				?>
					<div class="full">
						<div class="w-full md:gap-1 flex flex-col justify-between ">
							<div class="w-full gap-4 flex items-center">
								<?php
								echo '<span class="sale-price font-semibold text-xl">' . wc_price($salePrice) . '</span>';
								?>
								<div class="sale-percent font-medium text-xs text-white bg-red-600 flex items-center justify-start rounded-lg px-2 py-[3px]">
									-<?php calculatePercent($regularPrice, $salePrice) ?>


								</div>
							</div>
							<?php
							echo '<span class="regular-price text-text-light line-through text-sm font-medium">' .  wc_price($regularPrice)  . '</span>';
							?>
						</div> <?php
							} else {
								?>
						<div class="flex justify-between">
							<?php echo '<span class="regular-price font-semibold text-xl">' .  wc_price($regularPrice)  . '</span>';
							?>
							<div clases="buttonAddCart hidden md:block">
								<?php do_action('woocommerce_after_shop_loop_item'); ?>
							</div>
						</div>
					<?php
							}
					?>

					</div>

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
			</div>
			<!-- Contenedor que solo se mostrará al hacer hover -->
			<div class="absolute bottom-[10px]  right-1/2 translate-x-1/2 w-full flex justify-center md:opacity-0 md:group-hover:opacity-100 ">
				<a href="<?php echo esc_url(get_permalink()); ?>" class="w-full px-2">
					<div class="w-full bg-text text-white md:px-4  py-2 md:py-2 px-4 md:text-sm text-xs rounded-full text-center">
						Ver Producto

					</div>
				</a>

			</div>
</li>