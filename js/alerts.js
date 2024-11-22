document.addEventListener('DOMContentLoaded', function () {
    // Obtener el timestamp de cuando se mostró la alerta por última vez
    const lastAlertTimestamp = localStorage.getItem('lastAlertTimestamp');
    const currentTime = new Date().getTime(); // Obtener la hora actual en milisegundos

    // Si no se ha mostrado nunca o han pasado más de 12 horas (12 horas = 12 * 60 * 60 * 1000 ms)
    if (!lastAlertTimestamp || currentTime - lastAlertTimestamp > 12 * 60 * 60 * 1000) {
        Swal.fire({
            html: `
                <div class="w-full flex md:flex-row flex-col gap-8 h-full bg-white rounded-3xl shadow-xl">
                <div class="md:w-[50%] overflow-hidden rounded-tl-2xl rounded-tr-2xl md:rounded-tr-0 md:rounded-bl-2xl ">
                        <img src="https://www.myjewishlearning.com/wp-content/uploads/2015/11/cropped-hanukkah-mjl-newcomers.jpg" alt="Imagen" class="w-full h-full object-cover">
                </div>

                    <div class="flex md:w-[50%] flex-col items-center text-left md:py-16 md:pr-8 px-2 pb-6 md:pb-0">
                         <div class="w-full flex flex-col gap-2 md:gap-6">
                    <h2 class="text-2xl md:text-4xl text-text text-center md:text-left font-semibold">Welcome to Our Gift Shop</h2>
                    <p class="text-xs md:text-sm text-text-light text-center md:text-left">
                        Explore our carefully curated selection of gifts, designed to support the values of our community. Every purchase you make helps sustain our mission to create an inclusive space where individuals can come together to learn, pray, and support one another.
    </p> 
    <p class="text-sm text-text-light md:pt-4 text-center md:text-left hidden md:block">
                        Whether you're looking for unique items for yourself or a special gift for someone else, our shop offers a variety of handcrafted goods, religious items, and exclusive community products. By shopping with us, you're helping to strengthen our congregation and build a vibrant, welcoming community.</p>
                </div>
                          <span id="confirm-btn" class="cursor-pointer w-[200px] text-center mt-4 px-6 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-800">
                        Continue
                    </span>
                    </div>
                </div>
            `,
            customClass: {
                popup: 'w-[90vw] md:w-[70vw] md:min-h-[75vh] rounded-2xl shadow-lg !p-0 z-[9999999999] ',
            },
            showConfirmButton: false, // Deshabilitar el botón de confirmación por defecto
            didOpen: () => {
                // Agregar un evento para manejar el botón dentro del div
                const confirmBtn = document.querySelector('#confirm-btn');
                if (confirmBtn) {
                    confirmBtn.addEventListener('click', () => {
                        Swal.close(); // Cierra la alerta al hacer clic
                    });
                }
            }
        });

        // Almacenar el timestamp de cuando se mostró la alerta
        localStorage.setItem('lastAlertTimestamp', currentTime);
    }
});
