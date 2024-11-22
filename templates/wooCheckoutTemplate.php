<?php
/* Template Name: Plantilla Personalizada Checkout */

get_header();  // Cargar el encabezado

if ( is_checkout() ) {
    woocommerce_checkout();  // Mostrar el checkout de WooCommerce
}

get_footer();  // Cargar el pie de página
?>