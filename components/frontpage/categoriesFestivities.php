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



    $card1 = new Festivities($thanksIcon, "Thanksgiving ");
    $card2 = new Festivities($HanukkahIcon, "Hanukkah ");
    $card3 = new Festivities($thanksIcon, "Pesaj ");
    $card4 = new Festivities($RoshHashana, "Rosh Hashaná ");
    $card5 = new Festivities($thanksIcon, "Shavuot");
    $card6 = new Festivities($thanksIcon, "Festivities");

    $allFestivities = array($card1,  $card2, $card3, $card4, $card5, $card6);


?>


    <div class="sliderFestivities w-screen flex items-center bg-white h-[200px]">

        <?php
        foreach ($allFestivities as $festivity) {
        ?>

            <div class="w-[25%] flex items-center justify-center bg-white border-l border-solid border-gray-200">
                <div class="flex flex-col items-center justify-start">
                    <img src="<?php echo $festivity->icon; ?>" class="w-20"> </img>
                    <p> <?php echo $festivity->title; ?></p>
                </div>
            </div>

        <?php
        } ?>

    </div>

<?php
}
