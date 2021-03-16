<?php
require_once 'controllers/Controller.php';
require_once 'models/Supplier.php';
require_once 'models/Pagination.php';

class  SupplierController extends Controller{

    public function index()
    {
        $supplier_model = new supplier();

        $count_total = $supplier_model->countTotal();
        /*$query_additional = '';
        if (isset($_GET['name'])) {
            $query_additional .= '&name=' . $_GET['name'];
        }
        if (isset($_GET['category_id'])) {
            $query_additional .= '&category_id=' . $_GET['category_id'];
        }*/
        $arr_params = [
            'total' => $count_total,
            'limit' => 5,
            'query_string' => 'page',
            'controller' => 'supplier',
            'action' => 'index',
            'full_mode' => false,
           // 'query_additional' => $query_additional,
            'page' => isset($_GET['page']) ? $_GET['page'] : 1
        ];
        $suppliers = $supplier_model->getAllPagination($arr_params);
        $pagination = new Pagination($arr_params);

        $pages = $pagination->getPagination();

        $this->content = $this->render('views/suppliers/index.php', [
            'suppliers' => $suppliers,
            'pages' => $pages,
        ]);
        require_once 'views/layouts/main.php';
    }

    public function create()
    {
        //xử lý submit form
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $address = $_POST['address'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $description = $_POST['description'];
            //xử lý validate
            if (empty($name)) {
                $this->error = 'Không được để trống name';
            }
            if (empty($this->error)) {
                //save dữ liệu vào bảng suppliers
                $supplier_model = new supplier();
                $supplier_model->name = $name;
                $supplier_model->address = $address;
                $supplier_model->phone = $phone;
                $supplier_model->email = $email;
                $supplier_model->description = $description;
                $is_insert = $supplier_model->insert();
                if ($is_insert) {
                    $_SESSION['success'] = 'Insert dữ liệu thành công';
                } else {
                    $_SESSION['error'] = 'Insert dữ liệu thất bại';
                }
                header('Location: index.php?controller=supplier');
                exit();
            }
        }

        $this->content = $this->render('views/suppliers/create.php', [
           // 'categories' => $categories
        ]);
        require_once 'views/layouts/main.php';
    }

    public function detail()
    {
        if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
            $_SESSION['error'] = 'ID không hợp lệ';
            header('Location: index.php?controller=supplier');
            exit();
        }

        $id = $_GET['id'];
        $supplier_model = new supplier();
        $supplier = $supplier_model->getById($id);

        $this->content = $this->render('views/suppliers/detail.php', [
            'supplier' => $supplier
        ]);
        require_once 'views/layouts/main.php';
    }

    public function update()
    {
        if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
            $_SESSION['error'] = 'ID không hợp lệ';
            header('Location: index.php?controller=supplier');
            exit();
        }

        $id = $_GET['id'];
        $supplier_model = new supplier();
        $supplier = $supplier_model->getById($id);
        //xử lý submit form
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $address = $_POST['address'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $description = $_POST['description'];
            //xử lý validate
            if (empty($name)) {
                $this->error = 'Không được để trống name';
            }

            if (empty($this->error)) {
                $supplier_model->name = $name;
                $supplier_model->address = $address;
                $supplier_model->phone = $phone;
                $supplier_model->email = $email;
                $supplier_model->description = $description;
                $supplier_model->updated_at = date('Y-m-d H:i:s');

                $is_update = $supplier_model->update($id);
                if ($is_update) {
                    $_SESSION['success'] = 'Update dữ liệu thành công';
                } else {
                    $_SESSION['error'] = 'Update dữ liệu thất bại';
                }
                header('Location: index.php?controller=supplier');
                exit();
            }
        }

        $this->content = $this->render('views/suppliers/update.php', [
            'supplier' => $supplier,
        ]);
        require_once 'views/layouts/main.php';
    }

    public function delete()
    {
        if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
            $_SESSION['error'] = 'ID không hợp lệ';
            header('Location: index.php?controller=supplier');
            exit();
        }

        $id = $_GET['id'];
        $supplier_model = new supplier();
        $is_delete = $supplier_model->delete($id);
        if ($is_delete) {
            $_SESSION['success'] = 'Xóa dữ liệu thành công';
        } else {
            $_SESSION['error'] = 'Xóa dữ liệu thất bại';
        }
        header('Location: index.php?controller=supplier');
        exit();
    }
}

?>
