<h1>Chi tiết slide</h1>

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <td><?php echo $slide['id']; ?></td>
    </tr>
    <tr>
        <th>Tên</th>
        <td><?php echo $slide['name']; ?></td>
    </tr>
    <tr>
        <th>Ảnh</th>
        <td>
            <?php if (!empty($slide['avatar'])): ?>
                <img src="assets/uploads/<?php echo $slide['avatar'] ?>" width="60"/>
            <?php endif; ?>
        </td>
    </tr>
    <tr>
        <th>Thứ tự hiển thị</th>
        <td><?php echo $slide['position']; ?></td>
    </tr>
    <tr>
        <th>Trạng thái</th>
        <td>
            <?php
            $status_text = 'Active';
            if ($slide['status'] == 0) {
                $status_text = 'Disabled';
            }
            echo $status_text;
            ?>
        </td>
    </tr>
    <tr>
        <th>Ngày tạo</th>
        <td>
            <?php echo date('d-m-Y H:i:s', strtotime($slide['created_at'])); ?>
        </td>
    </tr>
    <tr>
        <th>Ngày cập nhật</th>
        <td>
            <?php echo date('d-m-Y H:i:s', strtotime($slide['updated_at'])); ?>
        </td>
    </tr>
</table>
<a class="btn btn-primary" href="index.php?controller=slide">Thoát</a>

