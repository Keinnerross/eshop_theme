<?php
function OrderFilter()
{
    // Obtener el valor de orden desde la URL
    $order = isset($_GET['order']) ? $_GET['order'] : 'price-desc';  // Predeterminado a "precio descendente"
?>
    <!-- Formulario de filtro de orden -->
    <div>
        <form id="filtroOrden" method="GET" action="<?php echo esc_url(add_query_arg(array())); ?>">
            <div class="">
                <label for="order_filter" class="text-md font-semibold ">Order by</label>

                <!-- Usar radio buttons en lugar de checkboxes para solo una selección -->
                <div class="relative flex flex-col text-sm text-text pt-2">
                    <label class="flex gap-2 items-center hover:bg-slate-200 py-2 px-1 rounded-xl cursor-pointer">
                        <input
                            type="radio"
                            name="order"
                            value="popularity"
                            class="form-radio text-blue-500"
                            <?php echo $order == 'popularity' ? 'checked' : ''; ?>
                            onchange="this.form.submit()">
                        The best rated
                    </label>

                    <label class="flex gap-2 items-center hover:bg-slate-200 py-2 px-1 rounded-xl cursor-pointer">
                        <input
                            type="radio"
                            name="order"
                            value="date"
                            class="form-radio text-blue-500"
                            <?php echo $order == 'date' ? 'checked' : ''; ?>
                            onchange="this.form.submit()">
                        Latest Additions
                    </label>

                    <label class="flex gap-2 items-center hover:bg-slate-200 py-2 px-1 rounded-xl cursor-pointer">
                        <input
                            type="radio"
                            name="order"
                            value="price"
                            class="form-radio text-blue-500"
                            <?php echo $order == 'price' ? 'checked' : ''; ?>
                            onchange="this.form.submit()">
                        lowest to highest price
                    </label>

                    <label class="flex gap-2 items-center hover:bg-slate-200 py-2 px-1 rounded-xl cursor-pointer">
                        <input
                            type="radio"
                            name="order"
                            value="price-desc"
                            class="form-radio text-blue-500"
                            <?php echo $order == 'price-desc' ? 'checked' : ''; ?>
                            onchange="this.form.submit()">
                        highest to lowest price
                    </label>
                </div>
            </div>
        </form>
    </div>
<?php
}
?>
