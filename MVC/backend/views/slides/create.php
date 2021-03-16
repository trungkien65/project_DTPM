<h2>Thêm mới Slide</h2>
<form method="post" action="" enctype="multipart/form-data">
    <div class="form-group">
        <label>Tên Slide</label>
        <input type="text" name="name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : ''; ?>"
               class="form-control"/>
    </div>

    <div class="form-group">
        <label>Ảnh Slide</label>
        <input type="file" name="avatar" class="form-control" id="category-avatar"/>
        <img src="#" id="img-preview" style="display: none" width="100" height="100"/>
    </div>

    <div class="form-group">
    <?php
        $selected_position = '';
        if (isset($_POST['position'])) {
            switch ($_POST['position']) {
                case 0:
                    $selected_position = 'selected';
                    break;
                case 1:
                    $selected_position = 'selected';
                    break;
                case 2:
                    $selected_position = 'selected';
                    break;
                case 3:
                    $selected_position = 'selected';
                    break;
                case 4:
                    $selected_position = 'selected';
                    break;
            }
        }
        ?>
        <label>Thứ tự hiển thị</label>
        <select name="position" class="form-control">
            <option value="0" <?php echo $selected_position; ?> >thứ 1</option>
            <option value="1" <?php echo $selected_position; ?> >thứ 2</option>
            <option value="2" <?php echo $selected_position; ?> >thứ 3</option>
            <option value="3" <?php echo $selected_position; ?> >thứ 4</option>
            <option value="4" <?php echo $selected_position; ?> >thứ 5</option>
        </select>
    </div>

    <div class="form-group">
        <?php
        $selected_active = '';
        $selected_disabled = '';
        if (isset($_POST['status'])) {
            switch ($_POST['status']) {
                case 0:
                    $selected_disabled = 'selected';
                    break;
                case 1:
                    $selected_active = 'selected';
                    break;
            }
        }
        ?>
        <label>Trạng thái</label>
        <select name="status" class="form-control">
            <option value="0" <?php echo $selected_disabled ?> >Disabled</option>
            <option value="1" <?php echo $selected_active ?> >Active</option>
        </select>
    </div>

    <input type="submit" class="btn btn-primary" name="submit" value="Save"/>
    <input type="reset" class="btn btn-secondary" name="submit" value="Reset"/>
</form>