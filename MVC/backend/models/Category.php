<?php
//models/Category
require_once 'models/Model.php';
class Category extends Model {

    public $id;
    public $name;
    public $avatar;
    public $description;
    public $status;
    public $created_at;
    public $updated_at;


    public function insert() {
        $sql_insert =
            "INSERT INTO categories(`name`, `avatar`, `description`, `status`)
VALUES (:name, :avatar, :description, :status)";

        $obj_insert = $this->connection
            ->prepare($sql_insert);
        $arr_insert = [
            ':name' => $this->name,
            ':avatar' => $this->avatar,
            ':description' => $this->description,
            ':status' => $this->status
        ];
        return $obj_insert->execute($arr_insert);
    }

    /**
     *
     * @param $params array
     * @return array
     */
    public function getAll($params = []) {
        /*echo "<pre>";
        print_r($params);
        echo "</pre>";*/
        $str_search = 'WHERE TRUE';
        if (isset($params['name']) && !empty($params['name'])) {
            $name = $params['name'];

            $str_search .= " AND `name` LIKE '%$name%'";
        }
        if (isset($params['status'])) {
            $status = $params['status'];
            $str_search .= " AND `status` = $status";
        }

        $sql_select_all = "SELECT * FROM categories $str_search";
        //cbi đối tượng truy vấn
        $obj_select_all = $this->connection
            ->prepare($sql_select_all);
        $obj_select_all->execute();
        $categories = $obj_select_all
            ->fetchAll(PDO::FETCH_ASSOC);
        return $categories;
    }

    public function getById($id) {
        $sql_select_one = "SELECT * FROM categories WHERE id = $id";
        $obj_select_one = $this->connection
            ->prepare($sql_select_one);
        $obj_select_one->execute();
        $category = $obj_select_one->fetch(PDO::FETCH_ASSOC);
        return $category;
    }

    /**
     * Lấy category theo id truyền vào
     * @param $id
     * @return array
     */
    public function getCategoryById($id)
    {
        $obj_select = $this->connection
            ->prepare("SELECT * FROM categories WHERE id = $id");
        $obj_select->execute();
        $category = $obj_select->fetch(PDO::FETCH_ASSOC);

        return $category;
    }

    /**
     * Update bản ghi theo id truyền vào
     * @param $id
     * @return bool
     */
    public function update($id)
    {
        $obj_update = $this->connection->prepare("UPDATE categories SET `name` = :name, `avatar` = :avatar, `description` = :description, `status` = :status, `updated_at` = :updated_at 
         WHERE id = $id");
        $arr_update = [
            ':name' => $this->name,
            ':avatar' => $this->avatar,
            ':description' => $this->description,
            ':status' => $this->status,
            ':updated_at' => $this->updated_at,
        ];

        return $obj_update->execute($arr_update);
    }

    /**
     * Xóa bản ghi theo id truyền vào
     * @param $id
     * @return bool
     */
    public function delete($id)
    {
        $obj_delete = $this->connection
            ->prepare("DELETE FROM categories WHERE id = $id");
        $is_delete = $obj_delete->execute();
        //để đảm bảo toàn vẹn dữ liệu, sau khi xóa category thì cần xóa cả các product nào đang thuộc về category này
        $obj_delete_product = $this->connection
            ->prepare("DELETE FROM products WHERE category_id = $id");
        $obj_delete_product->execute();
        return $is_delete;
    }

    /**
     * Lấy tổng số bản ghi trong bảng categories
     * @return mixed
     */
    public function countTotal()
    {
        $obj_select = $this->connection->prepare("SELECT COUNT(id) FROM categories");
        $obj_select->execute();

        return $obj_select->fetchColumn();
    }

    public function getAllPagination($params = [])
    {
        $limit = $params['limit'];
        $page = $params['page'];
        $start = ($page - 1) * $limit;
        $obj_select = $this->connection->prepare("SELECT * FROM categories LIMIT $start, $limit");

        $obj_select->execute();
        $categories = $obj_select->fetchAll(PDO::FETCH_ASSOC);

        return $categories;
    }
}