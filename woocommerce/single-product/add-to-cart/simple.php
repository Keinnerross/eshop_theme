<?php

/**
 * Simple product add to cart
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/add-to-cart/simple.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.0.1
 */

defined('ABSPATH') || exit;

global $product;

if (! $product->is_purchasable()) {
	return;
}



$regularPrice = $product->get_regular_price();  // Regular Price
$salePrice = $product->get_sale_price();        // Offert Price
?>
<!-- Obtener los precios -->
<div id="prices-product" class=" text-2xl font-bold hidden md:flex">
	<?php if ($salePrice && $salePrice < $regularPrice) : ?>
		<p class=""><?php echo wc_price($salePrice); ?></p>
	<?php else: ?>
		<p class=""><?php echo wc_price($regularPrice); ?></p>
	<?php endif; ?>
</div>


<span class="font-bold text-green-700 text-sm md:block hidden">place your order!</span>

<?php

if ($product->is_in_stock()) : ?>


	<form class="cart" action="<?php echo esc_url(apply_filters('woocommerce_add_to_cart_form_action', $product->get_permalink())); ?>" method="post" enctype='multipart/form-data'>

		<?php do_action('woocommerce_before_add_to_cart_button'); ?>
		<div class="max-w-screen flex justify-between md:block gap-2 ">


			<div class="flex border-[1px] border-solid border-l-gray-700 p-2 rounded-lg mt-4 mb-4" style="width: 120px;">
				<span class="btnRestQuantity cursor-pointer"><i class="fa fa-minus" aria-hidden="true"></i></span>
				<?php

				do_action('woocommerce_before_add_to_cart_quantity');

				woocommerce_quantity_input(
					array(
						'min_value'   => apply_filters('woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product),
						'max_value'   => apply_filters('woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product),
						'input_value' => isset($_POST['quantity']) ? wc_stock_amount(wp_unslash($_POST['quantity'])) : $product->get_min_purchase_quantity(), // WPCS: CSRF ok, input var ok.
					)
				);

				do_action('woocommerce_after_add_to_cart_quantity');
				?>
				<span class="btnPlusQuantity cursor-pointer"><i class="fa fa-plus" aria-hidden="true"></i></span>

			</div>

			<!-- Few Stock -->
			<div class="pt-4">

				<span class="text-sm text-red-600 font-semibold">
					<?php
					if ($product->managing_stock()) { // Si el producto está gestionando el stock
						$stock_quantity = $product->get_stock_quantity(); // Obtén la cantidad de stock

						if ($stock_quantity < 10 && $stock_quantity > 0) { // Si el stock es menor a 10
							echo 'Only ' . $stock_quantity . ' items left in stock.';
						}
					} else {
						echo 'Este producto no tiene stock gestionado.';
					}
					?>

				</span>
				<button type="submit" name="add-to-cart" value="<?php echo esc_attr($product->get_id()); ?>" class="mt-4 single_add_to_cart_button button alt<?php echo esc_attr(wc_wp_theme_get_element_class_name('button') ? ' ' . wc_wp_theme_get_element_class_name('button') : ''); ?> w-full" style="border-radius: 7px"><?php echo esc_html($product->single_add_to_cart_text()); ?></button>
			</div>

		</div>

		<?php do_action('woocommerce_after_add_to_cart_button'); ?>
	</form>




	<?php do_action('woocommerce_after_add_to_cart_form'); ?>

<?php endif; ?>