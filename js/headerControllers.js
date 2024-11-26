const userBtn = document.querySelector('#userBtn');
const categoriesBtn = document.querySelector('#categoriesBtn');
const modalHeaderWindow = document.querySelector('#modalWindow');
const modalCategories = document.querySelector('#modalCategories');
const categoriesBtnMobile = document.querySelector('#categoriesBtnMobile');
const modalCategoriesMobile = document.querySelector('#modalCategoriesMobile');
const closeBtnCategories = document.querySelector('#closeBtnCategories');

// Condicionales para los event listeners de 'userBtn' y 'modalHeaderWindow'
if (userBtn && modalHeaderWindow) {
    userBtn.addEventListener('mouseenter', () => {
        modalHeaderWindow.classList.remove('hidden');
    });

    modalHeaderWindow.addEventListener('mouseenter', () => {
        modalHeaderWindow.classList.remove('hidden');
    });

    userBtn.addEventListener('mouseleave', () => {
        // Verifica si el modal no está siendo hover y luego lo oculta
        if (!modalHeaderWindow.matches(':hover')) {
            modalHeaderWindow.classList.add('hidden');
        }
    });

    modalHeaderWindow.addEventListener('mouseleave', () => {
        modalHeaderWindow.classList.add('hidden');
    });
} else {
    console.error("No se encontraron los elementos necesarios para los event listeners de usuario.");
}

// Condicionales para los event listeners de 'categoriesBtn' y 'modalCategories'
if (categoriesBtn && modalCategories) {
    categoriesBtn.addEventListener('mouseenter', () => {
        modalCategories.classList.remove('hidden');
    });

    modalCategories.addEventListener('mouseenter', () => {
        modalCategories.classList.remove('hidden');
    });

    categoriesBtn.addEventListener('mouseleave', () => {
        if (!modalCategories.matches(':hover')) {
            modalCategories.classList.add('hidden');
        }
    });

    modalCategories.addEventListener('mouseleave', () => {
        modalCategories.classList.add('hidden');
    });
} else {
    console.error("No se encontraron los elementos necesarios para los event listeners de categorías.");
}

// Condicionales para los event listeners de 'categoriesBtnMobile' y 'modalCategoriesMobile'
if (categoriesBtnMobile && modalCategoriesMobile && closeBtnCategories) {
    categoriesBtnMobile.addEventListener('click', () => {
        modalCategoriesMobile.classList.remove('hidden');
    });

    closeBtnCategories.addEventListener('click', () => {
        modalCategoriesMobile.classList.add('hidden');
    });

    modalCategoriesMobile.addEventListener('click', () => {
        modalCategoriesMobile.classList.add('hidden');
    });
} else {
    console.error("No se encontraron los elementos necesarios para los event listeners de móviles.");
}




// ////////////////TEMPORAL Sidebar de precios
 




//////////TEMPORAL GALERIA DE IMG   

 
	document.addEventListener("DOMContentLoaded", function() {
		// Seleccionamos las miniaturas y la imagen principal
		const thumbnails = document.querySelectorAll('.thumbnail-image');
		const mainImage = document.getElementById('main-image');

		// Añadimos el evento de clic a cada miniatura
		thumbnails.forEach(thumbnail => {
			thumbnail.addEventListener('click', function() {
				// Al hacer clic en una miniatura, cambiamos la imagen principal
				const newImageSrc = this.getAttribute('data-full-size'); // Usamos la URL de tamaño completo
				mainImage.src = newImageSrc;

				// También aplicamos el zoom (si no está habilitado por WooCommerce)
				if (typeof jQuery !== 'undefined' && jQuery.fn.zoom) {
					jQuery(mainImage).trigger('zoom.destroy').zoom();
				}
			});
		});
	});


    

    ///CANTIDADES DE PRODUCTO TEMPORAL

    document.addEventListener('DOMContentLoaded', function() {
        // Seleccionar todos los contenedores de cantidad (div .quantity)
        const quantityContainers = document.querySelectorAll('.quantity');
    
        quantityContainers.forEach(container => {
            // Buscar el botón de restar (-) y sumar (+) dentro del contenedor
            const btnRest = container.previousElementSibling;  // Botón "-" antes del contenedor
            const btnPlus = container.nextElementSibling;  // Botón "+" después del contenedor
            const input = container.querySelector('input[type="number"]');  // Input de cantidad
    
            // Función para actualizar el valor del input
            function updateQuantity(amount) {
                let currentValue = parseInt(input.value);  // Obtener el valor actual
                let newValue = currentValue + amount;  // Calcular el nuevo valor
    
                // Asegurar que el valor esté dentro del rango mínimo y máximo
                if (newValue >= input.min && newValue <= input.max) {
                    input.value = newValue;  // Actualizar el valor
                }
            }
    
            // Evento de clic para el botón de restar
            btnRest.addEventListener('click', function() {
                updateQuantity(-1);  // Disminuir cantidad en 1
            });
    
            // Evento de clic para el botón de sumar
            btnPlus.addEventListener('click', function() {
                updateQuantity(1);   // Incrementar cantidad en 1
            });
        });
    });
    

//sticky
document.addEventListener("DOMContentLoaded", function () {
    // Verifica si los elementos existen antes de asignarles valores
    const stickyBar = document.getElementById("stickyBar");
    const addToCart = document.querySelector(".add-to-cart");

    // Si stickyBar o addToCart no existen, salimos de la función
    if (!stickyBar || !addToCart) return;

    const offsetTop = 180; // Offset desde la parte superior
    const stickyBarHeight = stickyBar.offsetHeight;
    const containerBottom = addToCart.offsetTop + addToCart.offsetHeight;

    // Ajustar el ancho de stickyBar al mismo ancho que add-to-cart
    stickyBar.style.width = addToCart.offsetWidth + "px"; 

    function handleScroll() {
        // Verifica si la posición de scroll es válida antes de proceder
        const scrollPosition = window.scrollY + offsetTop + stickyBarHeight;

        // Si la posición de scroll supera el límite del contenedor
        if (scrollPosition >= containerBottom) {
            stickyBar.style.position = "absolute";
            stickyBar.style.top = `${addToCart.offsetHeight - stickyBarHeight}px`; // Posición final dentro del contenedor
        } else {
            stickyBar.style.position = "fixed";
            stickyBar.style.top = `${offsetTop}px`; // Volver a la posición fija
        }
    }

    // Asegura que el evento scroll solo se agregue si stickyBar y addToCart existen
    if (stickyBar && addToCart) {
        window.addEventListener("scroll", handleScroll);
    }

    // Asegurarse de que el ancho se mantenga cuando la ventana cambie de tamaño
    window.addEventListener("resize", function () {
        // Verifica que stickyBar y addToCart aún existan antes de cambiar el ancho
        if (stickyBar && addToCart) {
            stickyBar.style.width = addToCart.offsetWidth + "px";
        }
    });
});

// Selecciona el contenedor con la ID 'descriptionContainerProduct'
let productDescription = document.querySelector('#descriptionContainerProduct');

// Asegúrate de que el contenedor exista antes de intentar modificarlo
if (productDescription) {
    // Reemplaza los saltos de línea por etiquetas <br>
    productDescription.innerHTML = productDescription.innerHTML.replace(/\n/g, '<br>');
    
    // Reemplaza los múltiples espacios por &nbsp; para mantenerlos en el texto
    productDescription.innerHTML = productDescription.innerHTML.replace(/ {2,}/g, '&nbsp;&nbsp;');
} else {
    console.warn('No se encontró el contenedor de descripción del producto');
}






////SIDEBAR
document.querySelectorAll('input[name="priceRange[]"]').forEach(function(checkbox) {
    checkbox.addEventListener('change', function() {
        // Obtener la URL actual
        let currentUrl = new URL(window.location.href);
        
        // Si el checkbox está marcado, agregamos el parámetro
        if (this.checked) {
            // Desmarcar los demás checkboxes
            document.querySelectorAll('input[name="priceRange[]"]').forEach(function(otherCheckbox) {
                if (otherCheckbox !== checkbox) {
                    otherCheckbox.checked = false;
                }
            });

            // Obtener el valor del filtro seleccionado
            let selectedRange = this.value; 
            
            // Eliminar cualquier parámetro 'priceRange[]' existente en la URL
            currentUrl.searchParams.delete('priceRange[]');
            
            // Agregar el nuevo filtro a la URL
            currentUrl.searchParams.append('priceRange[]', selectedRange);
        } else {
            // Si el checkbox se desmarca, eliminamos el filtro de la URL
            currentUrl.searchParams.delete('priceRange[]');
        }
        
        // Cambiar la URL sin recargar la página
        window.history.pushState(null, '', currentUrl);
        
        // Recargar la página para aplicar el filtro
        window.location.reload();
    });
});





/// notices controllers modal

document.getElementById('success-modal').addEventListener('click', function() {
    this.style.display = 'none'; // Cambia el estilo a 'none' para ocultar el elemento
  });   

  document.getElementById('closeSuccess').addEventListener('click', function() {
    const modal = document.getElementById('success-modal');
    modal.style.display = 'none';
  });





  //////////order
  document.querySelectorAll('input[name="order"]').forEach(function(radio) {
    radio.addEventListener('change', function() {
        let currentUrl = new URL(window.location.href);

        // Obtener el valor seleccionado en el radio button
        let selectedOrder = this.value;

        // Eliminar cualquier parámetro 'order' existente en la URL
        currentUrl.searchParams.delete('order');

        // Añadir el parámetro de orden a la URL
        currentUrl.searchParams.append('order', selectedOrder);

        // Cambiar la URL sin recargar la página
        window.history.pushState(null, '', currentUrl);

        // Recargar la página para aplicar el nuevo orden
        window.location.reload();
    });
});
