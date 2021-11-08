<?php
require_once "mvc/utility/utility.php";
class OrderAdmin extends Controller{

    public $orderModel;

    public function __construct() {
        $this->orderModel = $this->model("OrderModel");
    }

    public function SayHi(){
        $allOrder = $this->orderModel->getAllOrder();
        $this->view("order/orderAdmin",[
            "allOrder"=> $allOrder
        ]);
    }

    public function detailOrder($id) {
        $detailorder = $this->orderModel->getDetaiOrder($id);
        $orderItem = $this->orderModel->getOrderItem($id);
        $this->view("order/detailOrder",[
            "detailOrder"=>$detailorder,
            "orderItem"=>$orderItem
        ]);
    }

    public function updateStatusOrder($id, $status){
        echo $id.' '.$status;
        $this->orderModel->updateStatus($id, $status);
        header('Location: http://localhost/Laptrinhweb/OrderAdmin');
    }

}

?>