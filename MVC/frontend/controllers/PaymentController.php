<?php
require_once 'controllers/Controller.php';
require_once 'models/Order.php';
require_once 'models/OrderDetail.php';
require_once 'helpers/Helper.php';
require_once 'models/Product.php';

class PaymentController extends Controller {
  public function index() {
      if(isset($_POST['submit'])){
          $fullname = $_POST['fullname'];
          $address = $_POST['address'];
          $mobile = $_POST['mobile'];
          $email = $_POST['email'];
          $note = $_POST['note'];
          $method = $_POST['method'];
          if(empty($fullname) || empty($address) || empty($mobile) || empty($email)){
              $this->error = 'fullname hoặc address hoặc SĐT hoặc email không được để trống';
          }elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)){
              $this->error = 'email không đúng dịnh dạng';
          }
          if(empty($this->error)){
              $order_model = new Order();
              $order_model->fullname = $fullname;
              $order_model->mobile = $mobile;
              $order_model->address = $address;
              $order_model->email = $email;
              $order_model->note = $note;
              $order_model->payment_status = 0;
              $price_total = 0;
              foreach ($_SESSION['cart'] AS $product_id => $cart){
                  $price_total += $cart['price'] * $cart['quantity'];
              }
              $order_model->price_total = $price_total;
              $order_id = $order_model->insert();
              $order_detail_model = new OrderDetail();
              $product_model = new Product();
              foreach ($_SESSION['cart'] AS $product_id => $cart){
                    $order_detail_model->order_id = $order_id;
                    $order_detail_model->product_id = $product_id;
                    $order_detail_model->quantity = $cart['quantity'];
                    //$is_insert = $order_detail_model->insert();
                    $is_update =  $product_model->updateQuantity($product_id,$cart['quantity']);
              }

             // $order = new Order();
              //gửi mail cho khách hàng
              $subject = "Từ kienhd.com ";
              $username = 'buithekien651999@gmail.com';
              $password = 'sxpxwttmminjyene';
              $info_customer = [
                  'fullname' => $fullname,
                  'mobile' => $mobile,
                  'email' => $email,
                  'address' => $address
              ];
              $body =
                  $this->render('views/payments/mail_template_order.php', [
                      'info_customer' => $info_customer
                  ]);
              Helper::sendMail($email, $subject,$body, $username, $password);
              unset($_SESSION['cart']);

              if ($method == 0) {
                  $_SESSION['nganluong_info'] = [
                      'price_total' => $price_total,
                      'fullname' => $fullname,
                      'email' => $email,
                      'mobile' => $mobile
                  ];
                  header("Location: thanh-toan-online.html");
                  exit();
              } else {
                  header('Location: cam-on.html');
                  exit();
              }
          }
      }

    $this->content =$this->render('views/payments/index.php');
    require_once 'views/layouts/main.php';
  }

  public function thank(){
      $this->content = $this->render('views/payments/thank.php');
      require_once 'views/layouts/main.php';
  }

    //hiển thị trang thanh toán ngân lượng
    public function online()
    {
        $this->content = $this->render('configs/nganluong/index.php');
        //echo $this->content;
        require_once 'views/layouts/main.php';
    }
}