<div class="wrap">
    <h2>Cảm ơn bạn đã đặt hàng,
    <h4>Thông tin người mua hàng</h4>
    <table border="1" cellpadding="8" cellspacing="0">
        <tbody>
        <tr>
            <th>Họ tên</th>
            <th>Số điện thoại</th>
            <th>Email</th>
            <th>Địa chỉ</th>
        </tr>
        <tr>
            <td><?php echo $info_customer['fullname']; ?></td>
            <td><?php echo $info_customer['mobile']; ?></td>
            <td><?php echo $info_customer['email']; ?></td>
            <td><?php echo $info_customer['address']; ?></td>
        </tr>
        </tbody>
</div>
<div>
    <h2>Sản phẩm đã đặt</h2>
    <?php if (isset($_SESSION['cart'])): ?>
        <form action="" method="post">
            <table border="1" cellpadding="8" cellspacing="0">
                <tbody>
                <tr>
                    <th width="40%">Tên sản phẩm</th>
                    <th width="12%">Số lượng</th>
                    <th>Giá</th>
                    <th>Thành tiền</th>
                    <th></th>
                </tr>
                <?php
                $total_cart = 0;
                foreach($_SESSION['cart'] AS $product_id => $cart):?>
                    <tr>
                        <td>
                            <div style="text-align: center">
                                    <?php echo $cart['name']?>
                            </div>
                        </td>
                        <td>
                            <div style="text-align: right">
                                <?php echo $cart['quantity']; ?>
                            </div>
                        </td>
                        <td>
                            <div style="text-align: right">
                                <?php echo number_format($cart['price']); ?>
                            </div>
                        </td>
                        <td>
                            <div style="text-align: right">
                                <?php
                                $total_item = $cart['quantity'] * $cart['price'];
                                $total_cart += $total_item;
                                echo number_format($total_item);
                                ?>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
                <tr>
                    <td colspan="4" style="text-align: right">
                        Tổng giá trị đơn hàng:
                        <div>
                            <?php echo number_format($total_cart);?> vnđ
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </form>
    <?php endif; ?>
</div>
<!--Timeline items end -->