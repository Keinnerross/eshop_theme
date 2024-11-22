<?php

if (!defined('ABSPATH')) {
    exit;
}

if (!$notices) {
    return;
}

// Obtener los productos del carrito
$cart = WC()->cart->get_cart();

foreach ($notices as $notice) : ?>

    <?php 
    $davidStar = get_stylesheet_directory_uri() . "/assets/done.png"; 
    
    $product_title = 'Product not found'; // Valor por defecto
    
    // Intentamos obtener el producto desde el carrito si el ID no está en el aviso
    if (empty($notice['data']['product_id'])) {
        foreach ($cart as $cart_item_key => $cart_item) {
            $product_id = $cart_item['product_id'];
            $product = wc_get_product($product_id);

            if ($product) {
                $product_title = $product->get_title();
                break; // Salimos del bucle si encontramos un producto
            }
        }
    } else {
        // Si el product_id está en los datos del aviso, usamos ese ID
        $product_id = $notice['data']['product_id'];
        $product = wc_get_product($product_id);

        if ($product) {
            $product_title = $product->get_title();
        }
    }
    ?>

    <div id="success-modal" class="fixed z-[99999] top-0 left-0 w-screen h-screen bg-black bg-opacity-50 flex justify-center items-center" onclick="closeModal(event)">
        <div class="bg-white rounded-2xl p-6 w-[500px] flex flex-col justify-center gap-4 items-center relative" <?php echo wc_get_notice_data_attr($notice); ?> role="alert">
            
            <!-- Icono -->
            <img class="w-12 h-12" src="<?php echo $davidStar; ?>" alt="Success Icon" />

            <!-- Mensaje -->
            <p class="text-lg font-bold text-center text-text">Your product has been added to the cart successfully!</p>

            <!-- Título del producto -->
            <p class="text-base text-gray-600 italic text-center"><?php echo esc_html($product_title); ?></p>

            <!-- Botones -->
            <div class="flex gap-4 mt-4">
                <a href="#" id="closeSuccess" class="border border-gray-300 bg-gray-100  hover:bg-gray-200 px-4 py-2 rounded transition">
                    <span class="text-text font-medium">Continue Shopping</span> 
                </a>
                <a href="<?php echo wc_get_cart_url(); ?>" class="bg-blue-800 px-4 py-2 rounded hover:bg-blue-700 transition">
                    <span class="text-white">View Cart</span> 
                </a>
            </div>

        </div>
    </div>

<?php endforeach; ?>
