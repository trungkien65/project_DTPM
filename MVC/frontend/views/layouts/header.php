<?php
//views/layouts/header.php
require_once 'helpers/Helper.php';

$username = '';

if (isset($_SESSION['user'])) {
    $username = $_SESSION['user']['username'];
}

?>
<!--header-->
<div class="header-outs" id="home">
    <div class="header-bar">
        <div class="info-top-grid">
            <div class="info-contact-agile">
                <ul>
                    <li>
                        <span class="fas fa-phone-volume"></span>
                        <p>+(000)123 4565 32</p>
                    </li>
                    <li>
                        <span class="fas fa-envelope"></span>
                        <p><a href="mailto:info@example.com">abc@gmail.com</a></p>
                    </li>
                    <li>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container-fluid">
            <div class="hedder-up row">
                <div class="col-lg-3 col-md-3 logo-head">
                    <h1><a class="navbar-brand" href="trang-chu.html">Aquarium</a></h1>
                </div>
                <div class="col-lg-5 col-md-6 search-right">
                    <form class="form-inline my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search">
                        <button class="btn" type="submit">Tìm kiếm</button>
                    </form>
                </div>
                <div class="col-lg-4 col-md-3 right-side-cart">
                    <div class="cart-icons">
                        <ul>
                            <?php if(isset($_SESSION['user'])):?>
                                <li>
                                    <a href="#"><span class="span-modal"><?php echo $_SESSION['user']['username'];?></span></a>
                                </li>
                                <li>
                                    <a href="dang-xuat.html"><span class="span-modal">Đăng xuất</span>
                                    <?php
                                        /*$_SESSION = [];
                                        session_destroy();*/
                                    ?>
                                    </a>
                                </li>
                             <?php else: ?>
                                <li>
                                    <a href="dang-nhap.html"><span class="span-modal">Đăng nhập</span></a>
                                </li>
                                <li>
                                    <a href="dang-ky.html"><span class="span-modal">Đăng ký</span></a>
                                </li>
                            <?php endif;?>
                            <li class="toyscart toyscart2 cart cart box_1">
                                <a href="gio-hang-cua-ban.html">
                                    <span class="fas fa-cart-arrow-down"></span>
                                    <?php
                                    $cart_total = 0;
                                    if (isset($_SESSION['cart'])) {
                                        foreach ($_SESSION['cart'] AS $cart) {
                                            $cart_total += $cart['quantity'];
                                        }
                                    }
                                    ?>
                                </a>
                            </li>
                            <li>
                                <span class="cart-amount span-modal">
                                    <?php echo $cart_total; ?>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav ">
                    <li class="nav-item active">
                        <a class="nav-link" href="trang-chu.html">Trang chủ<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="ca-canh.html" class="nav-link">Cá cảnh</a>
                    </li>
                    <li class="nav-item">
                        <a href="be-ca.html" class="nav-link">Bể cá cảnh</a>
                    </li>
                    <li class="nav-item">
                        <a href="phu-kien.html" class="nav-link">Phụ kiện</a>
                    </li>
                    <li class="nav-item">
                        <a href="tin-tuc.html" class="nav-link">Tin tức</a>
                    </li>
                    <li class="nav-item">
                        <a href="lien-he.html" class="nav-link">Liên hệ</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- Slideshow 4 -->
    <div class="slider text-center">
        <div class="callbacks_container">
            <ul class="rslides" id="slider4">
                <li>
                    <div class="slider-img one-img">
                        <div class="container">
                            <div class="slider-info ">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="slider-img two-img">
                        <div class="container">
                            <div class="slider-info ">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="slider-img three-img">
                        <div class="container">
                            <div class="slider-info ">
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="slider-img four-img">
                        <div class="container">
                            <div class="slider-info ">
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!--header-->