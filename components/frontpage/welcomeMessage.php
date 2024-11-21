<?php function WelcomeMessage()
{


    $img1 = "https://www.judaicawebstore.com/static/version0.0.0.56/frontend/Interactiv4/judaicahyva/en_US/images/home/store-desc-l.png";
    $img2 = "https://www.judaicawebstore.com/static/version0.0.0.56/frontend/Interactiv4/judaicahyva/en_US/images/home/store-desc-r.png";
?>

    <div class="w-full h-[28rem] flex items-center justify-center bg-white">

        <div class="w-[75vw] h-full flex items-center justify-center bg-no-repeat" style="background-image: url(<?php echo $img1 ?>), url(<?php echo $img2 ?>);
            background-position: 0 50%, 100% 50%;">

            <div class="text-center w-[80%] flex flex-col gap-6">
                <h2 class="text-2xl text-text font-semibold">Welcome to Our Gift Shop</h2>
                <p class="text-sm text-text-light">
                    Explore our carefully curated selection of gifts, designed to support the values of our community. Every purchase you make helps sustain our mission to create an inclusive space where individuals can come together to learn, pray, and support one another.

                    Whether you're looking for unique items for yourself or a special gift for someone else, our shop offers a variety of handcrafted goods, religious items, and exclusive community products. By shopping with us, you're helping to strengthen our congregation and build a vibrant, welcoming community.</p>
            </div>
        </div>

    </div>

<?php
}
