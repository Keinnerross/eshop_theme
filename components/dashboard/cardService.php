<?php function cardService($title, $description, $picture, $price)
{
    ?>
    <div class="cardServicesModuleContainer">
        <div style="background-image: url('<?php echo esc_url($picture) ?>')" class="servicePicture">
        </div>

        <div class="cardServiceInfoContainer">

            <h4><?php echo esc_html($title) ?></h4>
            <p><?php echo esc_html($description) ?></p>
            <hr>
            <div class="cardServicePriceContainer">
                <span class="priceLabel">Precio</span>
                <span>$ <?php echo esc_html($price) ?></span>
            </div>
        </div>
    </div>
    <?php
}