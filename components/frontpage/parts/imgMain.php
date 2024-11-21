<?php function ImgMain()
{
    $img = get_stylesheet_directory_uri() . "/assets/imgMain/img.png";
    $wing_1 = get_stylesheet_directory_uri() . "/assets/imgMain/wing_1.png";
    $wing_2 = get_stylesheet_directory_uri() . "/assets/imgMain/wing_2.png";
    $book = get_stylesheet_directory_uri() . "/assets/imgMain/book.png";
    $candle = get_stylesheet_directory_uri() . "/assets/imgMain/candle.png";




?>
    <div class="relative w-full">

        <img class="imgMainImg imgComponent" src="<?php echo $img ?>" />
        <img class="wing_1 imgComponent" src="<?php echo $wing_1 ?>" />
        <img class="wing_2 imgComponent" src="<?php echo $wing_2 ?>" />
        <img class="book imgComponent" src="<?php echo $book ?>" />
        <img class="candle imgComponent" src="<?php echo $candle ?>" />


    </div>
<?php
}
