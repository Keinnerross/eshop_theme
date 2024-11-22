<?php function WelcomeMessage()
{


    $img1 = "https://www.judaicawebstore.com/static/version0.0.0.56/frontend/Interactiv4/judaicahyva/en_US/images/home/store-desc-l.png";
    $img2 = "https://www.judaicawebstore.com/static/version0.0.0.56/frontend/Interactiv4/judaicahyva/en_US/images/home/store-desc-r.png";
?>

    <div class="w-full md:h-[28rem] flex items-center justify-center bg-white py-8 md:py-0">

        <div class="w-full md:w-[75vw] h-full flex items-center justify-center bg-no-repeat" style="background-image: url(<?php echo $img1 ?>), url(<?php echo $img2 ?>);
            background-position: 0 50%, 100% 50%;">

            <div class="text-center w-[80%] flex flex-col gap-6">
                <h2 class="text-3xl text-text font-semibold">Information About Our Gift Shop</h2>
                <p class="text-base text-text-light">
               

                    As a token of appreciation for your support, Sisterhood members receive a <span class="text-primary font-semibold">10% discount </span>on most items in our store. It's our way of saying thank you for being a part of our community!

                    Please note that all purchased items will be available for<span class="text-primary font-semibold"> pickup at the shop</span>, unless special arrangements are made in advance. We want to ensure a smooth and convenient experience for you.

                    Thank you for shopping with us and supporting our mission!</p>
            </div>
        </div>

    </div>

<?php
}
