<?php function FeaturedProducts()
{

    // Query para obtener productos destacados
    $args = array(
        'post_type' => 'product',
        'posts_per_page' => 10, // Número de productos a mostrar
        // 'meta_key' => '_featured', // Buscar productos destacados
        // 'meta_value' => 'yes', // Asegúrate de que sean productos destacados
        'post_status' => 'publish', // Solo productos publicados
    );

    $loop = new WP_Query($args);

?>




    <div class="w-full flex flex-col items-center py-10">
        <ul class="w-[95vw] md:w-[80vw] grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-5 gap-4">
            <?php

            if ($loop->have_posts()) :
                while ($loop->have_posts()) : $loop->the_post();

                    // Mostrar el producto
                    wc_get_template_part('content', 'product');

                endwhile;
                wp_reset_postdata();
            else :
                echo 'No hay productos destacados';
            endif;
            ?>
        </ul>
    </div>



<?php
}
