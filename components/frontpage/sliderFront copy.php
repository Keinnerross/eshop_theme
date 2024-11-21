<?php

function SliderFront()
{

    require_once get_stylesheet_directory() . "/components/frontpage/infoSlider.php";

    $img1 = "https://images.shulcloud.com/7780/uploads/Sliders/homepageslider/israeli-rally-dc-nov-14-2023.jpg";
    $img2 = "http://eshoptemplate.local/wp-content/uploads/2024/11/bner.png";
    $img3 = "https://images.shulcloud.com/7780/uploads/Sliders/homepageslider/slider41.jpg";
    $hight = "80vh";
?>

    <div class="w-full min-h-[<?php echo $hight ?>] h-[<?php echo $hight ?>] relative">
        <div class="sliderFront w-full h-full overflow-hidden bg-blue-400 ">
            <!-- <div class="w-full min-h-[<?php echo $hight ?>] bg-cover bg-center bg-no-repeat bg-slate-400" style="background-image: url(<?php echo $img1; ?>)" ;>
            </div>
            <div class="w-full min-h-[<?php echo $hight ?>] bg-cover bg-center bg-no-repeat bg-slate-400" style="background-image: url(<?php echo $img2; ?>)" ;>
            </div>
            <div class="w-full min-h-[<?php echo $hight ?>] bg-cover bg-center bg-no-repeat bg-slate-400" style="background-image: url(<?php echo $img3; ?>)" ;>
            </div> -->
        </div>

        <div class="w-full h-full flex items-center justify-center absolute top-0 bg-slate-300 bg-gradient-to-t from-slate-50 from-30% via-transparent via-100%">
            <div class="w-[70%] h-full flex flex-col justify-center items-center gap-4 relative">


                <div class="w-full h-full flex items-center justify-center bg-no-repeat absolute top-0" style="background-image: url(<?php echo $img1 ?>), url(<?php echo $img2 ?>);
            background-position: 0 50%, 100% 50%;"></div>
  <div class="w-full min-h-[<?php echo $hight ?>] bg-cover bg-center bg-no-repeat bg-slate-400" style="background-image: url(<?php echo $img3; ?>)" ;></div>








                <h2 class="text-4xl">¡Welcome to CSAIR STORE! ♥</h2>
                <?php echo do_shortcode('[fibosearch]'); ?>

                <?php InfoSlider(); ?>
            </div>
        </div>
    </div>


<?php
}
