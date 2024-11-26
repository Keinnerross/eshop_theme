<?php

/**
 * Login Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-login.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.0.1
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

do_action('woocommerce_before_customer_login_form'); ?>

<?php if ('yes' === get_option('woocommerce_enable_myaccount_registration')): ?>

	<div class="loginRegisterContainer ">
		<div
			class="hidden md:block bg-center bg-cover bg-no-repeat w-1/2 h-screen scale-110"
			style="background-image: url('https://images.shulcloud.com/7780/uploads/Sliders/homepageslider/israeli-rally-dc-nov-14-2023.jpg');">
		</div>
		<div class="loginRegisterSection">
			<div class="loginRegisterCol">

				<div class="loginContainer animate-fade animate-duration-1000">
					<div class="w-[200px]">

						<?php
						if (function_exists('the_custom_logo')) {
							echo '<a href="' . esc_url(home_url('/')) . '">';
							the_custom_logo();
							echo '</a>';
						} else {
							echo '<a href="' . esc_url(home_url('/')) . '"><p>Logotype here</p></a>';
						}
						?>

					</div>
					<span class="titleLogin text-primary">Login</span>
					<span class="text-gray-800 pb-2 text-sm">Log in to your account to purchase at CSAIR SHOP

					</span>

					<form class="formLoginContainer
				woocommerce-form woocommerce-form-login login" method="post">

						<?php do_action('woocommerce_login_form_start'); ?>

						<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
							<label
								for="username"><?php esc_html_e('Username or email address', 'woocommerce'); ?>&nbsp;<span
									class="required">*</span></label>
							<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username"
								id="username" autocomplete="username"
								value="<?php echo (!empty($_POST['username'])) ? esc_attr(wp_unslash($_POST['username'])) : ''; ?>" /><?php // @codingStandardsIgnoreLine 
																																		?>
						</p>
						<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
							<label for="password"><?php esc_html_e('Password', 'woocommerce'); ?>&nbsp;<span
									class="required">*</span></label>
							<input class="woocommerce-Input woocommerce-Input--text input-text" type="password"
								name="password" id="password" autocomplete="current-password" />
						</p>

						<?php do_action('woocommerce_login_form'); ?>

						<p class="form-row">

						<p class="woocommerce-LostPassword lost_password">
							<a href="<?php echo esc_url(wp_lostpassword_url()); ?>">Forgot my password</a>
						</p>


						<?php wp_nonce_field('woocommerce-login', 'woocommerce-login-nonce'); ?>
						<button type="submit"
							class="loginFormBtn woocommerce-button button woocommerce-form-login__submit<?php echo esc_attr(wc_wp_theme_get_element_class_name('button') ? ' ' . wc_wp_theme_get_element_class_name('button') : ''); ?>"
							name="login" value="<?php esc_attr_e('Log in', 'woocommerce'); ?>">Enter the store</button>
						</p>


						<?php do_action('woocommerce_login_form_end'); ?>

					</form>
					<p class="registerBtnText">
						Don't have an account yet? <span class="registerBtnToggle">Sign up</span>
					</p>
				</div>

				<!-- ////////////////// -->
				<!-- Formulario de registro -->
				<!-- ////////////////// -->

				<div class="registerContainer none animate-fade animate-duration-1000">
					<div class="w-[200px]">

						<?php
						if (function_exists('the_custom_logo')) {
							echo '<a href="' . esc_url(home_url('/')) . '">';
							the_custom_logo();
							echo '</a>';
						} else {
							echo '<a href="' . esc_url(home_url('/')) . '"><p>Logotype here</p></a>';
						}
						?>

					</div>
					<h3 style="font-weight: bold; color: rgb(37 99 235);">Find the perfect detail in our online store.</h3>



					<form method="post" class="formRegisterContainer woocommerce-form woocommerce-form-register register"
						<?php do_action('woocommerce_register_form_tag'); ?>>

						<?php do_action('woocommerce_register_form_start'); ?>

						<?php if ('no' === get_option('woocommerce_registration_generate_username')): ?>

							<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
								<label for="reg_username">
									<?php esc_html_e('Username', 'woocommerce'); ?>&nbsp;<span class="required">*</span>
								</label>
								<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username"
									id="reg_username" autocomplete="username"
									value=" <?php echo (!empty($_POST['username'])) ? esc_attr(wp_unslash($_POST['username'])) : ''; ?>" />
								<?php // @codingStandardsIgnoreLine 
								?>
							</p>

						<?php endif; ?>

						<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
							<label for="reg_email">
								<?php esc_html_e('Email address', 'woocommerce'); ?>&nbsp;<span class="required">*</span>
							</label>
							<input type="email" class="woocommerce-Input woocommerce-Input--text input-text" name="email"
								id="reg_email" autocomplete="email"
								value=" <?php echo (!empty($_POST['email'])) ? esc_attr(wp_unslash($_POST['email'])) : ''; ?>" />
							<?php // @codingStandardsIgnoreLine 
							?>
						</p>

						<?php if ('no' === get_option('woocommerce_registration_generate_password')): ?>

							<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
								<label for="reg_password">
									<?php esc_html_e('Password', 'woocommerce'); ?>&nbsp;<span class="required">*</span>
								</label>
								<input type="password" class="woocommerce-Input woocommerce-Input--text input-text"
									name="password" id="reg_password" autocomplete="new-password" />
							</p>

						<?php else: ?>

							<p class="text-sm py-2">
								<?php esc_html_e('A link to set a new password will be sent to your email address.', 'woocommerce'); ?>
							</p>

						<?php endif; ?>

						<!-- <?php do_action('woocommerce_register_form'); ?>  Estos son los terminos y condiciones-->

						<p class="woocommerce-form-row form-row">
							<?php wp_nonce_field('woocommerce-register', 'woocommerce-register-nonce'); ?>
							<button type="submit"
								class="registerFormBtn woocommerce-Button woocommerce-button button<?php echo esc_attr(wc_wp_theme_get_element_class_name('button') ? ' ' . wc_wp_theme_get_element_class_name('button') : ''); ?> woocommerce-form-register__submit"
								name="register"
								value=" <?php esc_attr_e('Register', 'woocommerce'); ?>">Register🚀</button>
						</p>


						<?php do_action('woocommerce_register_form_end'); ?>

					</form>
					<p class="loginBtnText">
						Already have an account? <span class="loginBtnToggle">Log in</span>
					</p>
				</div>

				<a href="/" class="text-text cursor-pointer flex gap-2 items-center mt-4">
					<i class="fa fa-shopping-bag" aria-hidden="true"></i>
					<p>Return to store</p>
				</a>
			</div>

		</div>

	</div>
<?php endif; ?>

<?php do_action('woocommerce_after_customer_login_form'); ?>