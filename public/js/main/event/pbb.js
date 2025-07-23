window.addEventListener("load", function () {
    const spinner = document.getElementById('spinner');
    if (spinner) {
        spinner.classList.remove('show');
    }
});

function openModal(imgSrc, imgAlt) {
    const modalImg = document.getElementById('modalImage');
    const modal = new bootstrap.Modal(document.getElementById('imageModal'));
    modalImg.src = imgSrc;
    modalImg.alt = imgAlt;
    modal.show();
}

$(document).ready(function () {
    const owl = $('.owl-carousel');
    owl.owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: false,
        autoplay: true,
        autoplayTimeout: 3000,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });

    $('#customPrev').click(function () {
        owl.trigger('prev.owl.carousel');
    });
    $('#customNext').click(function () {
        owl.trigger('next.owl.carousel');
    });
});