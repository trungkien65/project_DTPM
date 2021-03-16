<?php
require_once 'models/Model.php';
class Order extends  Model{

    public $order_id;
    public $product_id;
    public $quantity;
    public $id;
    public $user_id;
    public $fullname;
    public $address;
    public $moblie;
    public $email;
    public $note;
    public $price_total;
    public $payment_status;

    public function __construct() {
        parent::__construct();
        if (isset($_GET['fullname']) && !empty($_GET['fullname'])) {
            $fullname = addslashes($_GET['fullname']);
            $this->str_search .= " AND orders.fullname LIKE '%$fullname%'";
        }
    }

    public function getAll() {
        $obj_select = $this->connection
            ->prepare("SELECT orders.id, order_details.quantity, products.title
FROM ((orders INNER JOIN order_details ON orders.id = order_details.order_id)
INNER JOIN products on products.id = order_details.product_id)
ORDER BY orders.updated_at DESC,orders.created_at DESC");
        $obj_select->execute();
        $orders = $obj_select->fetchAll(PDO::FETCH_ASSOC);

        return $orders;
    }

    public function getAllPagination($params = []) {
        $limit = $params['limit'];
        $page = $params['page'];        $start = ($page - 1) * $limit;
        $obj_select = $this->connection
            ->prepare("SELECT DISTINCT orders.*
FROM ((orders INNER JOIN order_details ON orders.id = order_details.order_id)
INNER JOIN products on products.id = order_details.product_id)
ORDER BY orders.updated_at DESC,orders.created_at DESC LIMIT $start, $limit");
        $obj_select->execute();
        $orders = $obj_select->fetchAll(PDO::FETCH_ASSOC);

        return $orders;
    }

    public function countTotal()
    {
        $obj_select = $this->connection->prepare("SELECT COUNT(id) FROM orders");
        $obj_select->execute();

        return $obj_select->fetchColumn();
    }

    public function getById($id) {
        $sql_select_one = "SELECT * FROM orders WHERE id = $id";
        $obj_select_one = $this->connection
            ->prepare($sql_select_one);
        $obj_select_one->execute();
        $order = $obj_select_one->fetch(PDO::FETCH_ASSOC);
        return $order;
    }

    public function getProductById() {
        $obj_select = $this->connection
            ->prepare("SELECT orders.id, order_details.quantity, products.title, products.avatar
FROM ((orders INNER JOIN order_details ON orders.id = order_details.order_id)
INNER JOIN products on products.id = order_details.product_id)
ORDER BY orders.updated_at DESC,orders.created_at DESC");
        $obj_select->execute();
        $products = $obj_select->fetchAll(PDO::FETCH_ASSOC);
        return $products;
    }

    public function update($id)
    {
        $obj_update = $this->connection
            ->prepare("UPDATE orders SET fullname=:fullname, address=:address, mobile=:mobile,email=:email, updated_at=:updated_at WHERE id = $id
                                update order_details set quantity=:quantity where order_details.order_id = $id");
        $arr_update = [
            ':fulllname' => $this->fullname,
            ':address' => $this->address,
            ':mobile' => $this->moblie,
            ':email' => $this->email,
            ':quantity' => $this->quantity,
            ':updated_at' => $this->updated_at,
        ];
        return $obj_update->execute($arr_update);
    }
    public function delete($id)
    {
        /*$obj_delete = $this->connection->prepare("DELETE FROM orders WHERE id = $id");
        $is_delete = $obj_delete->execute();*/
        $obj_delete_orderdetail = $this->connection->prepare("DELETE FROM order_details WHERE order_id = $id");
        return $obj_delete_orderdetail->execute();
       //  return $is_delete;
    }

    public function deleteOrders($id)
    {
        $obj_delete = $this->connection->prepare("DELETE FROM orders WHERE id = $id");
        $is_delete = $obj_delete->execute();
    }
}
?>
