<?php function CategoriesFestivities()
{

    class Festivities
    {
        public $icon;
        public $title;
        public function __construct($icon, $title)
        {
            $this->icon = $icon;
            $this->title = $title;
        }
    }


    $thanksIcon = get_stylesheet_directory_uri() . "/assets/frontIcons/a.png";
    $HanukkahIcon = get_stylesheet_directory_uri() . "/assets/frontIcons/b.png";
    $RoshHashana = get_stylesheet_directory_uri() . "/assets/frontIcons/c.png";
    $bar = get_stylesheet_directory_uri() . "/assets/frontIcons/bar.png";
    $weddings = get_stylesheet_directory_uri() . "/assets/frontIcons/Weddings.png";
    $Shavuot = get_stylesheet_directory_uri() . "/assets/frontIcons/Shavuot.png";



    $card1 = new Festivities($bar, "Bar/Bat Mitzvahs");
    $card2 = new Festivities($HanukkahIcon, "Hanukkah ");
    $card3 = new Festivities($thanksIcon, "Pesach ");
    $card4 = new Festivities($RoshHashana, "Rosh Hashana ");
    $card5 = new Festivities($Shavuot, "Shavuot");
    $card6 = new Festivities($weddings, "Weddings");

    $allFestivities = array($card1,  $card2, $card3, $card4, $card5, $card6);


?>


    <div class="sliderFestivities w-screen flex items-center bg-white h-[200px]">

        <?php
        foreach ($allFestivities as $festivity) {
        ?>

            <div class="w-[25%] flex items-center justify-center bg-white border-l border-solid border-gray-200 cursor-pointer hover:scale-[1.05] hover:relative  transition-all">
                <div class="flex flex-col items-center justify-start">
                    <div class="w-20 h-20">
                        <img src="<?php echo $festivity->icon; ?>" class=" h-20 object-contain"> </img>
                    </div>
                    <p> <?php echo $festivity->title; ?></p>
                </div>
            </div>

        <?php
        } ?>

    </div>

<?php
}
