<?php
require_once 'models/Model.php';
class Category extends Model {

  public function getAll() {
    $sql_select_all = "SELECT * FROM categories WHERE `status` = 1";
    $obj_select_all = $this->connection->prepare($sql_select_all);
    $obj_select_all->execute();
    $categories = $obj_select_all->fetchAll(PDO::FETCH_ASSOC);
    return $categories;
  }
//    public function getById($id)
//    {
//        $obj_select = $this->connection
//            ->prepare("SELECT products.*, categories.name AS category_name FROM products
//          INNER JOIN categories ON products.category_id = categories.id WHERE products.id = $id");
//
//        $obj_select->execute();
//        return $obj_select->fetch(PDO::FETCH_ASSOC);
//    }
}