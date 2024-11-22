<?php
/* Template Name: Plantilla Personalizada Carrito */

get_header();  // Cargar el encabezado

if ( is_cart() ) {
    woocommerce_cart();  // Mostrar el carrito
}

get_footer();  // Cargar el pie de página
?>