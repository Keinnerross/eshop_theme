<?php



//COMPONENTS


/////////////////////////////SLICK JS

function cargar_slick_js() {
    // Cargar CSS de Slick desde CDN
    wp_enqueue_style('slick-css', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
    wp_enqueue_style('slick-theme', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css');

    // Cargar JS de Slick desde CDN y jQuery en el head (no en el pie de página)
    wp_enqueue_script('jquery'); // WordPress ya incluye jQuery por defecto
    wp_enqueue_script('slick-js', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), null, false);

  
}
add_action('wp_enqueue_scripts', 'cargar_slick_js');

//sweet alert
function enqueue_sweetalert() {
    // Registrar SweetAlert2 desde un CDN
    wp_enqueue_script('sweetalert2', 'https://cdn.jsdelivr.net/npm/sweetalert2@11', array('jquery'), null, true);

    // Registrar tu archivo de JS personalizado
    wp_enqueue_script('custom-sweetalert', get_stylesheet_directory_uri() . '/js/alerts.js', array('jquery', 'sweetalert2'), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_sweetalert');





// Aquí se añade el parentesco de estilos con el tema padre al tema hijo:
function enqueue_styles_child_theme()
{

    $parent_style = 'parent-style';
    $child_style = 'child-style';

    wp_enqueue_style(
        $parent_style,
        get_template_directory_uri() . '/style.css'
    );

    wp_enqueue_style(
        $child_style,
        get_stylesheet_directory_uri() . '/style.css',
        array($parent_style),
        wp_get_theme()->get('Version')
    );

    wp_enqueue_style('tailwind-css', get_stylesheet_directory_uri() . '/src/output.css');
}

add_action('wp_enqueue_scripts', 'enqueue_styles_child_theme');


// Aquí encolo las nuevas hojas de estilos adicionales para los diferentes módulos:

function additionalStyles()
{
    // Registrar y encolar fuentes adicionales
    wp_register_style("montserrat", "https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap", array(), "1.0", "all");
    wp_register_style("poppins", "https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap", array(), "1.0", "all");

    wp_enqueue_style("poppins");
    wp_enqueue_style("montserrat");




    // Registrar y encolar otras hojas de estilo
    wp_register_style('contentProduct', get_stylesheet_directory_uri() . '/css/contentProduct.css', array(), '1.0', 'all');

    wp_register_style('headerStyles', get_stylesheet_directory_uri() . '/css/header.css', array(), '1.0', 'all');

    wp_register_style('checkoutStyles', get_stylesheet_directory_uri() . '/css/formCheckout.css', array(), '1.0', 'all');

    wp_register_style('estilos', get_stylesheet_uri(), array("montserrat"), '1.0', 'all');

    wp_register_style('wooInfo', get_stylesheet_directory_uri() . '/css/wooInfo.css', array(), '1.0', 'all');

    wp_register_style('dashboardBanner', get_stylesheet_directory_uri() . '/css/wooViews/dashboard/dashboardBanner.css', array(), '1.0', 'all');

    wp_register_style('dashboardMain', get_stylesheet_directory_uri() . '/css/wooViews/dashboard/dashboardMain.css', array(), '1.0', 'all');

    wp_register_style('cardService', get_stylesheet_directory_uri() . '/css/components css/cardService.css', array(), '1.0', 'all');

    wp_register_style('cardShops', get_stylesheet_directory_uri() . '/css/components css/myShops/cardShop.css', array(), '1.0', 'all');

    wp_register_style('myOrders', get_stylesheet_directory_uri() . '/css/wooViews/myOrders.css', array(), '1.0', 'all');
    wp_register_style('myAccountEdit', get_stylesheet_directory_uri() . '/css/wooViews/myAccountEdit.css', array(), '1.0', 'all');
    wp_register_style('loginRegisterPage', get_stylesheet_directory_uri() . '/css/wooViews/loginRegisterPage.css', array(), '1.0', 'all');

    wp_register_style('imgMain', get_stylesheet_directory_uri() . '/css/animations/imgMain.css', array(), '1.0', 'all');

    wp_enqueue_style('contentProduct');
    wp_enqueue_style('headerStyles');
    wp_enqueue_style('checkoutStyles');
    wp_enqueue_style('estilos');
    wp_enqueue_style('wooInfo');
    wp_enqueue_style('dashboardBanner');
    wp_enqueue_style('dashboardMain');
    wp_enqueue_style('cardService');
    wp_enqueue_style('cardShops');
    wp_enqueue_style('myOrders');
    wp_enqueue_style('myAccountEdit');
    wp_enqueue_style('loginRegisterPage');
    wp_enqueue_style('imgMain');
}
add_action('wp_enqueue_scripts', 'additionalStyles');


// SCRIPTS
function myScripts()
{
    wp_register_script('headerControllers', get_stylesheet_directory_uri() . '/js/headerControllers.js', array(), null, true);
    wp_register_script('loginControllers', get_stylesheet_directory_uri() . '/js/loginControllers.js', array(), null, true);
    wp_register_script('slickjs', get_stylesheet_directory_uri() . '/js/slick.js', array(), null, true);

    // Encola ambos scripts para que se carguen en todas las páginas
    wp_enqueue_script('slickjs');
    wp_enqueue_script('headerControllers');
    wp_enqueue_script('loginControllers');
}

add_action('wp_enqueue_scripts', 'myScripts');



//Estilos para font Aweasome

function load_font_awesome()
{
    // Registra el script de Font Awesome
    wp_register_script('font-awesome', 'https://kit.fontawesome.com/b829081f82.js', array(), null, true);

    // Lo encola para cargarlo en el front-end
    wp_enqueue_script('font-awesome');
}
// Agrega la función a la acción wp_enqueue_scripts
add_action('wp_enqueue_scripts', 'load_font_awesome');







// Esta es la forma de personalizar el botón de añadir al carrito:

remove_action('woocommerce_after_shop_loop_item', "woocommerce_template_loop_add_to_cart", 10);
function add_to_cart_btn()
{
    global $product;
    $titleProduct = $product->get_title();
?>

    <a href="<?php echo $product->add_to_cart_url(); ?>">
        <div class="rounded-full text-text md:flex items-center justify-center hidden " style="padding: 7px">
            <i class="fa fa-cart-plus" aria-hidden="true"></i>
        </div>

    </a>
<?php
}
add_action('woocommerce_after_shop_loop_item', "add_to_cart_btn", 10);

?>


<?php
/*Calcula el procentaje de ahorro de un producto para el cliente */
function calculatePercent($regularPrice, $salePrice)
{
    if ($salePrice) {
        $absoluteDiscount = $regularPrice - $salePrice;
        $percentDiscount = ($absoluteDiscount / $regularPrice) * 100;
        $percentDiscountFormatted = number_format($percentDiscount, 0);
        echo esc_html($percentDiscountFormatted) . "%";
    }
};

// // Hide add to cart msj
// function ocultar_wc_add_to_cart_message($message, $product_id)
// {
//     return ''; //Aqui se supone que va un mensaje, se deja vacio para que no aparezca nada.
// };

// // Denuevo nos encontramos con los filtros de woo.
// add_filter('wc_add_to_cart_message', 'ocultar_wc_add_to_cart_message', 10, 2);




/**Ocultar mensaje de Cupón */
function quitar_bloque_coupon_message()
{
    remove_action('woocommerce_before_checkout_form', 'woocommerce_checkout_coupon_form', 10);
}

add_action('init', 'quitar_bloque_coupon_message');






add_filter('woocommerce_account_menu_items', 'custom_account_navigation_items');

function custom_account_navigation_items($items)
{
    // Modifica los nombres de los enlaces aquí
    $items['dashboard'] = 'Inicio';
    $items['orders'] = 'Facturación';
    $items['edit-account'] = 'Editar Cuenta';
    $items['payment-methods'] = 'Métodos de Pago';
    $items['edit-address'] = 'Información de la cuenta';

    $items['customer-logout'] = 'Log Out';

    unset($items['downloads']);


    return $items;
}
// Funcion para Redirigir el log out a la página de inicio

function custom_logout_redirect()
{
    wp_redirect(home_url()); // Redirige a la raíz del sitio
    exit;
}
add_action('wp_logout', 'custom_logout_redirect');

// Funcion para obtener los links que se usaran en el header, son los enlaces de navegacion de woocomerce.

function getLinkNavigationItem($linkName)
{


    // Obtener la URL actual de manera segura
    $current_url = home_url(add_query_arg(array()));


    $custom_menu_items = apply_filters('woocommerce_account_menu_items', array());

    $facturacionKey = $linkName;
    $urlFacturacion = wc_get_account_endpoint_url($facturacionKey);
    $FacturacionName = $custom_menu_items[$facturacionKey];

    // Obtener la URL del endpoint específico
    $endpoint_url = wc_get_endpoint_url($facturacionKey);

    if ($endpoint_url == "http://usercompanyapp.local/my-account/dashboard/") {
        $endpoint_url = "http://usercompanyapp.local/my-account/";
    };






    // Verificar si la URL actual es igual a la URL del endpoint específico
    if ($current_url === esc_url($endpoint_url)) {
        echo '<a href="' . esc_url($urlFacturacion) . '" class="activeMenuItem">   <li>' . esc_html($FacturacionName) . ' </li></a>';
    } else {
        echo '<a href="' . esc_url($urlFacturacion) . '">   <li>' . esc_html($FacturacionName) . ' </li></a>';
    }
}



//Funcion para llamar SOLO EL NOMBRE del usuario sin contar el apellido.

function printNameUser()
{
    $current_user = wp_get_current_user();
    $user_name = $current_user->first_name; // Obtener solo el nombre
    if (empty($user_name)) {
        $user_name = $current_user->display_name;
    }
    echo esc_html($user_name);
}



function printAllUserName()
{
    if (is_user_logged_in()) {
        $current_user = wp_get_current_user();

        $full_name = $current_user->first_name . ' ' . $current_user->last_name;

        echo esc_html($full_name);
    }
}


function printUserMail()
{
    if (is_user_logged_in()) {
        $current_user = wp_get_current_user();

        $user_email = $current_user->user_email;

        echo esc_html($user_email);
    } else {
        echo 'yourmail@webel.cl';
    }
};











if (!function_exists('usuario_ha_comprado_producto')) {
    function usuario_ha_comprado_producto($user_id)
    {
        // Obtener todos los productos/servicios comprados por del usuario
        $customer_orders = wc_get_orders(
            array(
                'customer_id' => $user_id,
                'status' => array('wc-completed', 'wc-processing'), // Puedes agregar otros estados si es necesario
            )
        );

        // Obtener todos los SKU de productos existentes.
        $args = array(
            'post_type' => 'product', // Estos son los argumentos v:
            'posts_per_page' => -1,
        );

        $products = new WP_Query($args); // Aquí hacemos la consulta a la db

        // Array para almacenar los SKU
        $skus = array();

        // Recorrer los productos y obtener los SKU
        if ($products->have_posts()) {
            while ($products->have_posts()) {
                $products->the_post();
                $product = wc_get_product(get_the_ID());
                $skus[] = $product->get_sku();
            }
        }

        // Restaurar datos originales de post
        wp_reset_postdata();

        $productosCompradosDisponibles = [];

        // Recorrer todos los pedidos
        foreach ($customer_orders as $order) {
            // Obtener los ítems del pedido
            $items = $order->get_items();

            foreach ($items as $item) {
                // Asegurarse de que es un producto
                if ($item instanceof WC_Order_Item_Product) {
                    $product_sku = $item->get_product()->get_sku();

                    // Verificar si el SKU del producto está en el array $skus
                    if (in_array($product_sku, $skus)) { // in Array método para verificar si un valor se encuentra ahí
                        array_push($productosCompradosDisponibles, $product_sku);
                        // echo esc_html("producto $product_sku");
                    }
                }
            }
        }

        return $productosCompradosDisponibles;
    }
}







// Función para ejecutar después de completar un pedido ("thankyou")
add_action('template_redirect', 'mi_funcion_despues_pago');

function mi_funcion_despues_pago()
{
    if (is_wc_endpoint_url('order-pay')) {
        // Realiza aquí las acciones que deseas cuando el usuario está en la página de pago
        // Por ejemplo, puedes ejecutar scripts JavaScript, actualizar datos, etc.


        $order_id = wc_get_order_id_by_order_key($_GET['key']);

        $order = new WC_Order($order_id);

        foreach ($order->get_items() as $item_key => $item) {

            $product = $order->get_product_from_item($item);  //IMPORTANTE MEJORAR EN EL FUTURO.

            $sku = $product->get_sku();
        }


        //Insersión de datos a base de datos:

        global $wpdb;
        $table_name = $wpdb->prefix . 'woocommerce_order_details';
        $currentUserId = get_current_user_id(); // Obtener el ID del usuario actual


        //Inserción de datos
        $wpdb->insert(
            $table_name,
            array(
                'numero_orden' => $order_id,
                'nombre' => "Mi tienda",
                'tipo_servicio' => $sku,
                'disponible' => 0,
                'url' => 'https://webel-web-master.vercel.app/',
                'form' => 0,
                'user_id' => $currentUserId,
            )
        );
    }
};


//  activar gestion de estock a todos
function enable_stock_management_for_all_products()
{
    // Obtén todos los productos publicados
    $args = array(
        'post_type' => 'product',
        'posts_per_page' => -1, // Recupera todos los productos
        'post_status' => 'publish'
    );

    $products = get_posts($args);

    // Para cada producto, habilitar la gestión de inventario
    foreach ($products as $product) {
        $prod = wc_get_product($product->ID);
        $prod->set_manage_stock(true); // Activar la gestión de inventario
        $prod->save();
    }
}
add_action('init', 'enable_stock_management_for_all_products');




function limitar_comentarios_una_vez($approved, $commentdata)
{
    // Verifica si es un comentario de producto
    if ('product' === get_post_type($commentdata['comment_post_ID'])) {
        // Obtiene el usuario y el producto
        $user_id = $commentdata['user_id'];
        $product_id = $commentdata['comment_post_ID'];

        // Verifica si el usuario ya ha comentado este producto
        $comment_exists = get_comments(array(
            'user_id' => $user_id,
            'post_id' => $product_id,
            'count' => true,
        ));

        // Si el usuario ya dejó un comentario, no se aprueba el nuevo
        if ($comment_exists > 0) {
            $approved = 'spam'; // Marcar el comentario como spam, lo que evitará su publicación
        }
    }

    return $approved;
}
add_filter('pre_comment_approved', 'limitar_comentarios_una_vez', 10, 2);


function mensaje_ya_comento()
{
    // Solo mostrar el mensaje si el usuario está logueado
    if (is_user_logged_in()) {
        global $post;

        // Obtener el ID del producto y el ID del usuario actual
        $product_id = $post->ID;
        $user_id = get_current_user_id();

        // Verificar si el usuario ya ha comentado este producto
        $comment_exists = get_comments(array(
            'user_id' => $user_id,
            'post_id' => $product_id,
            'count' => true,
        ));

        // Mostrar mensaje si ya comentó
        if ($comment_exists > 0) {
            echo '<p class="woocommerce-info">¡Ya has dejado una reseña para este producto!</p>';
        }
    }
}
add_action('woocommerce_after_single_product', 'mensaje_ya_comento', 20);



// Manejar la adición de productos al carrito desde un botón personalizado
function custom_add_to_cart()
{
    // Verificar si hay un producto y si el ID está presente en la solicitud
    if (isset($_POST['product_id']) && !empty($_POST['product_id'])) {
        $product_id = intval($_POST['product_id']);

        // Comprobar si el producto es válido
        if ($product_id > 0) {
            // Agregar el producto al carrito
            $added = WC()->cart->add_to_cart($product_id);

            // Comprobar si el producto fue agregado exitosamente
            if ($added) {
                wc_add_notice('¡Producto agregado al carrito!', 'success');
            } else {
                wc_add_notice('Hubo un error al agregar el producto al carrito.', 'error');
            }
        }
    }
}
add_action('wp_loaded', 'custom_add_to_cart');



function add_hidden_class_to_reviews_title()
{
    // Solo agregamos la clase en las páginas de productos
    if (is_product()) {
?>
        <style>
            .woocommerce-Reviews-title {
                display: none !important;
            }

            .woocommerce-noreviews {
                display: none !important;
            }
        </style>
<?php
    }
}
add_action('wp_head', 'add_hidden_class_to_reviews_title');

// Sidebar
// En functions.php
function custom_product_filter_query($query)
{
    // Asegurarse de que estamos en la tienda, categorías de productos o si es una consulta principal
    if (!is_admin() && ($query->is_main_query()) && (is_shop() || is_product_category())) {
        // Inicializar meta_query si no existe
        $meta_query = $query->get('meta_query') ? $query->get('meta_query') : array();

        // Filtrar por rango de precio
        if (isset($_GET['priceRange']) && !empty($_GET['priceRange'])) {
            // Depuración para ver si el parámetro priceRange se está recibiendo correctamente
            error_log('Price Range Selected: ' . print_r($_GET['priceRange'], true)); // Verifica si se recibe el parámetro correctamente

            foreach ($_GET['priceRange'] as $range) {
                list($min_price, $max_price) = explode('-', $range);
                $meta_query[] = array(
                    'key'     => '_price',
                    'value'   => array($min_price, $max_price),
                    'compare' => 'BETWEEN',
                    'type'    => 'NUMERIC',
                );
            }
        }

        // Aplicar el meta_query al query de productos
        if (!empty($meta_query)) {
            // Depuración para asegurarse de que el meta_query se aplica
            error_log('Meta Query: ' . print_r($meta_query, true)); // Verifica que el meta_query se esté aplicando correctamente
            $query->set('meta_query', $meta_query);
        }
    }
}

// Enganchar esta función a pre_get_posts
add_action('pre_get_posts', 'custom_product_filter_query');


///Redirection Login/Register
// Captura y guarda la URL en una cookie antes de iniciar sesión o registrarse
function guardar_url_anterior_en_cookie() {
    if (!is_user_logged_in() && !is_admin()) {
        if (!is_account_page()) {
            setcookie('redirect_to_previous', $_SERVER['REQUEST_URI'], time() + 3600, '/');
        }
    }
}
add_action('template_redirect', 'guardar_url_anterior_en_cookie');

// Redirige después del login
function redirigir_despues_login($redirect_to) {
    if (isset($_COOKIE['redirect_to_previous'])) {
        $redirect_to = $_COOKIE['redirect_to_previous'];
        setcookie('redirect_to_previous', '', time() - 3600, '/'); // Limpia la cookie
    }
    return $redirect_to;
}
add_filter('woocommerce_login_redirect', 'redirigir_despues_login');

// Redirige después del registro
function redirigir_despues_registro($redirect_to) {
    if (isset($_COOKIE['redirect_to_previous'])) {
        $redirect_to = $_COOKIE['redirect_to_previous'];
        setcookie('redirect_to_previous', '', time() - 3600, '/'); // Limpia la cookie
    }
    return $redirect_to;
}
add_filter('woocommerce_registration_redirect', 'redirigir_despues_registro');
