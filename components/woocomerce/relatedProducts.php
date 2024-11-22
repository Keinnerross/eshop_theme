<?php function RelatedProducts()
{
?>
    <div class="w-full flex flex-col items-center py-10">
        <ul class="w-[95vw] md:w-full grid grid-cols-2 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-4 xl:grid-cols-4 gap-4">
            <?php
            global $product;

            if ($product && $product instanceof WC_Product) {
                $related_ids = wc_get_related_products($product->get_id(), 5);

                if (!empty($related_ids)) {
                    // Consulta para obtener los productos relacionados
                    $args = array(
                        'post_type' => 'product',
                        'post__in' => $related_ids,
                        'posts_per_page' => 4,
                    );

                    $related_query = new WP_Query($args);

                    if ($related_query->have_posts()) :
                        while ($related_query->have_posts()) : $related_query->the_post();

                            // Mostrar el producto
                            wc_get_template_part('content', 'product');

                        endwhile;
                        wp_reset_postdata();
                    else :
                        echo '<li>No hay productos relacionados.</li>';
                    endif;
                } else {
                    echo '<li>No hay productos relacionados disponibles.</li>';
                }
            } else {
                echo '<li>Producto no definido.</li>';
            }
            ?>
        </ul>
    </div>


<?php
}
