<?php
defined('ABSPATH') || exit;

global $product;

$columns           = apply_filters('woocommerce_product_thumbnails_columns', 4);
$post_thumbnail_id = $product->get_image_id();
$attachment_ids    = $product->get_gallery_image_ids();
$wrapper_classes   = apply_filters(
	'woocommerce_single_product_image_gallery_classes',
	array(
		'woocommerce-product-gallery',
		'woocommerce-product-gallery--' . ($post_thumbnail_id ? 'with-images' : 'without-images'),
		'woocommerce-product-gallery--columns-' . absint($columns),
		'images',
	)
);

$default_image_url = get_stylesheet_directory_uri() . '/assets/img/without_img.png'; // Imagen predeterminada
?>

<div class="<?php echo esc_attr(implode(' ', array_map('sanitize_html_class', $wrapper_classes))); ?>" data-columns="<?php echo esc_attr($columns); ?>" style="opacity: 0; transition: opacity .25s ease-in-out;">
	<div class="woocommerce-product-gallery__wrapper">
		<div class="main-image-container w-full  h-[22rem] md:w-[32rem] md:h-[32rem] overflow-hidden relative mx-auto groupborder-solid border-[1px] border-gray-300 rounded-xl">
			<?php if ($post_thumbnail_id) : ?>

				<!-- Imagen principal -->
				<?php $main_image_url = wp_get_attachment_url($post_thumbnail_id); ?>
				<img id="main-image" src="<?php echo esc_url($main_image_url); ?>" alt="Imagen del producto" class="main-image object-cover w-full h-full hover:scale-[1.2] transition-transform duration-1000-">

			<?php else : ?>

				<!-- Imagen predeterminada si no hay imagen del producto -->
				<img id="main-image" src="<?php echo esc_url($default_image_url); ?>" alt="Imagen del producto" class="main-image object-cover w-full h-full hover:scale-[1.2] transition-transform duration-1000-">

			<?php endif; ?>
			<!-- Capa de zoom -->
			<div class="zoom-overlay hidden absolute top-0 left-0 w-full h-full bg-white opacity-50"></div>
		</div>

		<div class="image-thumbnails flex space-x-2 mt-4 overflow-x-hidden py-4">
			<?php
			// Si el producto tiene imágenes adicionales
			if ($attachment_ids) :
				foreach ($attachment_ids as $attachment_id) :
					// Aquí usamos wp_get_attachment_image_src con el tamaño 'full'
					$image_url = wp_get_attachment_image_src($attachment_id, 'full')[0]; // Usar la imagen completa
					$thumbnail = wp_get_attachment_image_src($attachment_id, 'thumbnail')[0]; // Miniatura para las miniaturas
			?>
					<div class="thumbnail-container w-16 h-16 overflow-hidden rounded-md cursor-pointer">
						<img src="<?php echo esc_url($thumbnail); ?>" alt="Miniatura" class="thumbnail-image w-full h-full object-cover hover:scale-105 transform transition-transform duration-300" data-full-size="<?php echo esc_url($image_url); ?>"> <!-- Agregar data-full-size -->
					</div>
				<?php endforeach; ?>
			<?php endif; ?>
		</div>
	</div>
</div>