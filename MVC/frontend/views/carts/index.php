<?php
require_once 'helpers/Helper.php';
/**
 * views/carts/index.php
 */
?>
<!--Nếu tồn tại giỏ hàng, thì hiển thị ra màn hình-->
<div class="timeline-items container">
    <h2>Giỏ hàng của bạn</h2>
  <?php if (isset($_SESSION['cart'])): ?>
      <form action="" method="post">
          <table class="table table-bordered ">
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
              foreach($_SESSION['cart'] AS $product_id => $cart):
                $slug = Helper::getSlug($cart['name']);
                $product_link = "chi-tiet-san-pham/$slug/$product_id";
              ?>
                <tr>
                  <td>
                      <img class="product-avatar "
                           src="../backend/assets/uploads/<?php echo $cart['avatar'] ?>"
                           width="80">
                      <div class="content-product">
                          <a href="<?php echo $product_link; ?>"
                             class="content-product-a">
                              <?php echo $cart['name']?>
                          </a>
                      </div>
                  </td>
                  <td>
                      <input type="number" min="0"
                             name="<?php echo $product_id?>"
                             class="product-amount form-control"
                             value="<?php echo $cart['quantity']; ?>">
                  </td>
                  <td>
                      <?php
                      echo number_format($cart['price']);
                      ?>
                  </td>
                  <td>
                      <?php
                      $total_item = $cart['quantity'] * $cart['price'];
                      $total_cart += $total_item;
                      echo number_format($total_item);
                      ?>
                  </td>
                  <td>
                      <a class="content-product-a"
                         href="xoa-san-pham/<?php echo $product_id; ?>.html">
                          Xóa
                      </a>
                  </td>
              </tr>
              <?php endforeach; ?>

              <tr>
                  <td colspan="5" style="text-align: right">
                      Tổng giá trị đơn hàng:
                      <span class="product-price">
                        <?php
                        echo number_format($total_cart);
                        ?>
                        </span>
                  </td>
              </tr>
              <tr>
                  <td colspan="5" class="product-payment">
                      <input type="submit" name="submit" value="Cập nhật lại giá" class="btn btn-primary">
                      <a href="thanh-toan.html" class="btn btn-success">Đến trang thanh toán</a>
                  </td>
              </tr>
              </tbody>
          </table>
      </form>
  <?php else: ?>
      <h2>Giỏ hàng trống</h2>
      <a href="index.php" class="btn btn-primary">
          Tiếp tục mua hàng
      </a>
  <?php endif; ?>
</div>
<!--Timeline items end -->