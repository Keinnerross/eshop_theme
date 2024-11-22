<?php function SliderAux()
{

    $img1 = get_stylesheet_directory_uri() . "/assets/imgMain/SliderAux/banner.jpg";

    $hight = "200px"

?>




    <div class=" w-full min-h-[100px] md:min-h-[200px]  relative">    
        <div class="w-full min-h-[100px] md:min-h-[200px]   bg-cover bg-center bg-no-repeat absolute z-[-1]" style="background-image: url(<?php echo $img1; ?>) " ;></div> <!-- close bg banner -->
        <div class="flex justify-center items-center h-full">

            <div class="sliderFrontAux w-[655px] flex justify-center items-center h-full  text-center ">
                <div>
                    <div class="flex items-center justify-center  h-full  min-h-[100px] md:min-h-[200px] ">
                        <div class="flex flex-col gap-2 justify-center items-center ">
                            <h2 class="md:text-4xl text-xs font-medium text-white">Tradition in every gift.</h2>
                            <p class="md:text-base text-xs text-white">Tradition, community, and meaningful gifts.</p>
                        </div>
                    </div>
                </div> <!-- close Item -->
                <div>
                    <div class="flex items-center justify-center  h-full  min-h-[100px] md:min-h-[200px] ">
                        <div class="flex flex-col gap-2 justify-center items-center ">
                        <h2 class="md:text-4xl text-xs font-medium text-white">Priceless Traditions, Affordable Gifts</h2>
                        <p class="md:text-base text-xs text-white">Meaningful gifts, prices you'll love.</p>
                        </div>
                    </div>
                </div> <!-- close Item -->
                <div>
                    <div class="flex items-center justify-center  h-full  min-h-[100px] md:min-h-[200px] ">
                        <div class="flex flex-col gap-2 justify-center items-center ">
                        <h2 class="md:text-4xl text-xs font-medium text-white">Delivered to Your Door</h2>
                        <p class="md:text-base text-xs text-white">Send a smile with a gift, delivered right to your door.</p>
                        </div>
                    </div>
                </div> <!-- close Item -->



                


              
            </div>

        </div>
    </div>





<?php
}
