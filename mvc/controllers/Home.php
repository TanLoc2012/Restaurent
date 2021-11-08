<?php

class Home extends Controller{

    public $categoryModel, $productMode, $allCategory;

    public function __construct(){
        $this->categoryModel = $this->model("CategoryModel");
        $this->allCategory = $this->categoryModel->getCategory();
        $this->productModel = $this->model("ProductModel");
    }

    function SayHi() {
        $allProduct = $this->productModel->getAllProduct();
        $this->view("home",[
            "render"=>"home",
            "countProduct"=>count($allProduct),
            "allCategory"=>$this->allCategory,
            "allProduct"=>$allProduct
        ]);   
    }

    public function productDetail($id){
        $productItem = $this->productModel->selectProduct($id);
        $category_id = $productItem["category_id"];
        $allProductCategory = $this->productModel->selectProductCategory($category_id);
        $productCategory = $this->categoryModel->selectCategory($category_id);
        $this->view("home",[
            "render"=>"productDetail",
            "productItem"=>$productItem,
            "productCategory"=>$productCategory,
            "allProductCategory"=>$allProductCategory,
            "category_id"=>$category_id,
            "allCategory"=>$this->allCategory
        ]);
    }

    public function productList($category_id = 0, $page = 1){
        if($category_id == 0){
            for($i=0;$i<count($this->allCategory);$i++){
                $category[$i] = $this->allCategory[$i]["id"];
            }
            $allProductCategory = $this->productModel->getAllProduct();
            $currentIndex = ($page-1) * 9;
            $countAllProduct = count($allProductCategory);
            $numPages = ceil($countAllProduct/9);
            $this->view("home",[
                "render"=>"productList",
                "allProductCategory"=>$allProductCategory,
                "allCategory"=>$this->allCategory,
                "category_id"=>$category_id,
                "numPages"=>$numPages,
                "currentIndex"=>$currentIndex,
                "pages"=>$page
            ]);
        }
        else {
            $allProductCategory = $this->productModel->selectProductCategory($category_id);
            $currentIndex = ($page-1) * 9;
            $countAllProduct = count($allProductCategory);
            $numPages = ceil($countAllProduct/9);
            $this->view("home",[
                "render"=>"productList",
                "allProductCategory"=>$allProductCategory,
                "allCategory"=>$this->allCategory,
                "category_id"=>$category_id,
                "numPages"=>$numPages,
                "currentIndex"=>$currentIndex,
                "pages"=>$page
            ]);
        }
    }

    public function card(){
        $cart = [];
        $num = [];
        if(isset($_COOKIE['cart'])) {
            $json = $_COOKIE['cart'];
            $cart = json_decode($json, true);
        }
        $idList = [];
        foreach ($cart as $item) {
            $idList[] = $item['id'];
            $num[] = $item['num'];
        }
        if(count($idList) > 0) {
            $idList = implode(',', $idList);
            //[2, 5, 6] => 2,5,6
            $orderDetails = $this->productModel->getProductOrder($idList);
        } else {
            $orderDetails = [];
        }
        
        if($orderDetails != NULL)
            $countOrder = count($orderDetails);
        else $countOrder = 0;
        $this->view("home",[
            "render"=>"card",
            "orderDetails"=>$orderDetails,
            "countOrder"=>$countOrder,
            "allCategory"=>$this->allCategory,
            "num"=>$num
        ]);
    }

    public function addToCart(){
        if(!empty($_POST)) {
            $action = getPost('action');
            $id = getPost('productId');
            $num = getPost('num');
            $priceProduct = getPost('priceProduct');     

            $cart = [];
            if(isset($_COOKIE['cart'])) {
                $json = $_COOKIE['cart'];
                $cart = json_decode($json, true);
            }
        
            switch ($action) {
                case 'add':
                    $isFind = false;
                    for ($i=0; $i < count($cart); $i++) { 
                        if($cart[$i]['id'] == $id) {
                            $cart[$i]['num'] += $num;
                            $cart[$i]['priceProduct'] = $priceProduct;
                            $isFind = true;
                            break;
                        }
                    }
        
                    if(!$isFind) {
                        $cart[] = [
                            'id'=>$id,
                            'num'=>$num,
                            'priceProduct'=> $priceProduct
                        ];
                    }
                    setcookie('cart', json_encode($cart), time() + 30*24*60*60, '/');
                    break;
            }
        }
    }

    public function deleteCart(){
        if(!empty($_POST)) {
            $action = getPost('action');
            $id = getPost('productId');

            $cart = [];
            if(isset($_COOKIE['cart'])) {
                $json = $_COOKIE['cart'];
                $cart = json_decode($json, true);
            }
        
            switch ($action) {
                case 'delete':
                    for ($i=0; $i < count($cart); $i++) { 
                        if($cart[$i]['id'] == $id) {
                            array_splice($cart, $i, 1);
                            break;
                        }
                    }
                    setcookie('cart', json_encode($cart), time() + 30*24*60*60, '/');
                break;
            }
        }
        echo $id;
    }

    public function contact(){

        $this->view("home",[
            "render"=>"contact",
            "allCategory"=>$this->allCategory
        ]);
    }

    public function gioithieu(){

        $this->view("home",[
            "render"=>"gioithieu",
            "allCategory"=>$this->allCategory
        ]);
    }
}

?>
