<?php
//models/Supplier
require_once 'models/Model.php';
class Supplier extends Model {

    public $id;
    public $name;
    public $address;
    public $phone;
    public $email;
    public $description;
    public $created_at;
    public $updated_at;


    public function insert() {
        $sql_insert =
            "INSERT INTO suppliers(`name`, `address`, `phone`, `email`, `description`)
VALUES (:name, :address, :phone, :email, :description)";

        $obj_insert = $this->connection->prepare($sql_insert);
        $arr_insert = [
            ':name' => $this->name,
            ':address' => $this->address,
            ':phone' => $this->phone,
            ':email' => $this->email,
            ':description' => $this->description
        ];
        return $obj_insert->execute($arr_insert);
    }

    /**
     *
     * @param $params array
     * @return array
     */
    public function getAll($params = []) {
        $str_search = 'WHERE TRUE';
        if (isset($params['name']) && !empty($params['name'])) {
            $name = $params['name'];

            $str_search .= " AND `name` LIKE '%$name%'";
        }

        $sql_select_all = "SELECT * FROM suppliers $str_search";
        //cbi đối tượng truy vấn
        $obj_select_all = $this->connection
            ->prepare($sql_select_all);
        $obj_select_all->execute();
        $suppliers = $obj_select_all
            ->fetchAll(PDO::FETCH_ASSOC);
        return $suppliers;
    }

    public function getById($id) {
        $sql_select_one = "SELECT * FROM suppliers WHERE id = $id";
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
    public function getSupplierById($id)
    {
        $obj_select = $this->connection
            ->prepare("SELECT * FROM suppliers WHERE id = $id");
        $obj_select->execute();
        $supplier = $obj_select->fetch(PDO::FETCH_ASSOC);

        return $supplier;
    }

    /**
     * Update bản ghi theo id truyền vào
     * @param $id
     * @return bool
     */
    public function update($id)
    {
        $obj_update = $this->connection->prepare("UPDATE suppliers SET `name` = :name, `address` = :address, `phone` = :phone,`email` = :email,
 `description` = :description, `updated_at` = :updated_at WHERE id = $id");
        $arr_update = [
            ':name' => $this->name,
            ':address' => $this->address,
            ':phone' => $this->phone,
            ':email' => $this->email,
            ':description' => $this->description,
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
            ->prepare("DELETE FROM suppliers WHERE id = $id");
        $is_delete = $obj_delete->execute();
        return $is_delete;
    }

    /**
     * Lấy tổng số bản ghi trong bảng suppliers
     * @return mixed
     */
    public function countTotal()
    {
        $obj_select = $this->connection->prepare("SELECT COUNT(id) FROM suppliers");
        $obj_select->execute();

        return $obj_select->fetchColumn();
    }

    public function getAllPagination($params = [])
    {
        $limit = $params['limit'];
        $page = $params['page'];
        $start = ($page - 1) * $limit;
        $obj_select = $this->connection->prepare("SELECT * FROM suppliers LIMIT $start, $limit");

        $obj_select->execute();
        $suppliers = $obj_select->fetchAll(PDO::FETCH_ASSOC);

        return $suppliers;
    }
}