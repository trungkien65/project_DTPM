<h2>Cập nhật đơn hàng</h2>
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="fullname">tên khách hàng</label>
        <input type="text" name="fullname"
               value="<?php echo isset($_POST['fullname']) ? $_POST['fullname'] : $order['fullname'] ?>"
               class="form-control" id="fullname"/>
    </div>
    <div class="form-group">
        <label for="address">Địa chỉ</label>
        <input type="text" name="address"
               value="<?php echo isset($_POST['address']) ? $_POST['address'] : $order['address'] ?>"
               class="form-control" id="address"/>
    </div>
    <div class="form-group">
        <label for="mobile">Số điện thoại</label>
        <input type="text" name="mobile"
               value="<?php echo isset($_POST['mobile']) ? $_POST['mobile'] : $order['mobile'] ?>"
               class="form-control" id="mobile"/>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" name="email"
               value="<?php echo isset($_POST['email']) ? $_POST['email'] : $order['email'] ?>"
               class="form-control" id="email"/>
    </div>
    <?php if(!empty($products)):?>
        <?php foreach ($products as $product):?>
            <?php if($product['id'] == $order['id']): ?>
            <table>
                <tr>
                    <th>Sản phẩm</th>
                    <th>Số lượng</th>
                </tr>
                <tr>
                    <td><label for="quantity"><?php echo $product['title']?></label></td>
                    <td>
                        <input type="number" name="quantity"
                        value="<?php echo isset($_POST['email']) ? $_POST['email'] : $product['quantity'] ?>"
                            class="form-control" id="quantity"/>
                    </td>
                </tr>
            </table>
            <?php endif;?> <br/>
        <?php endforeach;?>
        <div class="form-group">
            <input type="submit" name="submit" value="Save" class="btn btn-primary"/>
            <a href="index.php?controller=order&action=index" class="btn btn-default">Back</a>
        </div>
    <?php else: ?>
        <tr>
            <td colspan="7">Không có bản ghi nào</td>
        </tr>
    <?php endif; ?>
</form>