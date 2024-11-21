    <?php function modalCategories()
    { ?>

        <div id="modalCategories" class="shadown-sm bg-white w-[260px] absolute top-[100%] hidden z-50 max-h-[80vh] shadow-lg">

            <div class="">
                <?php
                // Obtener categorías de productos
                $categories = get_terms(array(
                    'taxonomy'   => 'product_cat', // Taxonomía para las categorías de productos
                    'hide_empty' => false,         // Mostrar categorías vacías también
                ));

                // Verificar si hay categorías y mostrarlas
                if (!empty($categories) && !is_wp_error($categories)) {
                    echo '<ul class="product-categories flex flex-col ">';
                    foreach ($categories as $category) {
                        // Enlace a la categoría
                        echo '<li class="hover:bg-primary hover:text-white py-2 px-4">';
                        echo '<a class="flex items-center justify-between text-sm font-medium" href="' . esc_url(get_term_link($category)) . '">';
                        echo esc_html($category->name);
                        echo '<i class="fa fa-caret-right" aria-hidden="true"></i>';
                        echo '</a>';
                        echo '</li>';
                    }
                    echo '</ul>';
                } else {
                    echo 'No hay categorías disponibles.';
                }
                ?>
            </div>

        </div>

    <?php }
