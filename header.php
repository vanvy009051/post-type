<!DOCTYPE html>
<html <?php language_attributes(); ?> class="mt-0">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title><?php bloginfo('name'); ?> - <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/style.css">
    <?php wp_head(); ?>
</head>

<body <?php body_class('mb-0'); ?>>

    <!-- Begin Header -->
    <header class="header">
        <div class="container">
            <div class="header-top">
                <img class="header-logo" src="<?php echo esc_html(get_theme_mod('html_logo_header')); ?>" alt="Logo">
                <div class="header-search">
                    <input class="header-search" type="search" placeholder="Tìm kiếm...">
                    <i class="fas fa-search"></i>
                </div>
                <div class="header-link">
                    <div class="header-nav">
                        <div class="header-cart">
                            <span id="counter" class="header-cart-count">0</span>
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <a href="<?php echo get_home_url() ?>/cart">Giỏ hàng</a>
                    </div>
                    <div class="header-nav">
                        <i class="fas fa-user"></i>
                        <a href="#">Tài khoản</a>
                    </div>
                    <div class="header-mobile">
                        <div class="header-mobile-menu">
                            <label for="check" class="header-mobile-check">
                                <i class="fas fa-bars"></i>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-navbar">
            <div class="container">
                <div class="header-bottom">
                    <div class="header-cate">
                        <div class="header-cate-heading">
                            <i class="fas fa-bars"></i>
                            <a href="<?php echo get_home_url() ?>/shop" class="text-decoration-none" style="color:#5C5C5C;">Danh Mục Sản Phẩm</a>
                        </div>
                        <div class="header-cate__all">
                            <ul class="header-child">
                                <li><a href="#" class="header-child__link">Lọc Nước</a></li>
                                <li><a href="#" class="header-child__link">Hút Bụi</a></li>
                                <li><a href="#" class="header-child__link">Đồ Dùng Gia Dụng</a></li>
                                <li><a href="#" class="header-child__link">Ngũ Cốc</a></li>
                                <li><a href="#" class="header-child__link">Thiết Bị Nhà Bếp</a></li>
                                <li><a href="#" class="header-child__link">Đồ Dùng Gia Dụng</a></li>
                                <li><a href="#" class="header-child__link">Ngũ Cốc</a></li>
                                <li><a href="#" class="header-child__link">Thiết Bị Nhà Bếp</a></li>
                            </ul>
                        </div>
                    </div>
                    <ul class="header-bottom-link">
                        <li><a href="<?php echo get_home_url() ?>/" class="header-bottom-nav active-page">Trang
                                chủ</a></li>
                        <li><a href="<?php echo get_home_url() ?>/about-us" class="header-bottom-nav">Giới thiệu</a></li>
                        <li><a href="<?php echo get_home_url() ?>/category/tat-ca-tin-tuc" class="header-bottom-nav">Tin tức</a></li>
                        <li><a href="<?php echo get_home_url() ?>/danh-muc-thuc-don/tat-ca" class="header-bottom-nav">Thực đơn</a></li>
                        <li><a href="<?php echo get_home_url() ?>/contact" class="header-bottom-nav">Liên hệ</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header -->

    <!-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            const navLinks = document.querySelectorAll('.header-bottom-nav');
            navLinks.forEach((navlink) => {
                navlink.onclick = () => {
                    document.querySelector('.header-bottom-nav.acive-page').classList.remove('acive-page');
                    this.classList.add('acive-page');
                }
            });
        });
    </script> -->
</body>

</html>