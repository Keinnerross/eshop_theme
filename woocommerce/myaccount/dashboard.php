<?php
/**
 * My Account Dashboard Webel
 *
 * Esta seción tiene el dashboard principal del la appWeb es el loby del usuario.
 * 
 * Basada en el template de woocomerce.
 * 
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 4.4.0
 */


/*Esto es una medida de seguridad: */
if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

$bannerPath = __DIR__ . '/../../components/dashboard/bannerDashboard.php';
$cardServicePath = __DIR__ . '/../../components/dashboard/cardService.php';


include_once get_template_directory() . '/functions.php';
include_once $bannerPath;
include_once $cardServicePath;


?>



<div class="dashboardContainer">
	<div class="dashboardSection">
		<div class="dashboardTitleSecion">
			<span>
				<strong>Hi, <?php printNameUser() ?>!</strong>
			</span>
			<span>Thank you for contributing to our store!</span>
		</div>

		
	</div>

</div>






<?php
/**
 * My Account dashboard.
 *
 * @since 2.6.0
 */
do_action('woocommerce_account_dashboard');

/**
 * Deprecated woocommerce_before_my_account action.
 *
 * @deprecated 2.6.0
 */
do_action('woocommerce_before_my_account');

/**
 * Deprecated woocommerce_after_my_account action.
 *
 * @deprecated 2.6.0
 */
do_action('woocommerce_after_my_account');

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
