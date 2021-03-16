
<div class="signin ">
    <div class="using-border py-3" style="margin-bottom: 20px">
        <div class="inner_breadcrumb  ml-4">
            <ul class="short_ls">
                <li>
                    <a href="trang-chu.html">Trang chủ</a>
                    <span>/ /</span>
                </li>
                <li><a href="dang-nhap.html">Đăng nhập</a></li>
            </ul>
        </div>
    </div>
    <h1 class="signin-heading">Đăng nhập</h1>
    <form action="" class="signin-form" id="form-login" autocomplete="off" method="POST">
        <div class="form-group">
            <label for="username" class="form-label">Tên đăng nhập</label>
            <input type="text" class="form-control" id="username" name="username">
            <span class="form-message"></span>
        </div>
        <div class="form-group">
            <label for="password" class="form-label">Mật khẩu</label>
            <input type="password" class="form-control" id="password" name="password">
            <span class="form-message"></span>
        </div>
        <button type="submit" class="form-submit" name="submit">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Đăng nhập
        </button>
        <div class="signin-or">
            <span class="signin-or-text">Hoặc</span>
        </div>
        <a href="#" class="signin-google">
            <i class="fab fa-google signin-google-icon"></i>
            <span class="signin-google-text">Đăng nhập bằng google</span>
        </a>
    </form>
    <p class="signin-already">Bạn chưa có tài khoản? <a href="index.php?controller=login&action=register" class="signin-already-link">Đăng ký</a></p>
</div>