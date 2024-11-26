const shopSideBtns = document.querySelectorAll('.shopSideMobileBtn'); // Selecciona todos los botones
const sideBarShopMobile = document.querySelector('#sidebarShopMobile');
const closeBtnShopMobile = document.querySelector('#closeBtnSideShop');

if (shopSideBtns && sideBarShopMobile && closeBtnShopMobile) {
    // Itera sobre todos los botones seleccionados
    shopSideBtns.forEach((btn) => {
        btn.addEventListener('click', () => {
            sideBarShopMobile.classList.remove('hidden');
        });
    });

    closeBtnShopMobile.addEventListener('click', () => {
        sideBarShopMobile.classList.add('hidden');
    });

    sideBarShopMobile.addEventListener('click', () => {
        sideBarShopMobile.classList.add('hidden');
    });
} else {
    console.error("No se encontraron los elementos necesarios para los event listeners de móviles.");
}
