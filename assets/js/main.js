(function ($) {
    // $(document).ready(function () {
    //     /* AOS Animate */
    //     AOS.init({ once: true });
    // });

    const mediaQuery2 = window.matchMedia('(max-width: 600px)')
    if (mediaQuery2.matches) {
        $(document).ready(function () {
            $('.card-list').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
            });
        });
    }

    const mediaQuery1 = window.matchMedia('(max-width: 600px)')
    if (mediaQuery1.matches) {
        $(document).ready(function () {
            $('.testimonial-list').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
            });
        });
    }

    const mediaQuery = window.matchMedia('(min-width: 968px)')
    if (mediaQuery.matches) {
        $(document).ready(function () {
            $('.card-list').slick({
                slidesToShow: 5,
                slidesToScroll: 3,
                arrows: false,
            });
        });
    }

    const mediaQuery4 = window.matchMedia('(min-width: 968px)')
    if (mediaQuery4.matches) {
        $(document).ready(function () {
            $('.testimonial-list').slick({
                slidesToShow: 3,
                slidesToScroll: 2,
                arrows: false,
            });
        });
    }

    let count = 0;
    $('.feature-cart').click(function () {
        count++;
        $('#counter').html(count)
        alert('Thêm vào giỏ hàng thành công');
    });

    $('.card-cart').click(function () {
        count++;
        $('#counter').html(count)
        alert('Thêm vào giỏ hàng thành công');
    });
})(jQuery);

const buttonBars = document.querySelector('.button-bar');
const modal = document.querySelector('.modal');
const jsModal = document.querySelector('.js-modal');
const modalContainer = document.querySelector('.js-modal-container');

const headerMobileCheck = document.querySelector('.header-mobile-check');
const navbarMobile = document.querySelector('.navbar-mobile');
const jsNavbar = document.querySelector('.js-navbar');
const navbarContainer = document.querySelector('.js-navbar-container');

function showModal() {
    modal.classList.add('open');
}

function hideModal() {
    modal.classList.remove('open');
}

function showNavbarMobile() {
    navbarMobile.classList.add('open');
}

function hideNavbarMobile() {
    navbarMobile.classList.remove('open');
}

buttonBars.addEventListener('click', showModal)
jsModal.addEventListener('click', hideModal)
modalContainer.addEventListener('click', function (e) {
    e.stopPropagation()
})

headerMobileCheck.addEventListener('click', showNavbarMobile)
jsNavbar.addEventListener('click', hideNavbarMobile)
navbarContainer.addEventListener('click', function (e) {
    e.stopPropagation()
})
