<h2>Thêm mới user</h2>
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="username">Tên tài khoản <span class="red">*</span></label>
        <input type="text" name="username" id="username"
               value="<?php echo isset($_POST['username']) ? $_POST['username'] : '' ?>" class="form-control"/>
    </div>
    <div class="form-group">
        <label for="password">Mật khẩu <span class="red">*</span></label>
        <input type="password" name="password" id="password"
               value="<?php echo isset($_POST['password']) ? $_POST['password'] : '' ?>" class="form-control"/>
    </div>
    <div class="form-group">
        <label for="password_confirm">Nhập lại mật khẩu <span class="red">*</span></label>
        <input type="password" name="password_confirm" id="password_confirm" value="" class="form-control"/>
    </div>
    <div class="form-group">
        <label for="first_name">Họ</label>
        <input type="text" name="first_name" id="first_name"
               value="<?php echo isset($_POST['first_name']) ? $_POST['first_name'] : '' ?>" class="form-control"/>
    </div>
    <div class="form-group">
        <label for="last_name">Tên</label>
        <input type="text" name="last_name" id="last_name" value="<?php echo isset($_POST['last_name']) ? $_POST['last_name'] : '' ?>" class="form-control"/>
    </div>
    <div class="form-group">
        <label for="phone">Số điện thoại</label>
        <input type="number" name="phone" id="phone" value="<?php echo isset($_POST['phone']) ? $_POST['phone'] : '' ?>" class="form-control"/>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" name="email" id="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>" class="form-control"/>
    </div>
    <div class="form-group">
        <label for="address">Địa chỉ</label>
        <input type="text" name="address" id="address" value="<?php echo isset($_POST['address']) ? $_POST['address'] : '' ?>" class="form-control"/>
    </div>
    <div class="form-group">
        <label for="avatar">Ảnh đại diện</label>
        <input type="file" name="avatar" id="avatar" class="form-control"/>
    </div>
    <div class="form-group">
        <label for="jobs">Nghề nghiệp</label>
        <input type="text" name="jobs" id="jobs" value="<?php echo isset($_POST['jobs']) ? $_POST['jobs'] : '' ?>" class="form-control"/>
    </div>
    <div class="form-group">
        <label for="status">Trạng thái</label>
        <select name="status" class="form-control" id="status">
            <?php
            $selected_admin = '';
            $selected_user = '';
            if (isset($_POST['status'])) {
                switch ($_POST['status']) {
                    case 0:
                        $selected_admin = 'selected';
                        break;
                    case 1:
                        $selected_user = 'selected';
                        break;
                }
            }
            ?>
            <option value="0" <?php echo $selected_user; ?>>Admin</option>
            <option value="1" <?php echo $selected_admin ?>>user</option>
        </select>
    </div>
    <div class="form-group">
        <input type="submit" name="submit" value="Save" class="btn btn-primary"/>
        <a href="index.php?controller=user&action=index" class="btn btn-default">Back</a>
    </div>
</form>