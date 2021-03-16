<h1>Chi tiết anh mục</h1>

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <td><?php echo $supplier['id']; ?></td>
    </tr>
    <tr>
        <th>Tên NCC</th>
        <td><?php echo $supplier['name']; ?></td>
    </tr>
    <tr>
        <th>Địa chỉ</th>
        <td><?php echo $supplier['address']; ?></td>
    </tr>
    <tr>
        <th>SĐT</th>
        <td><?php echo $supplier['phone']; ?></td>
    </tr>
    <tr>
        <th>Email</th>
        <td><?php echo $supplier['email']; ?></td>
    </tr>
    <tr>
        <th>Mô tả</th>
        <td><?php echo $supplier['description']; ?></td>
    </tr>
    <tr>
        <th>Ngày tạo</th>
        <td>
            <?php echo date('d-m-Y H:i:s', strtotime($supplier['created_at'])); ?>
        </td>
    </tr>
    <tr>
        <th>Ngày cập nhật</th>
        <td>
            <?php echo date('d-m-Y H:i:s', strtotime($supplier['updated_at'])); ?>
        </td>
    </tr>
</table>
<a class="btn btn-primary" href="index.php?controller=supplier">Thoát</a>

