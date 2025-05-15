document.addEventListener('DOMContentLoaded', function() {
    var menuBtn = document.querySelector('.mobile-nav .nav-icon a');
    var overlay = document.getElementById('mobile-menu-overlay');
    var closeBtn = document.querySelector('.close-mobile-menu');

    if(menuBtn && overlay && closeBtn) {
        menuBtn.addEventListener('click', function(e) {
            e.preventDefault();
            overlay.classList.add('active');
        });
        closeBtn.addEventListener('click', function() {
            overlay.classList.remove('active');
        });
        overlay.addEventListener('click', function(e) {
            if(e.target === overlay) overlay.classList.remove('active');
        });
    }

    // Xử lý menu 2 cấp mobile
    var submenuToggles = document.querySelectorAll('.mobile-menu-content .has-submenu > a');
    submenuToggles.forEach(function(toggle) {
        toggle.addEventListener('click', function(e) {                         
            e.preventDefault();
            var parent = this.parentElement;
            parent.classList.toggle('open');
        });
    });
});
document.addEventListener('DOMContentLoaded', function () {
    const header = document.querySelector('.header.transparent');
    if (header) {
        window.addEventListener('scroll', function () {
            if (window.scrollY > 20) {
                header.classList.add('scrolled');
                header.style.boxShadow = '0 2px 8px rgba(0, 0, 0, 0.1)';
            } else {
                header.classList.remove('scrolled');
                header.style.boxShadow = 'none';
            }
        });
    }
});