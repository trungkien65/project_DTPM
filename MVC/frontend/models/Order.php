<?php
require_once 'models/Model.php';
class Order extends Model {
  public $id;
  public $fullname;
  public $address;
  public $mobile;
  public $email;
  public $note;
  public $price_total;
  public $payment_status;

  public function insert(){

      $sql_insert = "INSERT INTO orders(fullname, address, mobile, email, note, price_total, payment_status) VALUES(:fullname, :address, :mobile, :email, :note, :price_total, :payment_status)";

      $obj_insert = $this->connection->prepare($sql_insert);

      $arr_insert = [
        ':fullname' => $this->fullname,
        ':address' => $this->address,
        ':mobile' => $this->mobile,
        ':email' => $this->email,
        ':note' => $this->note,
        ':price_total' => $this->price_total,
        ':payment_status' => $this->payment_status
      ];

      $obj_insert->execute($arr_insert);
      $order_id = $this->connection->lastInsertId();
      return $order_id;

  }

    public function getAll() {
        $sql_select_all = "SELECT * FROM orders WHERE `payment_status` = 1";
        $obj_select_all = $this->connection->prepare($sql_select_all);
        $obj_select_all->execute();
        $orders = $obj_select_all->fetchAll(PDO::FETCH_ASSOC);
        return $orders;
    }
}