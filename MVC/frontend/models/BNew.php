<?php
require_once 'models/Model.php';
class BNew extends Model {
    public function getAll() {
        $sql_select_all = "SELECT * FROM news WHERE `status` = 1";
        $obj_select_all = $this->connection->prepare($sql_select_all);
        $obj_select_all->execute();
        $Bnews = $obj_select_all->fetchAll(PDO::FETCH_ASSOC);
        return $Bnews;
    }

    public function getById($id)
    {
        $obj_select = $this->connection
            ->prepare("SELECT news.* FROM news WHERE news.id = $id");

        $obj_select->execute();
        return $obj_select->fetch(PDO::FETCH_ASSOC);
    }
}