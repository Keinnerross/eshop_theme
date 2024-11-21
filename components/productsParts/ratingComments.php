<?php


require_once get_stylesheet_directory() . "/components/productsParts/onlyComments.php" ?>

<!-- onlyComments();
comments_template(); -->
<?php

function RatingComments()
{

    global $product;
    $product_id = $product->get_id();

    // Verifica si el usuario está logueado
    if (is_user_logged_in()) {
        $user_id = get_current_user_id();
        $product_id = get_the_ID(); // Obtiene el ID del producto actual

        // Verifica si el usuario ya ha comentado en este producto
        $args = array(
            'post_id' => $product_id,
            'user_id' => $user_id,
            'status' => 'approve', // Comentarios aprobados
        );

        $comments = get_comments($args);

        // Si el usuario ya ha comentado en este producto
        if (count($comments) > 0) {
            // Si el usuario está logueado y ya ha comentado, llama a la función 'FuncionComentarios'
            display_comments_list($product_id);

?>
            <p class="py-4 font-medium text-sm">You already made a rating for this product</p>
<?php
        } else {
            // Si el usuario está logueado pero no ha comentado, llama a la función 'funcionTodo'
            display_comments_list($product_id);
            comments_template();
        }
    } else {
        // Si el usuario no está logueado, llama a la función 'funcionComentarios'
        display_comments_list($product_id);
       ?>
        <p class="py-4 font-medium text-sm">You must log in to comment and rate</p>
       <?php
    }
}
