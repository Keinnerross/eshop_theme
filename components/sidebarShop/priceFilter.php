<?php
function PriceFilter()
{
    // Obtener los rangos de precios seleccionados desde la URL
    $price_ranges = isset($_GET['priceRange']) ? $_GET['priceRange'] : array();
?>
    <!-- Formulario de filtro de precios -->
    <div>
        <form id="filtroPrecio" method="GET" action="<?php echo esc_url(add_query_arg(array())); ?>" >
            <div class="">
                <label for="price_filter" class="text-md font-semibold ">Price Range</label>

                <!-- Filtro de precios por rangos -->
                <div class="relative flex flex-col text-sm text-text pt-2  ">
                    <label class="flex gap-2 items-center hover:bg-slate-200 py-2 px-1 rounded-xl cursor-pointer">
                        <input type="checkbox" name="priceRange[]" value="0-10" <?php echo in_array('0-10', $price_ranges) ? 'checked' : ''; ?>>
                        From $10
                    </label>

                    <label class="flex gap-2 items-center hover:bg-slate-200 py-2 px-1 rounded-xl cursor-pointer">

                        <input type="checkbox" name="priceRange[]" value="10-20" <?php echo in_array('10-20', $price_ranges) ? 'checked' : ''; ?>>
                        $10 - $20
                    </label>

                    <label class="flex gap-2 items-center hover:bg-slate-200 py-2 px-1 rounded-xl cursor-pointer">

                        <input type="checkbox" name="priceRange[]" value="20-40" <?php echo in_array('20-40', $price_ranges) ? 'checked' : ''; ?>>
                        $20 - $40
                    </label>
                    <label class="flex gap-2 items-center hover:bg-slate-200 py-2 px-1 rounded-xl cursor-pointer">

                        <input type="checkbox" name="priceRange[]" value="40-60" <?php echo in_array('40-60', $price_ranges) ? 'checked' : ''; ?>>
                        $40 - $60
                    </label>

                    <label class="flex gap-2 items-center hover:bg-slate-200 py-2 px-1 rounded-xl cursor-pointer">

                        <input type="checkbox" name="priceRange[]" value="60-100" <?php echo in_array('60-100', $price_ranges) ? 'checked' : ''; ?>>
                        $60 - $100
                    </label>
                    <label class="flex gap-2 items-center hover:bg-slate-200 py-2 px-1 rounded-xl cursor-pointer">

                        <input type="checkbox" name="priceRange[]" value="100-999999" <?php echo in_array('100-999999', $price_ranges) ? 'checked' : ''; ?>>
                        $100 to more
                    </label>



                </div>
            </div>
        </form>
    </div>
<?php
}
