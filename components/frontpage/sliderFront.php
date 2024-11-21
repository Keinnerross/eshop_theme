<?php

function SliderFront()
{

    require_once get_stylesheet_directory() . "/components/frontpage/infoSlider.php";

    $img1 = "https://red-cod-644745.hostingersite.com/wp-content/uploads/2024/11/Recurso-3.png";
    $img2 = "https://red-cod-644745.hostingersite.com/wp-content/uploads/2024/11/Recurso-4.png";
    $img3 = "https://images.shulcloud.com/7780/uploads/Sliders/homepageslider/israeli-rally-dc-nov-14-2023.jpg";
    $hight = "80vh";
?>

    <div class="w-full min-h-[<?php echo $hight ?>] h-[<?php echo $hight ?>] relative">
        <div class=" w-full h-full overflow-hidden bg-blue-400 RELATIVE ">
            <div class="w-full min-h-[<?php echo $hight ?>] relative">
                <div class="w-full h-full flex items-center justify-center absolute top-0 bg-slate-300 bg-gradient-to-t from-slate-50 from-30% via-transparent via-100%">
                    <div class="w-full h-full flex flex-col justify-center items-center gap-4 relative">
                        <div class="w-full h-full flex items-center justify-center bg-no-repeat absolute top-0 scale-[1.1]" style="background-image: url(<?php echo $img1 ?>), url(<?php echo $img2 ?>);
            background-position: 0 50%, 100% 50%; background-size: 29%;"></div>


                        <div class="absolute  flex flex-col items-center z-[99999]">
                            <div class="pb-4 flex flex-col items-center">
                                <h2 class="text-[50px] text-blue-800 w-[400px] font-extrabold text-center">Welcome to CSAIR STORE!</h2>
                                <div class="sliderFront w-[300px] pt-3">
                                    <p class="text-2xl text-blue-800  font-bold text-center">Perfect gifts for Jewish celebrations</p>
                                    <p class="text-2xl text-blue-800 font-bold text-center">Meaningful Jewish gifts and treasures</p><p class="text-2xl text-blue-800 font-bold text-center">Support our community with Csair gifts</p>
                                    
                                </div>
                            </div>
                            <?php echo do_shortcode('[fibosearch]'); ?>

                            <?php InfoSlider(); ?>
                        </div>

                    </div>
                </div>
            </div>


        </div>


    </div>


<?php
}
