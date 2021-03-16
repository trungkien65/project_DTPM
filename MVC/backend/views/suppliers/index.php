<!--<h1>Tìm kiếm</h1>
<form action="" method="get">
    <input type="hidden" name="controller" value="supplier"/>
    <input type="hidden" name="action" value="index"/>
    <div class="form-group">
        <label>Nhập tên danh mục</label>
        <input type="text" name="name" value="<?php /*echo isset($_GET['name']) ? $_GET['name'] : '' */?>"
               class="form-control"/>
    </div>
    <div class="form-group">
        <input type="submit" name="submit" value="Tìm kiếm" class="btn btn-success"/>
        <a href="index.php?controller=supplier" class="btn btn-secondary">Xóa filter</a>
    </div>
</form>-->

<h1>Danh sách nhà cung cấp</h1>
<a href="index.php?controller=supplier&action=create" class="btn btn-primary">
    <i class="fa fa-plus"></i> Thêm mới
</a>
<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Tên NCC</th>
        <th>Địa chỉ</th>
        <th>SĐT</th>
        <th>Email</th>
        <th>Chi tiết</th>
        <th>Ngày tạo</th>
        <th>Ngày cập nhật</th>
        <th></th>
    </tr>
  <?php if (!empty($suppliers)): ?>
    <?php foreach ($suppliers as $supplier): ?>
          <tr>
              <td>
                <?php echo $supplier['id']; ?>
              </td>
              <td>
                <?php echo $supplier['name']; ?>
              </td>
              <td>
                  <?php echo $supplier['address']; ?>
              </td>
              <td>
                  <?php echo $supplier['phone']; ?>
              </td>
              <td>
                  <?php echo $supplier['email']; ?>
              </td>
              <td>
                <p><?php echo $supplier['description']; ?></p>
              </td>
              <td>
                <?php echo date('d-m-Y H:i:s', strtotime($supplier['created_at'])); ?>
              </td>
              <td>
                <?php
                if (!empty($supplier['updated_at'])) {
                  echo date('d-m-Y H:i:s', strtotime($supplier['updated_at']));
                }
                ?>
              </td>
              <td>
                  <a href="index.php?controller=supplier&action=detail&id=<?php echo $supplier['id'] ?>"
                     title="Chi tiết">
                      <i class="fa fa-eye"></i>
                  </a>
                  <a href="index.php?controller=supplier&action=update&id=<?php echo $supplier['id'] ?>" title="Sửa">
                      <i class="fa fa-pencil-alt"></i>
                  </a>
                  <a href="index.php?controller=supplier&action=delete&id=<?php echo $supplier['id'] ?>" title="Xóa"
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

