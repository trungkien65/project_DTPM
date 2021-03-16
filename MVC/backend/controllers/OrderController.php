<?php
require_once 'controllers/Controller.php';
require_once 'models/Order.php';
require_once 'models/Pagination.php';
require_once 'models/Product.php';


class OrderController extends Controller {
    public function index()
    {
        /*echo  '<pre>';
        print_r($_POST);
        echo  '</pre>';*/
        $order_model = new Order();

       // $product_model = new Product();

        $count_total = $order_model->countTotal();
        $arr_params = [
            'total' => $count_total,
            'limit' => 5,
            'query_string' => 'page',
            'controller' => 'order',
            'action' => 'index',
            'full_mode' => false,
            'page' => isset($_GET['page']) ? $_GET['page'] : 1
        ];
        $orders = $order_model->getAllPagination($arr_params);
        $pagination = new Pagination($arr_params);

        $products = $order_model->getAll();

        $pages = $pagination->getPagination();

        $this->content = $this->render('views/orders/index.php', [
            'orders' => $orders,
            'products' => $products,
            'pages' => $pages,
        ]);
        require_once 'views/layouts/main.php';
    }

    public function detail()
    {
        if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
            $_SESSION['error'] = 'ID không hợp lệ';
            header('Location: index.php?controller=order');
            exit();
        }

        $id = $_GET['id'];
        $order_model = new order();
        $order = $order_model->getById($id);


        $products = $order_model->getProductById();


        $this->content = $this->render('views/orders/detail.php', [
            'order' => $order,
            'products' =>$products
        ]);
        require_once 'views/layouts/main.php';
    }

    public function update()
    {
        echo  '<pre>';
        print_r($_POST);
        echo  '</pre>';
        if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
            $_SESSION['error'] = 'ID không hợp lệ';
            header('Location: index.php?controller=order');
            exit();
        }

        $id = $_GET['id'];
        $order_model = new order();
        $order = $order_model->getById($id);

        $products = $order_model->getProductById();


        if (isset($_POST['submit'])) {
            $fullname = $_POST['fullname'];
            $address = $_POST['address'];
            $mobile = $_POST['mobile'];
            $email = $_POST['email'];
            $quantity = $_POST['quantity'];
            //xử lý validate
            if (empty($fullname)) {
                $this->error = 'Không được để trống name';
            }
            if (empty($this->error)) {
                $order_model->fullname = $fullname;
                $order_model->address = $address;
                $order_model->mobile = $mobile;
                $order_model->email = $email;
                $order_model->quantity = $quantity;
                $order_model->updated_at = date('Y-m-d H:i:s');

                $is_update = $order_model->update($id);
                if ($is_update) {
                    $_SESSION['success'] = 'Update dữ liệu thành công';
                } else {
                    $_SESSION['error'] = 'Update dữ liệu thất bại';
                }
                header('Location: index.php?controller=order&action=update');
                exit();
            }
        }


        $this->content = $this->render('views/orders/update.php', [
            'order' => $order,
            'products' =>$products
        ]);
        require_once 'views/layouts/main.php';
    }

    public function delete()
    {
        if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
            $_SESSION['error'] = 'ID không hợp lệ';
            header('Location: index.php?controller=order');
            exit();
        }

        $id = $_GET['id'];
        $order_model = new order();
        $is_delete = $order_model->delete($id);
        $is_delete = $order_model->deleteOrders($id);
        if ($is_delete) {
            $_SESSION['success'] = 'Xóa dữ liệu thành công';
        } else {
            $_SESSION['error'] = 'Xóa dữ liệu thất bại';
        }
        header('Location: index.php?controller=order');
        exit();
    }
}
?>
