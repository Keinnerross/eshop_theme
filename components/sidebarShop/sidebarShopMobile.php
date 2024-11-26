<?php
require_once get_stylesheet_directory() . '/components/sidebarShop/priceFilter.php';

function SidebarShopMobile()

{
?>
    <div x-show="isOpen" x-on:click="isOpen = !isOpen" class="fixed top-0 left-0 w-screen h-screen z-[9999] bg-black bg-opacity-50">
        <div class="w-[70vw] h-screen bg-white border-t-4 border-blue-800" x-on:click.stop>

            <div id="closeBtnSideShop" class="px-4 absolute top-10 right-4 bg-blue-600" x-on:click="isOpen = !isOpen">
                <span class="text-white">x<span>
            </div>

            <div class="">
                <div id="filtersContainer">
                    <div class="border-b border-gray-300 px-4">
                        <h4 class="text-[#262626] py-2 font-medium">Filters</h4>
                    </div>

                    <div class="px-4 pt-4">
                        <?php PriceFilter() ?>

                    </div>
                </div>
            </div>
        </div>
    </div>



<?php
}
