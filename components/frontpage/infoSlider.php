<?php function InfoSlider()
{


    $davidStar = get_stylesheet_directory_uri() . "/assets/frontIcons/star.png";


?>
    <div class="flex gap-4 p-6 ">
        <div class="item1 flex gap-4 bg-myWhite rounded-2xl shadow-lg p-3 items-center">
            <div class="icon">
                <img src="<?php echo $davidStar ?>" class="w-5"  />
            </div>
            <div>
                <h2 class="text-sm font-medium text-text-light">Tradition in every gift.</h2>
                <p class="text-xs text-text-lightX2">Tradition, community, and meaningful gifts.</p>
            </div>
        </div>
        <div class="item2 flex gap-4 bg-myWhite rounded-2xl shadow-lg p-3 items-center">
            <div class="icon">
                <i class="fa fa-usd" aria-hidden="true"></i>
            </div>
            <div>
                <h2 class="text-sm font-medium text-text-light">Priceless Traditions, Affordable Gifts</h2>
                <p class="text-xs text-text-lightX2">Meaningful gifts, prices you'll love.</p>
            </div>
        </div>
        <div class="item3 flex gap-4 bg-myWhite rounded-2xl shadow-lg p-3 items-center">
            <div class="icon">
                <i class="fa fa-truck" aria-hidden="true"></i>
            </div>
            <div>
                <h2 class="text-sm font-medium text-text-light">Delivered to Your Door</h2>
                <p class="text-xs text-text-lightX2">Send a smile with a gift, delivered right to your door.</p>
            </div>
        </div>
    </div>


<?php
}
