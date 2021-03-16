<h2>Thêm mới nhà cung cấp </h2>
<form method="post" action="" enctype="multipart/form-data">
    <div class="form-group">
        <label>Tên NCC</label>
        <input type="text" name="name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : ''; ?>"
               class="form-control"/>
    </div>
    <div class="form-group">
        <label>Địa chỉ</label>
        <input type="text" name="address" value="<?php echo isset($_POST['address']) ? $_POST['address'] : ''; ?>"
               class="form-control"/>
    </div>
    <div class="form-group">
        <label>SĐT</label>
        <input type="text" name="phone" value="<?php echo isset($_POST['phone']) ? $_POST['phone'] : ''; ?>"
               class="form-control"/>
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>"
               class="form-control"/>
    </div>
    <div class="form-group">
        <label>Mô tả</label>
        <textarea class="form-control"
                  name="description"><?php echo isset($_POST['description']) ? $_POST['description'] : ''; ?></textarea>
    </div>

    <input type="submit" class="btn btn-primary" name="submit" value="Save"/>
    <input type="reset" class="btn btn-secondary" name="submit" value="Reset"/>
</form>