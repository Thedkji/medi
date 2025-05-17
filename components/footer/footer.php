<link rel="stylesheet" href="./assets/css/footer.css" />
<style>
    footer .positon-footer {
        background-image: url('./assets/imgs/banner_footer.png');
        background-size: 100% 100%;
        height: 261px;
        width: 90%;
        max-width: 1000px;
        position: absolute;
        top: -20%;
        left: 50%;
        transform: translateX(-50%);
        padding: 30px 50px;
    }
    
    @media (max-width: 900px) {
        footer .positon-footer {
            width: 90%;
            padding: 10px 0;
        }
        .positon-footer .title h2 {
            font-size: 20px;
        }
        footer .positon-footer .input-email button {
            width: 100%;
            font-size: 15px;
            height: 40px;
            position: unset;
        }
        footer .positon-footer .input-email #contactForm {
            display: grid;
            grid-template-columns: 1fr;
            gap: 5px;
        }
        footer .positon-footer .input-email #contactForm .g-recaptcha div{
            margin: auto;
        }
        footer .dark input[type=button] {
            width: 100px;
            font-size: 13px;
        }
        
    }
    @media (min-width: 900px) {
        footer .positon-footer .input-email #contactForm .g-recaptcha div{
            margin: 6px auto;
            /* display: none; */
        }
    }
    @media (max-width: 770px) {
        .flex_footer {
            margin-top: 80px;
            gap: 20px;
        }
        footer .footer-widgets.footer.footer-2.dark {
            padding: 200px 50px 150px 50px;
        }
    }

    /* Thông báo nổi */
    .toast {
        position: fixed;
        bottom: 20px;
        right: 20px;
        min-width: 250px;
        padding: 15px;
        border-radius: 5px;
        color: #fff;
        font-size: 16px;
        z-index: 1000;
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 0.3s ease, transform 0.3s ease;
    }

    .toast.show {
        opacity: 1;
        transform: translateY(0);
    }

    .toast.success {
        background-color: #28a745;
    }

    .toast.error {
        background-color: #dc3545;
    }
</style>


<footer id="footer" class="footer-wrapper">
    <div class="footer-widgets footer footer-2 dark">
        <div class="row dark large-columns-2 mb-0 width-content">
            <div id="custom_html-3" class="widget_text col pb-0 widget widget_custom_html">
                <div class="textwidget custom-html-widget">
                    <img class="header_logo header-logo" src="./assets/imgs/clinic/logo-bg-blue.svg">
                    <br>
                    <p>Công ty CLINIC 365 Vietnam International</p>
                    <div class="subcribe-footer">
                        <div class="wpcf7 js" id="wpcf7-f15-o3" lang="en-US" dir="ltr">
                            <div class="screen-reader-response">
                                <p role="status" aria-live="polite" aria-atomic="true"></p>
                                <ul></ul>
                            </div>
                            <form action="/#wpcf7-f15-o3" method="post" class="wpcf7-form init" aria-label="Contact form" novalidate="novalidate" data-status="init">
                                <div style="display: none;">
                                    <input type="hidden" name="_wpcf7" value="15">
                                    <input type="hidden" name="_wpcf7_version" value="5.7">
                                    <input type="hidden" name="_wpcf7_locale" value="en_US">
                                    <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f15-o3">
                                    <input type="hidden" name="_wpcf7_container_post" value="0">
                                    <input type="hidden" name="_wpcf7_posted_data_hash" value="">
                                </div>
                                <div class="flex-row form-flat medium-flex-wrap">
                                    <p><br></p>
                                    <div class="flex-col flex-grow medring-footer-sub">
                                        <p><br>
                                            <span class="wpcf7-form-control-wrap" data-name="your-email">
                                                <input size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Email nhận thông tin ưu đãi" value="" type="email" name="your-email">
                                            </span>
                                            <input class="wpcf7-form-control has-spinner wpcf7-submit button-medring" type="button" value="ĐĂNG KÝ">
                                            <span class="wpcf7-spinner"></span><br>
                                        </p>
                                    </div>
                                    <p><br></p>
                                </div>
                                <div class="wpcf7-response-output" aria-hidden="true"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div id="block_widget-2" class="col pb-0 widget block_widget flex_footer1">
                <div id="row-1625757837" class="flex_footer">
                    <div id="col-820751663" class="col medium-6 small-12 large-6">
                        <div class="col-inner">
                            <h4>THÔNG TIN</h4>
                            <div class="ux-menu stack stack-col justify-start menu-footer">
                                <div class="ux-menu-link flex menu-item">
                                    <a class="ux-menu-link__link flex">
                                        <span class="ux-menu-link__text">Tin tức</span>
                                    </a>
                                </div>
                                <div class="ux-menu-link flex menu-item">
                                    <a class="ux-menu-link__link flex" target="_blank" rel="noopener noreferrer">
                                        <span class="ux-menu-link__text">FAQs</span>
                                    </a>
                                </div>
                                <div class="ux-menu-link flex menu-item">
                                    <a class="ux-menu-link__link flex">
                                        <span class="ux-menu-link__text">Đại lý</span>
                                    </a>
                                </div>
                            </div>
                            <div class="icon">
                                <a target="_blank" href="https://www.facebook.com/profile.php?id=61574228647002" rel="noopener">
                                    <div class="icons8-facebook"></div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div id="col-1966343056" class="col medium-6 small-12 large-6">
                        <div class="col-inner">
                            <h4>HỖ TRỢ</h4>
                            <div class="ux-menu stack stack-col justify-start menu-footer">
                                <div class="ux-menu-link flex menu-item">
                                    <a class="ux-menu-link__link flex">
                                        <span class="ux-menu-link__text">Chính sách bán hàng</span>
                                    </a>
                                </div>
                                <div class="ux-menu-link flex menu-item">
                                    <a class="ux-menu-link__link flex">
                                        <span class="ux-menu-link__text">Chính sách thanh toán</span>
                                    </a>
                                </div>
                                <div class="ux-menu-link flex menu-item">
                                    <a class="ux-menu-link__link flex">
                                        <span class="ux-menu-link__text">Chính sách bảo mật</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a class="back-to-top button icon invert plain fixed bottom z-1 is-outline hide-for-medium circle active" id="top-link" aria-label="Go to top">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#827676" class="bi bi-chevron-compact-up" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M7.776 5.553a.5.5 0 0 1 .448 0l6 3a.5.5 0 1 1-.448.894L8 6.56 2.224 9.447a.5.5 0 1 1-.448-.894z" />
        </svg>
    </a>

    <div class="positon-footer">
        <div class="title">
            <h2>CLINIC 365 – TRỢ THỦ ĐẮC LỰC CHO PHÒNG KHÁM CỦA BẠN</h2>
        </div>

        <div class="input-email">
            <?php 
                $public_key = "6Lf-wD0rAAAAAFbE7s50J6dD0OJgZ_LDtLUX86IR";
                $private_key = "6Lf-wD0rAAAAAAJuSTV9GRRKGPLnBYuR46ic4ZLU4";
            ?>
            <form id="contactForm">
                <input type="text" name="contact" id="contact" placeholder="Nhập email..." required>
                <div class="g-recaptcha" data-sitekey="<?php print $public_key; ?>"></div>
                <button type="submit">Đăng ký ngay</button>
            </form>
        </div>
    </div>
</footer>
<script src="https://www.google.com/recaptcha/api.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        function showToast(message, type) {
            const toast = $('<div class="toast"></div>').text(message);
            toast.addClass(type); 
            $('body').append(toast);

            setTimeout(() => {
                toast.addClass('show');
            }, 100);

            setTimeout(() => {
                toast.removeClass('show');
                setTimeout(() => {
                    toast.remove();
                }, 300);
            }, 3000);
        }

        $('#contactForm').on('submit', function(event) {
            event.preventDefault(); 

            const contact = $('#contact').val();
            const $responseDiv = $('#response');

            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailPattern.test(contact)) {
                showToast('Vui lòng nhập email hợp lệ!', 'error');
                return;
            }

            $responseDiv.html('<p>Đang gửi...</p>');

            $.ajax({
                url: 'send_email.php',
                type: 'POST',
                data: { contact: contact },
                dataType: 'json',
                success: function(result) {
                    // showToast(result.message, 'success');
                    showToast('Email đã được gửi thành công.', 'success');
                },
                error: function() {
                    showToast('Lỗi khi gửi email!', 'error');
                }
            });
        });
    });
</script>