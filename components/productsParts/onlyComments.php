<?php

function display_comments_list($product_id)
{
    $comments = get_comments(array(
        'post_id' => $product_id,
        'status'  => 'approve',
        'orderby' => 'comment_date_gmt',
        'order'   => 'ASC',
    ));

    if ($comments) :
        echo '<ul class="flex flex-col gap-4">'; // Espaciado entre los comentarios
        foreach ($comments as $comment) :
            // Obtener el rating (estrellas)
            $rating = get_comment_meta($comment->comment_ID, 'rating', true);
            // Obtener la imagen de perfil del usuario
            $avatar = get_avatar_url($comment->comment_author_email);

            echo '<li class="bg-white p-6 rounded-lg shadow-sm border border-gray-200 flex items-start space-x-4">'; // Estilo de cada comentario
            // Imagen de perfil
            echo '<img src="' . esc_url($avatar) . '" alt="' . esc_attr($comment->comment_author) . '" class="w-14 h-14 rounded-full object-cover">';

            echo '<div class="flex-1">';
            // Nombre del usuario
            echo '<strong class="text-xl font-semibold text-gray-800">' . esc_html($comment->comment_author) . '</strong><br>';

?> <div class="stars">
                <?php
                global $product;
                $average_rating = $product->get_average_rating(); // Obtiene la calificación promedio
                $max_rating = 5; // Calificación máxima posible

                if ($average_rating > 0) {
                    echo '<div class="flex items-center text-sm">'; // Usamos flex para alinear las estrellas horizontalmente

                    for ($i = 1; $i <= $max_rating; $i++) {
                        $full_star = ($average_rating >= $i); // Estrella llena
                        $half_star = ($average_rating >= $i - 0.5 && $average_rating < $i); // Media estrella
                        $empty_star = ($average_rating < $i); // Estrella vacía

                        if ($full_star) {
                            echo '<i class="fas fa-star text-yellow-400"></i>'; // Estrella llena
                        } elseif ($half_star) {
                            echo '<i class="fas fa-star-half-alt text-yellow-400"></i>'; // Media estrella
                        } elseif ($empty_star) {
                            echo '<i class="far fa-star text-gray-400"></i>'; // Estrella vacía
                        }
                    }

                    echo '</div>';
                }
                ?>
            </div>


<?php

            // Mostrar el comentario
            echo '<p class="text-gray-700 mt-4 leading-relaxed">' . esc_html($comment->comment_content) . '</p>';
            echo '</div>';
            echo '</li>';
        endforeach;
        echo '</ul>';
    else :
        echo '<p class="text-center text-gray-500">No comments yet.</p>';
    endif;
}
