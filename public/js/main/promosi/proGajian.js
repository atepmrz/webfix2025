$(document).ready(function() {
            var owl = $(".owl-carousel").owlCarousel({
                loop: true,
                margin: 20,
                nav: false,
                dots: false,
                autoplay: true, // Tambahkan ini supaya autoplay
                autoplayTimeout: 3000, // Durasi tiap slide (3 detik)
                autoplayHoverPause: true, // Pause kalau hover
                responsive: {
                    0: {
                        items: 1
                    },
                    768: {
                        items: 2
                    },
                    992: {
                        items: 3
                    }
                }
            });

            $('#customPrev').click(function() {
                owl.trigger('prev.owl.carousel');
            });

            $('#customNext').click(function() {
                owl.trigger('next.owl.carousel');
            });
        });