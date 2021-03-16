<?php
/*echo "<pre>";
print_r($_POST);
echo "</pre>";

*/?>

<div class="signup">
    <div class="using-border py-3" style="margin-bottom: 20px">
        <div class="inner_breadcrumb  ml-4">
            <ul class="short_ls">
                <li>
                    <a href="trang-chu.html">Trang chủ</a>
                    <span>/ /</span>
                </li>
                <li><a href="dang-ky.html">Đăng ký</a></li>
            </ul>
        </div>
    </div>
    <div class="signup-container">
        <h1 class="signup-heading">Đăng ký</h1>
        <form method="post" action="" class="signup-form" autocomplete="off">
            <div class="form-group">
                <label for="username" class="form-label">Tên tài khoản <span class="red">*</span></label>
                <input type="text" name="username" id="username"
                       value="<?php echo isset($_POST['username']) ? $_POST['username'] : '' ?>" class="form-input"/>
            </div>
            <div class="form-group" class="form-label">
                <label for="password">Mật khẩu <span class="red">*</span></label>
                <input type="password" name="password" id="password"
                       value="<?php echo isset($_POST['password']) ? $_POST['password'] : '' ?>" class="form-input"/>
            </div>
            <div class="form-group">
                <label for="re-password" class="form-label">Nhập lại mật khẩu</label>
                <input type="password" id="password-confirm" name="password_confirm" class="form-input"  required
                       name="re-password">
            </div>
            <div class="form-group">
                <label for="first_name" class="form-label">Họ</label>
                <input type="text" name="first_name" id="first_name"
                       value="<?php echo isset($_POST['first_name']) ? $_POST['first_name'] : '' ?>" class="form-input"/>
            </div>
            <div class="form-group">
                <label for="last_name" class="form-label">Tên</label>
                <input type="text" name="last_name" id="last_name" value="<?php echo isset($_POST['last_name']) ? $_POST['last_name'] : '' ?>" class="form-input"/>
            </div>
            <div class="form-group">
                <label for="phone" class="form-label">Số điện thoại</label>
                <input type="number" name="phone" id="phone" value="<?php echo isset($_POST['phone']) ? $_POST['phone'] : '' ?>" class="form-input"/>
            </div>
            <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input type="text" name="email" id="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>" class="form-input"/>
            </div>
            <div class="form-group">
                <label for="address" class="form-label">Địa chỉ</label>
                <input type="text" name="address" id="address" value="<?php echo isset($_POST['address']) ? $_POST['address'] : '' ?>" class="form-input"/>
            </div>
            <div class="form-group">
                <label for="jobs" class="form-label">Nghề nghiệp</label>
                <input type="text" name="jobs" id="jobs" value="<?php echo isset($_POST['jobs']) ? $_POST['jobs'] : '' ?>" class="form-input"/>
            </div>
            <div class="form-group">
                <label for="facebook" class="form-label">Facebook</label>
                <input type="text" name="facebook" id="facebook" value="<?php echo isset($_POST['facebook']) ? $_POST['facebook'] : '' ?>" class="form-input"/>
            </div>

            <div class="form-group signup-term">
                Đã có tài khoản? <a href="index.php?controller=login&action=login" class="signup-term-link">Đăng nhập</a>
            </div>
            <button type="submit" name="submit" class="btn btn--gradient">đăng ký</button>
        </form>
    </div>
</div>