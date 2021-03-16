<!-- <div class="container" style="max-width: 500px">
    <form method="post" action="">
        <h2>Đăng ký</h2>
        <div class="form-group">
            <label for="username">Tài khoản</label>
            <input type="text" name="username" value="" id="username" class="form-control"/>
        </div>
        <div class="form-group">
            <label for="password">Mật khẩu</label>
            <input type="password" name="password" value="" id="password" class="form-control"/>
        </div>
        <div class="form-group">
            <label for="password-confirm">Nhập lại mật khẩu</label>
            <input type="password" name="password_confirm" value="" id="password-confirm" class="form-control"/>
        </div>
        <div class="form-group">
            <input type="submit" name="submit" value="Đăng ký" class="btn btn-primary"/>
            <p>
                Đã có tài khoản, <a href="index.php?controller=login&action=login">Đăng nhập</a> ngay
            </p>
        </div>
    </form>
</div> -->

<div class="signup">
    
    <div class="signup-container">
        <h1 class="signup-heading">Đăng ký</h1>
        <form method="post" action="" class="signup-form" autocomplete="off">
            <div class="form-group">
                <label for="name" class="form-label">Tên đăng nhập</label>
                <input type="text" id="username" class="form-input"  name="username"  required name="name">
            </div>
            <div class="form-group">
                <label for="password" class="form-label">Mật khẩu</label>
                <input type="password" id="password" name="password" class="form-input"  required
                    name="password">
            </div>
            <div class="form-group">
                <label for="re-password" class="form-label">Nhập lại mật khẩu</label>
                <input type="password" id="password-confirm" name="password_confirm" class="form-input"  required
                    name="re-password">
            </div>
            <div class="form-group signup-term">
                Đã có tài khoản? <a href="index.php?controller=login&action=login" class="signup-term-link">Đăng nhập</a>
            </div>
            <button type="submit" name="submit" class="btn btn--gradient">đăng ký</button>
        </form>
    </div>
</div>