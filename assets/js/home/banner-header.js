
document.addEventListener('DOMContentLoaded', function () {
    const swiper = new Swiper("#clinic-home .clinic-banner .swiper", {
        direction: "horizontal", // Hướng chuyển động ngang
        loop: true, // Cho phép lặp lại vòng quay slider

        pagination: {
            el: ".swiper-pagination", // Chỉ định phần tử pagination
            clickable: true, // Cho phép click vào các dấu chấm pagination
        },

        navigation: {
            prevEl: ".swiper-button-prev", // Nút quay lại
            nextEl: ".swiper-button-next", // Nút tiến lên
        },

        scrollbar: {
            el: ".swiper-scrollbar", // Thanh cuộn nếu có
        },

        effect: "slide", // Hiệu ứng chuyển động giữa các slide

        breakpoints: {
            680: {
                slidesPerView: 1,
                spaceBetween: 20,
                navigation: {
                    prevEl: ".swiper-button-prev", // Nút quay lại
                    nextEl: ".swiper-button-next", // Nút tiến lên
                },
            },
            768: {
                slidesPerView: 1,
                spaceBetween: 30,
            },
            1024: {
                slidesPerView: 1,
                spaceBetween: 40,
            },
        },

        // autoplay: {
        //     delay: 1000, // Tự động chuyển slide sau mỗi 1 giây
        //     disableOnInteraction: false, // Cho phép chuyển slide khi người dùng chạm vào
        //     pauseOnMouseEnter: true, // Dừng tự động khi hover chuột vào
        // },

        // Tắt tính năng vuốt qua
        // simulateTouch: false, // Vô hiệu hóa hành động vuốt
    });
})
