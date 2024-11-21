<?php

function BannerMain()
{

    require_once get_stylesheet_directory() . "/components/frontpage/infoSlider.php";
    require_once get_stylesheet_directory() . "/components/frontpage/parts/imgMain.php";
    $hight = "80vh";
    $socialBtn = "w-7 h-7 text-xs bg-blue-800 rounded-full flex items-center justify-center text-white hover:text-white cursor-pointer ";

?>


    <div class="w-full min-h-[<?php echo $hight ?>] h-[<?php echo $hight ?>]  max-h-[<?php echo $hight ?>] relative  flex justify-center items-center pt-[60px]">
        <div id="gradient" class="w-full h-full flex items-center justify-center absolute top-0 bg-slate-300 bg-gradient-to-t from-slate-50 from-30% via-transparent via-100% z-[-1]"></div> <!-- close gradient -->


        <div class="w-[85%] flex justify- items-center h-full ">

            <div class="flex flex-col justify-center h-full w-1/2">
                <div>
                    <span class="text-3xl text-primary  font-bold leading-[3.5rem] ">Sisterhood Judaica</span>
                    <h2 class="text-7xl text-primary  font-extrabold leading-[3.5rem]"> Gift Shop CSAIR</h2>

                </div>
                <div class="sliderFront w-full pt-8">
                    <p class="text-2xl text-primary  font-medium">Perfect gifts for Jewish celebrations</p>
                    <p class="text-2xl text-primary font-medium">Meaningful Jewish gifts and treasures</p>
                    <p class="text-2xl text-primary font-medium">Support our community with Csair gifts</p>
                </div>
                <div class="py-4">
                    <?php echo do_shortcode('[fibosearch]');  ?>
                </div>
                <div class="relative h-[30%] flex gap-4">
                    <div class="absolute bottom-0 flex items-center gap-4">
                        <div class="flex gap-4 ">
                            <a hre="#" class="<?php echo $socialBtn ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a hre="#" class="<?php echo $socialBtn ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a hre="#" class="<?php echo $socialBtn ?>"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        </div>
                        <p class="text-primary font-medium">Follow events and updates on our social networks</p>
                    </div>

                </div>

            </div> <!-- close text section -->

            <div class="w-1/2 h-full flex justify-center items-center animate-fade">
                <?php imgMain() ?>
            </div>

        </div>


    </div>




<?php
}
