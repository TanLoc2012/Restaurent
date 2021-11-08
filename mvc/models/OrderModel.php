<?php
require_once "mvc/utility/utility.php";
class OrderModel extends DB{
    
    public function getAllOrder(){
        $sql = "select * from orders order by status asc, order_date desc";
        $data = $this->executeResult($sql);
        return $data;
    }

    public function getDetailOrder($idList){
        $sql = "select order_details.*, product.title, product.thumbnail from order_details left join product on product.id = order_details.product_id where order_details.order_id in $idList";
        $data = $this->executeResult($sql);
        return $data;
    }

    public function getOrderItem($id){
        $sql = "select * from orders where id = $id";
        $orderItem = $this->executeResult($sql, true);
        return $orderItem;
    }

    public function updateStatus($id, $status){
        $sql = "update orders set status = $status where id = $id";
        $this->execute($sql);
    }
}


