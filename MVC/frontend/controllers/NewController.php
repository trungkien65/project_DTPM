<?php
require_once 'controllers/Controller.php';
require_once 'models/BNew.php';

class  NewController extends Controller{
    public  function index() {
        $bnew_model = new BNew();
        $bnews = $bnew_model->getAll();

        $this->content = $this->render('views/news/index.php', [
            'bnews' => $bnews
        ]);
        require_once 'views/layouts/main.php';
    }

    public function detail() {
        if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
            $_SESSION['error'] = 'ID ko hợp lệ';
            $url_redirect = $_SERVER['SCRIPT_NAME'] . '/';
            header("Location: $url_redirect");
            exit();
        }

        $id = $_GET['id'];
        $bnew_model = new BNew();
        $bnew = $bnew_model->getById($id);

        $this->content = $this->render('views/news/detail.php', [
            'bnew' => $bnew
        ]);
        require_once 'views/layouts/main.php';
    }
}
?>