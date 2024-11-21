<?php function userModal()
{

?>
    <!-- modalMenuContainer -->
    <div id="modalWindow" class="bg-white hidden w-[280px] absolute top-[100%] right-[-30px] z-[9999999]">
        <div class="modalMenuContainer">
            <div class="modalMenuSection">
                <div class="modalMenuTitle">
                    <span class="userNameNav"> <?php printAllUserName(); ?></span>
                    <span><?php printUserMail(); ?></span>
                </div>

                <div class="modalMenuNavContainer">
                    <nav class="modalMenuNavSection">
                        <ul>

                            <?php
                            $custom_menu_items = apply_filters('woocommerce_account_menu_items', array());

                            $metodosPagoKey = 'edit-account';
                            $urlMetodosPago = wc_get_account_endpoint_url($metodosPagoKey);
                            $metodosPagoName = $custom_menu_items[$metodosPagoKey]; // 
                            echo ' <a href="' . esc_url($urlMetodosPago) . '"> <li> <i class="far fa-user"></i> ' . esc_html($metodosPagoName) . '</li> </a>';
                            ?>

                            <?php
                            $metodosPagoKey = 'payment-methods';
                            $urlMetodosPago = wc_get_account_endpoint_url($metodosPagoKey);
                            $metodosPagoName = $custom_menu_items[$metodosPagoKey]; // 
                            echo '  <a href="' . esc_url($urlMetodosPago) . '"> <li> <i class="far fa-credit-card"></i>' . esc_html($metodosPagoName) . '</li> </a>';
                            ?>



                            <a>
                                <?php
                                $gtranslate_shortcode_result = do_shortcode('[gtranslate]');

                                // Imprime el resultado del shortcode
                                echo $gtranslate_shortcode_result;
                                ?>
                            </a>


                        </ul>
                    </nav>


                    <?php
                    $metodosPagoKey = 'customer-logout';
                    $urlMetodosPago = wc_get_account_endpoint_url($metodosPagoKey);
                    $metodosPagoName = $custom_menu_items[$metodosPagoKey]; // 
                    echo '<a href="' . esc_url($urlMetodosPago) . '"> <div class="btnNavContainer">
                            <button>' . esc_html($metodosPagoName) . '  </button>
                        </div></a>';
                    ?>


                </div>
            </div>
        </div>
    </div>
<?php
}
