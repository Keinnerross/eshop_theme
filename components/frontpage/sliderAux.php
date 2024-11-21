<?php function SliderAux()
{

    $img1 = "https://images.shulcloud.com/7780/uploads/Sliders/homepageslider/israeli-rally-dc-nov-14-2023.jpg";
    $img2 = "https://images.shulcloud.com/7780/uploads/Sliders/homepageslider/slider26.jpg";
    $img3 = "https://images.shulcloud.com/7780/uploads/Sliders/homepageslider/slider41.jpg";
    $hight = "200px"

?>




    <div class="sliderFrontAux w-full min-h-[<?php echo $hight ?>] bg-blue-700">
        <div class="w-full min-h-[<?php echo $hight ?>] bg-cover bg-center bg-no-repeat bg-slate-400" style="background-image: url(<?php echo $img1; ?>)" ;>

        </div>
        <div class="w-full min-h-[<?php echo $hight ?>] bg-cover bg-center bg-no-repeat bg-slate-400" style="background-image: url(<?php echo $img2; ?>)" ;>
        </div>
        <div class="w-full min-h-[<?php echo $hight ?>] bg-cover bg-center bg-no-repeat bg-slate-400" style="background-image: url(<?php echo $img3; ?>)" ;>
        </div>


    </div>





<?php
}
