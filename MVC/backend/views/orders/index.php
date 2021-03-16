<h1>Danh sách đơn hàng</h1>
<!--<a href="index.php?controller=order&action=create" class="btn btn-primary">
    <i class="fa fa-plus"></i> Thêm mới
</a>-->
<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Thông tin khách hàng</th>
        <th>Chi tiết đơn hàng</th>
        <th>Giá trị đơn hàng</th>
        <th>Trạng thái</th>
        <th>Ngày tạo</th>
        <th>Ngày cập nhật</th>
        <th></th>
    </tr>
    <?php if (!empty($orders) && !empty($products)): ?>
        <?php foreach ($orders as $order): ?>
            <tr>
                <td>
                    <?php echo $order['id']; ?>
                </td>
                <td width="250px">
                   - <?php echo $order['fullname']; ?> <br/>
                   - <?php echo $order['address']; ?>  <br/>
                   - <?php echo $order['mobile']; ?>  <br/>
                   - <?php echo $order['email']; ?>  <br/>
                </td>
                <td>
                        <?php foreach ($products as $product) :?>
                            <?php if ($order['id'] == $product['id']): ?>
                                <?php echo $product['title']?> : <?php echo $product['quantity']?>  <br/>
                            <?php endif;?>
                        <?php endforeach;?>
                </td>
                <td>
                    <?php echo $order['price_total']?> vnđ
                </td>
                <td>
                   <?php
                        if($order['payment_status'] == 0 )
                        {
                            echo 'Chưa thanh toán';
                        }else
                        {
                            echo 'Đã thanh toán';
                        }
                   ?>
                </td>
                <td>
                    <?php echo date('d-m-Y H:i:s', strtotime($order['created_at'])); ?>
                </td>
                <td>
                    <?php
                    if (!empty($order['updated_at'])) {
                        echo date('d-m-Y H:i:s', strtotime($order['updated_at']));
                    }
                    ?>
                </td>
                <td>
                    <a href="index.php?controller=order&action=detail&id=<?php echo $order['id'] ?>"
                       title="Chi tiết">
                        <i class="fa fa-eye"></i>
                    </a>
                    <a href="index.php?controller=order&action=update&id=<?php echo $order['id'] ?>" title="Sửa">
                        <i class="fa fa-pencil-alt"></i>
                    </a>
                    <a href="index.php?controller=order&action=delete&id=<?php echo $order['id'] ?>" title="Xóa"
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

