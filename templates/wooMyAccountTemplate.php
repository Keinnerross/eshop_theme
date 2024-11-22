<?php
/* Template Name: Plantilla Personalizada Carrito */

get_header();  // Cargar el encabezado

// Asegúrate de que WooCommerce esté activo
if ( class_exists( 'WooCommerce' ) ) {
    // Verifica si estamos en la página del carrito
    if ( is_cart() ) {
        // Aquí cargamos la plantilla del carrito de WooCommerce
        wc_get_template( 'cart/cart.php' );
    } else {
        echo 'No estás en la página del carrito.';
    }
} else {
    echo 'WooCommerce no está activo. Asegúrate de que WooCommerce esté instalado y activado.';
}

get_footer();  // Cargar el pie de página
?>
