<?php function CategoriesBar()
{

?>
    <div class="categories ">
        <h3 class="text-lg font-semibold">More categories</h3>
        <?php
        // Verifica si estamos en una categoría de producto o en la tienda
        if (is_product_category() || is_shop()) {
            $args = array(
                'taxonomy'   => 'product_cat',
                'orderby'    => 'name', // Ordena las categorías por nombre
                'hide_empty' => true,   // Oculta las categorías vacías
            );

            $product_categories = get_terms($args);

            if (!empty($product_categories) && !is_wp_error($product_categories)) {
                echo '<div class="product-categories flex flex-col">';
                foreach ($product_categories as $category) {
                    $category_link = get_term_link($category);
                    echo '<a href="' . esc_url($category_link) . '" class="product-category text-sm flex justify-between p-2 hover:bg-slate-200 rounded-xl items-center">' . esc_html($category->name) . ' <i class="fa fa-caret-right" aria-hidden="true"></i></a>';
                }
                echo '</div>';
            }
        }
        ?>

    </div>

<?php
}
