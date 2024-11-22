<?php function modalCategoriesMobile()
{
?>

    <div id="modalCategoriesMobile" class="fixed hidden top-0 left-0 w-screen h-screen z-[999] bg-black bg-opacity-50">
        <div class="w-[70vw] h-screen bg-white border-t-4 border-blue-800">

            <div id="closeBtnCategories" class="px-4 absolute top-10 right-4 bg-blue-600">
                <span class="text-white">x<span>
            </div>

            <div class=" ">
                <div class="border-b border-gray-300 px-4">
                    <h4 class="text-[#262626] py-2 font-medium">Hi!</h4>
                </div>
                <div>
                    <div class="modalMenuNavContainer">
                        <ul class="flex flex-col gap-4 px-6 py-4 text-base text-[#262626]">
                            <?php
                            // Mostrar "Mis Pedidos"
                            $misPedidosKey = 'orders'; // Endpoint de pedidos
                            $urlMisPedidos = wc_get_account_endpoint_url($misPedidosKey);
                            $misPedidosName = __('Mis pedidos', 'text-domain'); // Cambia 'text-domain' por tu dominio de texto
                            echo ' <a href="' . esc_url($urlMisPedidos) . '"> <li class="flex gap-2 items-center"> <i class="fa fa-shopping-bag" aria-hidden="true"></i> ' . esc_html($misPedidosName) . '</li> </a>';
                            ?>

                            <?php
                            $custom_menu_items = apply_filters('woocommerce_account_menu_items', array());

                            $metodosPagoKey = 'edit-account';
                            $urlMetodosPago = wc_get_account_endpoint_url($metodosPagoKey);
                            $metodosPagoName = $custom_menu_items[$metodosPagoKey]; // 
                            echo ' <a href="' . esc_url($urlMetodosPago) . '"> <li class="flex gap-2 items-center"> <i class="far fa-user"></i> ' . esc_html($metodosPagoName) . '</li> </a>';
                            ?>

                            <?php
                            $metodosPagoKey = 'payment-methods';
                            $urlMetodosPago = wc_get_account_endpoint_url($metodosPagoKey);
                            $metodosPagoName = $custom_menu_items[$metodosPagoKey]; // 
                            echo '  <a href="' . esc_url($urlMetodosPago) . '"> <li class="flex gap-2 items-center"> <i class="far fa-credit-card"></i>' . esc_html($metodosPagoName) . '</li> </a>';
                            ?>






                        </ul>




                    </div>
                </div>
                <div class="px-6 border-t border-gray-300 py-4">

                    <h3 class="py-2 text-[#262626]">Categories</h3>

                    <ul class="text-[#262626] text-base ">


                        <?php
                        // Obtener categorías de productos
                        $categories = get_terms(array(
                            'taxonomy'   => 'product_cat',
                            'hide_empty' => false,
                        ));

                        // Verificar si hay categorías y mostrarlas
                        if (!empty($categories) && !is_wp_error($categories)) {
                            echo '<ul class="product-categories flex flex-col ">';
                            foreach ($categories as $category) {
                                echo '<li class="hover:bg-slate-800 py-2">';
                                echo '<a class="flex gap-2 items-center" href="' . esc_url(get_term_link($category)) . '">';
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
                    </ul>
                </div>
            </div>
        </div>
    </div>
<?php
}
