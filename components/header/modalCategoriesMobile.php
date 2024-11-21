<?php function modalCategoriesMobile(){
?>

<div id="modalCategoriesMobile" class="fixed hidden top-0 left-0 w-screen h-screen bg-gray-500 z-[999]">
                            <div class="w-[70vw] h-screen bg-slate-200 ">

                                <div id="closeBtnCategories" class="px-4 absolute top-10 right-4 bg-slate-900">
                                    <span class="text-white">x<span>
                                </div>

                                <div class="">
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
                                            echo '<li class="hover:bg-slate-800 p-2">';
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
                                </div>
                            </div>
                        </div>
    <?php
}