<?php

require_once 'models/Model.php';

class Slide extends  Model {

    public $id;
    public $name;
    public $avatar;
    public $position;
    public $status;
    public $created_at;
    public $updated_at;

    public function insert() {
        $sql_insert ="INSERT INTO slides(`name`, `avatar`, `position`,`status`) VALUES (:name, :avatar, :position, :status)";
        $obj_insert = $this->connection->prepare($sql_insert);
        $arr_insert = [
            ':name' => $this->name,
            ':avatar' => $this->avatar,
            ':position' => $this->position,
            ':status' => $this->status
        ];
        return $obj_insert->execute($arr_insert);
    }

    public function countTotal()
    {
        $obj_select = $this->connection->prepare("SELECT COUNT(id) FROM slides");
        $obj_select->execute();

        return $obj_select->fetchColumn();
    }

    public function getAllPagination($params = [])
    {
        $limit = $params['limit'];
        $page = $params['page'];
        $start = ($page - 1) * $limit;
        $obj_select = $this->connection
            ->prepare("SELECT * FROM slides LIMIT $start, $limit");
        $obj_select->execute();
        $slides = $obj_select->fetchAll(PDO::FETCH_ASSOC);

        return $slides;
    }

    public function getById($id) {
        $sql_select_one = "SELECT * FROM slides WHERE id = $id";
        $obj_select_one = $this->connection
            ->prepare($sql_select_one);
        $obj_select_one->execute();
        $slide = $obj_select_one->fetch(PDO::FETCH_ASSOC);
        return $slide;
    }

    /**
     * Lấy slide theo id truyền vào
     * @param $id
     * @return array
     */
    public function getCategoryById($id)
    {
        $obj_select = $this->connection
            ->prepare("SELECT * FROM slides WHERE id = $id");
        $obj_select->execute();
        $slide = $obj_select->fetch(PDO::FETCH_ASSOC);

        return $slide;
    }

    /**
     * Update bản ghi theo id truyền vào
     * @param $id
     * @return bool
     */
    public function update($id)
    {
        $obj_update = $this->connection->prepare("UPDATE slides SET `name` = :name, `avatar` = :avatar, `position` = :position, `status` = :status, `updated_at` = :updated_at 
         WHERE id = $id");
        $arr_update = [
            ':name' => $this->name,
            ':avatar' => $this->avatar,
            ':position' => $this->position,
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
            ->prepare("DELETE FROM slides WHERE id = $id");
        $is_delete = $obj_delete->execute();
        return $is_delete;
    }
}

?>