<?php if (empty($slide)): ?>
    <h2>Không tồn tại slide</h2>
<?php else: ?>
    <h2>Chỉnh sửa silde #<?php echo $slide['id'] ?></h2>
    <form method="post" action="" enctype="multipart/form-data">
        <div class="form-group">
            <label>Tên danh mục</label>
            <input type="text" name="name"
                   value="<?php echo isset($_POST['name']) ? $_POST['name'] : $slide['name']; ?>"
                   class="form-control"/>
        </div>

        <div class="form-group">
            <label>Ảnh silde</label>
            <input type="file" name="avatar" class="form-control"/>
            <img src="#" id="img-preview" style="display: none" width="100" height="100"/>
        </div>
        <?php if (!empty($slide['avatar'])): ?>
            <img src="assets/uploads/<?php echo $slide['avatar']; ?>" height="50"/>
        <?php endif; ?>

        <div class="form-group">
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
                <option value="0" <?php echo $selected_active ?> >Disabled</option>
                <option value="1" <?php echo $selected_disabled ?> >Active</option>
            </select>
        </div>

        <input type="submit" class="btn btn-primary" name="submit" value="Save"/>
        <input type="reset" class="btn btn-secondary" name="submit" value="Reset"/>
    </form>
<?php endif; ?>