<h1>Chi tiết đơn hàng</h1>
<div>
    <br/>
    <table>
        <tr>
            <td>Họ và tên:  </td>
            <td><?php echo $order['fullname']; ?> <br/></td>
        </tr>
        <tr>
            <td>Địa chỉ:    </td>
            <td><?php echo $order['address']; ?>  <br/></td>
        </tr>
        <tr>
            <td>Số điện thoại:  </td>
            <td><?php echo $order['mobile']; ?>  <br/></td>
        </tr>
        <tr>
            <td>Email:  </td>
            <td><?php echo $order['email']; ?>  <br/></td>
        </tr>
    </>
</div>
<div style="padding: 0px 5% 0px 95%">
    <a class="btn btn-primary" href="index.php?controller=order">Thoát</a>
</div>
<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>sản phẩm</th>
        <th>Số lượng</th>
        <!--<th>Ảnh</th>-->
        <th>Ngày tạo</th>
        <th>Ngày cập nhật</th>
        <th></th>
    </tr>
    <tr>
        <td><?php echo $order['id']; ?></td>
        <?php if(!empty($products)):?>
        <td height="100px">
            <?php foreach ($products as $product):?>
                <?php if($product['id'] == $order['id']): ?>
                    <?php echo $product['title']?>
                <?php endif;?> <br/>
            <?php endforeach;?>
        </td height="100px">
            <td>
                <?php foreach ($products as $product):?>
                    <?php if($product['id'] == $order['id']): ?>
                        <?php echo $product['quantity']?>
                    <?php endif;?> <br/>
                <?php endforeach;?>
            </td>
           <!-- <td>
                <?php /*foreach ($products as $product):*/?>
                    <?php /*if($product['id'] == $order['id']): */?>
                        <?php /*if (!empty($product['avatar'])): */?>
                            <img height="80" src="assets/uploads/<?php /*echo $product['avatar'] */?>"/>
                        <?php /*endif; */?>
                    <?php /*endif;*/?> <br/>
                <?php /*endforeach;*/?>
            </td>-->
        <?php endif;?>
        <td>
            <?php echo date('d-m-Y H:i:s', strtotime($order['created_at'])); ?>
        </td>
        <td>
            <?php echo date('d-m-Y H:i:s', strtotime($order['updated_at'])); ?>
        </td>
    </tr>
</table>

