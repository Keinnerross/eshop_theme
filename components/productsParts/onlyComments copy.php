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

            echo '<li class="bg-white p-6 rounded-lg shadow-lg border border-gray-200 flex items-start space-x-4">'; // Estilo de cada comentario
            // Imagen de perfil
            echo '<img src="' . esc_url($avatar) . '" alt="' . esc_attr($comment->comment_author) . '" class="w-14 h-14 rounded-full object-cover">';

            echo '<div class="flex-1">';
            // Nombre del usuario
            echo '<strong class="text-xl font-semibold text-gray-800">' . esc_html($comment->comment_author) . '</strong><br>';
            
            // Mostrar estrellas de rating
            if ($rating) :
                echo '<div class="flex space-x-1 mt-2">'; // Espaciado entre las estrellas
                for ($i = 1; $i <= 5; $i++) :
                    if ($i <= $rating) :
                        echo '<span class="text-yellow-400">★</span>'; // Estrella llena
                    else :
                        echo '<span class="text-gray-300">☆</span>'; // Estrella vacía
                    endif;
                endfor;
                echo '</div>';
            endif;

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
