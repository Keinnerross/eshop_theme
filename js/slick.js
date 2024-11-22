
jQuery(document).ready(function($) {
    $('.sliderFront').slick({
        dots: false,
        arrows: false,
        speed: 600,
        slidesToShow: 1,
        infinite: true,
         autoplay: true,
         autoplaySpeed: 2500,
    });
});



jQuery(document).ready(function($) {
    $('.sliderFrontAux').slick({
        dots: false,
        arrows: false,
        speed: 500,
        slidesToShow: 1,
        infinite: true,
         autoplay: true,
         autoplaySpeed: 1500,
    });
});


jQuery(document).ready(function($) {
    $('.sliderFestivities').slick({
        dots: false,
        arrows: false,
        speed: 500,
        slidesToShow: 5,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 3000,
        responsive: [
            {
                breakpoint: 1024, // Para pantallas de tamaño medio
                settings: {
                    slidesToShow: 3, // Mostrar 3 elementos
                    slidesToScroll: 3, // Desplazar 3 elementos
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 600, // Para pantallas más pequeñas
                settings: {
                    slidesToShow: 3, // Mostrar solo 1 elemento
                    slidesToScroll: 1, // Desplazar 1 elemento
                    infinite: true,
                    dots: false,
        autoplaySpeed: 2000,

                }
            }
        ]
    });
});
