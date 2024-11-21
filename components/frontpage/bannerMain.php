<?php

function BannerMain()
{

    require_once get_stylesheet_directory() . "/components/frontpage/infoSlider.php";
    require_once get_stylesheet_directory() . "/components/frontpage/parts/imgMain.php";
    $hight = "80vh";

?>


    <div class="w-full min-h-[<?php echo $hight ?>] h-[<?php echo $hight ?>] relative  flex justify-center items-center">
        <div id="gradient" class="w-full h-full flex items-center justify-center absolute top-0 bg-slate-300 bg-gradient-to-t from-slate-50 from-30% via-transparent via-100% z-[-1]"></div> <!-- close gradient -->


        <div class="w-[90%] flex justify- items-center h-full bg-slate-400">

            <div class="flex flex-col justify-center h-full w-1/2 bg-slate-800">
                <div>
                    <span class="text-4xl text-blue-800  font-extrabold leading-[3rem] ">Welcome to</span>
                    <h2 class="text-7xl text-blue-800  font-extrabold leading-[3rem]">CSAIR STORE!</h2>

                </div>
                <div class="sliderFront w-full pt-3">
                    <p class="text-2xl text-blue-800  font-bold">Perfect gifts for Jewish celebrations</p>
                    <p class="text-2xl text-blue-800 font-bold">Meaningful Jewish gifts and treasures</p>
                    <p class="text-2xl text-blue-800 font-bold">Support our community with Csair gifts</p>
                </div>
                <div class="py-4">
                    <?php echo do_shortcode('[fibosearch]');  ?>

                </div>
            </div> <!-- close text section -->

            <div class="w-1/2 h-full bg-slate-600 flex justify-center items-center">
                <?php imgMain() ?>
            </div>

        </div>


    </div>




<?php
}
