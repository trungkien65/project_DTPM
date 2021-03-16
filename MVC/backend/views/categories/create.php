<h2>Thêm mới danh mục</h2>
<form method="post" action="" enctype="multipart/form-data">
    <div class="form-group">
        <label>Tên danh mục</label>
        <input type="text" name="name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : ''; ?>"
               class="form-control"/>
    </div>
    <div class="form-group">
        <label>Loại danh mục</label>
        <select name="type" class="form-control">
            <option value="0" >Cá</option>
            <option value="1" >Bể cá</option>
            <option value="2" >Phụ kiện</option>
        </select>
    </div>
    <div class="form-group">
        <label>Ảnh đại diện</label>
        <input type="file" name="avatar" class="form-control" id="category-avatar"/>
        <img src="#" id="img-preview" style="display: none" width="100" height="100"/>
    </div>

    <div class="form-group">
        <label>Mô tả</label>
        <textarea class="form-control"
                  name="description"><?php echo isset($_POST['description']) ? $_POST['description'] : ''; ?></textarea>
    </div>

    <div class="form-group">
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
        <label>Trạng thái</label>
        <select name="status" class="form-control">
            <option value="0" <?php echo $selected_user; ?>>Admin</option>
            <option value="1" <?php echo $selected_admin; ?>>user</option>
        </select>
    </div>

    <input type="submit" class="btn btn-primary" name="submit" value="Save"/>
    <input type="reset" class="btn btn-secondary" name="submit" value="Reset"/>
</form>