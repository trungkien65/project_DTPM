<!--<h1>Tìm kiếm</h1>
<form action="" method="get">
    <input type="hidden" name="controller" value="category"/>
    <input type="hidden" name="action" value="index"/>
    <div class="form-group">
        <label>Nhập tên banner</label>
        <input type="text" name="name" value="<?php /*echo isset($_GET['name']) ? $_GET['name'] : '' */?>"
               class="form-control"/>
    </div>
    <div class="form-group">
        <input type="submit" name="submit" value="Tìm kiếm" class="btn btn-success"/>
        <a href="index.php?controller=slide" class="btn btn-secondary">Xóa filter</a>
    </div>
</form>-->
<h1>Danh sách slide</h1>
<a href="index.php?controller=slide&action=create" class="btn btn-primary">
    <i class="fa fa-plus"></i> Thêm mới
</a>
<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Ảnh</th>
        <th>Thứ tự hiển thị</th>
        <th>Trạng thái</th>
        <th>Ngày tạo</th>
        <th>Ngày cập nhật</th>
        <th></th>
    </tr>
    <?php if (!empty( $slides)): ?>
        <?php foreach ( $slides as  $slide): ?>
            <tr>
                <td>
                    <?php echo  $slide['id']; ?>
                </td>
                <td>
                    <?php if (!empty( $slide['images'])): ?>
                        <img src="assets/uploads/<?php echo  $slide['images'] ?>" width="60"/>
                    <?php endif; ?>
                </td>
                <td>
                    <?php
                    $position_text = '1';
                    if ( $slide['position'] == 1) {
                        $position_text = '2';
                    }elseif ($slide['position'] == 2) {
                        $position_text = '3';
                    }
                    elseif ($slide['position'] == 3) {
                        $position_text = '4';
                    }
                    elseif ($slide['position'] == 4) {  
                        $position_text = '5';
                    }
                    echo $position_text;
                    ?>
                </td>
                <td>
                    <?php
                    $status_text = 'Active';
                    if ( $slide['status'] == 0) {
                        $status_text = 'Disabled';
                    }
                    echo $status_text;
                    ?>
                </td>
                <td>
                    <?php echo date('d-m-Y H:i:s', strtotime( $slide['created_at'])); ?>
                </td>
                <td>
                    <?php
                    if (!empty( $slide['updated_at'])) {
                        echo date('d-m-Y H:i:s', strtotime( $slide['updated_at']));
                    }
                    ?>
                </td>
                <td>
                    <a href="index.php?controller=slide&action=detail&id=<?php echo  $slide['id'] ?>"
                       title="Chi tiết">
                        <i class="fa fa-eye"></i>
                    </a>
                    <a href="index.php?controller=slide&action=update&id=<?php echo  $slide['id'] ?>" title="Sửa">
                        <i class="fa fa-pencil-alt"></i>
                    </a>
                    <a href="index.php?controller=slide&action=delete&id=<?php echo  $slide['id'] ?>" title="Xóa"
                       onclick="return confirm('Bạn có chắc chắn muốn xóa bản ghi này')">
                        <i class="fa fa-trash"></i>
                    </a>
                </td>
            </tr>
        <?php endforeach ?>
        <tr>
            <td colspan="7"><?php echo $pages; ?></td>
        </tr>

    <?php else: ?>
        <tr>
            <td colspan="7">Không có bản ghi nào</td>
        </tr>
    <?php endif; ?>
</table>
<!--  hiển thị phân trang-->

