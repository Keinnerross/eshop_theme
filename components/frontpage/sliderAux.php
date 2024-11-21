<?php function SliderAux()
{

    $img1 = get_stylesheet_directory_uri() . "/assets/imgMain/SliderAux/banner.jpg";

    $hight = "200px"

?>




    <div class=" w-full min-h-[<?php echo $hight ?>]  relative">    
        <div class="w-full min-h-[<?php echo $hight ?>] bg-cover bg-center bg-no-repeat absolute z-[-1]" style="background-image: url(<?php echo $img1; ?>)" ;></div> <!-- close bg banner -->
        <div class="flex justify-center items-center h-full">

            <div class="sliderFrontAux w-[655px] flex justify-center items-center h-full  text-center ">
                <div>
                    <div class="flex items-center justify-center  h-full min-h-[<?php echo $hight ?>]">
                        <div class="flex flex-col gap-2 justify-center items-center ">
                            <h2 class="text-4xl font-medium text-white">Tradition in every gift.</h2>
                            <p class="text-base text-white">Tradition, community, and meaningful gifts.</p>
                        </div>
                    </div>
                </div> <!-- close Item -->
                <div>
                    <div class="flex items-center justify-center  h-full min-h-[<?php echo $hight ?>]">
                        <div class="flex flex-col gap-2 justify-center items-center ">
                        <h2 class="text-4xl font-medium text-white">Priceless Traditions, Affordable Gifts</h2>
                        <p class="text-base text-white">Meaningful gifts, prices you'll love.</p>
                        </div>
                    </div>
                </div> <!-- close Item -->
                <div>
                    <div class="flex items-center justify-center  h-full min-h-[<?php echo $hight ?>]">
                        <div class="flex flex-col gap-2 justify-center items-center ">
                        <h2 class="text-4xl font-medium text-white">Delivered to Your Door</h2>
                        <p class="text-base text-white">Send a smile with a gift, delivered right to your door.</p>
                        </div>
                    </div>
                </div> <!-- close Item -->



                


              
            </div>

        </div>
    </div>





<?php
}
