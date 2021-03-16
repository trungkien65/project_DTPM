<?php
require_once 'controllers/Controller.php';
require_once 'models/Slide.php';
require_once 'models/Pagination.php';

class SlideController extends Controller {

    public function index()
    {
        $slide_model = new Slide();

        $params = [
            'limit' => 5,
            'query_string' => 'page',
            'controller' => 'slide',
            'action' => 'index',
            'full_mode' => FALSE,
        ];

        $page = 1;

        if (isset($_GET['page'])) {
            $page = $_GET['page'];
        }

        if (isset($_GET['name'])) {
            $params['query_additional'] = '&name=' . $_GET['name'];
        }

        $count_total = $slide_model->CountTotal();
        $params['total'] = $count_total;

        $params['page'] = $page;
        $pagination = new Pagination($params);

        $pages = $pagination->getPagination();

        $slides = $slide_model->getAllPagination($params);

        $this->content = $this->render('views/slides/index.php', [
            'slides' => $slides,
            'pages' => $pages,
        ]);

        require_once 'views/layouts/main.php';
    }

    public function create()
    {
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $position = $_POST['position'];
            $status = $_POST['status'];
            $avatar_files = $_FILES['avatar'];


            if (empty($name)) {
                $this->error = 'Cần nhập tên';
            }
            else if ($avatar_files['error'] == 0) {
                $extension_arr = ['jpg', 'jpeg', 'gif', 'png'];
                $extension = pathinfo($avatar_files['name'], PATHINFO_EXTENSION);
                $extension = strtolower($extension);
                $file_size_mb = $avatar_files['size'] / 1024 / 1024;
                $file_size_mb = round($file_size_mb, 2);

                if (!in_array($extension, $extension_arr)) {
                    $this->error = 'Cần upload file định dạng ảnh';
                } else if ($file_size_mb >= 2) {
                    $this->error = 'File upload không được lớn hơn 2Mb';
                }
            }

            $avatar = '';
            if (empty($this->error)) {
                //xử lý upload ảnh nếu có
                if ($avatar_files['error'] == 0) {
                    $dir_uploads = __DIR__ . '/../assets/uploads';
                    if (!file_exists($dir_uploads)) {
                        mkdir($dir_uploads);
                    }
                    $avatar = time() . '-' . $avatar_files['name'];
                    move_uploaded_file($avatar_files['tmp_name'], $dir_uploads . '/' . $avatar);
                }

                $slide_model = new Slide();
                $slide_model->name = $name;
                $slide_model->avatar = $avatar;
                $slide_model->position = $position;
                $slide_model->status = $status;
                $is_insert = $slide_model->insert();
                if ($is_insert) {
                    $_SESSION['success'] = 'Thêm mới thành công';
                } else {
                    $_SESSION['error'] = 'Thêm mới thất bại';
                }
                header('Location: index.php?controller=slide&action=index');
                exit();
            }

        }
        $this->content = $this->render('views/slides/create.php');

        require_once 'views/layouts/main.php';

    }


    public function detail()
    {
        if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
            $_SESSION['error'] = 'ID không hợp lệ';
            header('Location: index.php?controller=slide');
            exit();
        }

        $id = $_GET['id'];
        $slide_model = new Slide();
        $slide = $slide_model->getById($id);

        $this->content = $this->render('views/slides/detail.php', [
            'slide' => $slide
        ]);
        require_once 'views/layouts/main.php';
    }

    public function update()
    {
        if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
            $_SESSION['error'] = 'ID không hợp lệ';
            header('Location: index.php?controller=slide');
            exit();
        }

        $id = $_GET['id'];
        $slide_model = new Slide();
        $slide = $slide_model->getById($id);
        //xử lý submit form
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $position = $_POST['position'];
            $status = $_POST['status'];
            $avatar_files = $_FILES['avatar'];
            //xử lý validate
            if (empty($name)) {
                $this->error = 'Không được để trống name';
            } else if ($_FILES['avatar']['error'] == 0) {
                $extension = pathinfo($_FILES['avatar']['name'], PATHINFO_EXTENSION);
                $extension = strtolower($extension);
                $arr_extension = ['jpg', 'jpeg', 'png', 'gif'];

                $file_size_mb = $_FILES['avatar']['size'] / 1024 / 1024;
                //làm tròn theo đơn vị thập phân
                $file_size_mb = round($file_size_mb, 2);

                if (!in_array($extension, $arr_extension)) {
                    $this->error = 'Cần upload file định dạng ảnh';
                } else if ($file_size_mb > 2) {
                    $this->error = 'File upload không được quá 2MB';
                }
            }

            if (empty($this->error)) {
                $filename = $slide['avatar'];
                if ($_FILES['avatar']['error'] == 0) {
                    $dir_uploads = __DIR__ . '/../assets/uploads';
                    @unlink($dir_uploads . '/' . $filename);
                    if (!file_exists($dir_uploads)) {
                        mkdir($dir_uploads);
                    }
                    $filename = time() . '-product-' . $_FILES['avatar']['name'];
                    move_uploaded_file($_FILES['avatar']['tmp_name'], $dir_uploads . '/' . $filename);
                }
                $slide_model->name = $name;
                $slide_model->avatar = $filename;
                $slide_model->position = $position;
                $slide_model->status = $status;
                $slide_model->updated_at = date('Y-m-d H:i:s');

                $is_update = $slide_model->update($id);
                if ($is_update) {
                    $_SESSION['success'] = 'Update dữ liệu thành công';
                } else {
                    $_SESSION['error'] = 'Update dữ liệu thất bại';
                }
                header('Location: index.php?controller=slide');
                exit();
            }
        }

        $this->content = $this->render('views/slides/update.php', [
            'slide' => $slide
        ]);
        require_once 'views/layouts/main.php';
    }

    public function delete()
    {
        if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
            $_SESSION['error'] = 'ID không hợp lệ';
            header('Location: index.php?controller=slide');
            exit();
        }

        $id = $_GET['id'];
        $slide_model = new Slide();
        $is_delete = $slide_model->delete($id);
        if ($is_delete) {
            $_SESSION['success'] = 'Xóa dữ liệu thành công';
        } else {
            $_SESSION['error'] = 'Xóa dữ liệu thất bại';
        }
        header('Location: index.php?controller=slide');
        exit();
    }
}
?>