<?php
    require_once "mvc/utility/utility.php";
    if(isset($data["render"])){
        if($data["render"]=="quanlytaikhoan")
            $user = getUserToken(1);
        else $user = getUserToken();
    }
    else $user = getUserToken();
    if($user != null) {
        $fullname = $user["fullname"];
        $role_id = $user["role_id"];
    }
    if(isset($data["render"]) && isset($role_id)){
        if($data["render"]=="staff"){
            if($role_id != 3)
                header("Location: http://localhost/Laptrinhweb/Home");
        }
        else if($data["render"]=="chef"){
            if($role_id != 4)
                header("Location: http://localhost/Laptrinhweb/Home");
        }
    }
    $cart = [];
    if(isset($_COOKIE['cart'])) {
        $json = $_COOKIE['cart'];
        $cart = json_decode($json, true);
    }
    $count = 0;
    foreach ($cart as $item) {
        $count += $item['num'];
    }
?>

<!doctype html>
<html class="no-js" lang="zxx">
    
<!-- index28:48-->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Restaurent</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="http://localhost/Laptrinhweb/public/images/favicon.png">
        <!-- Main Style CSS -->
        <link rel="stylesheet" href="http://localhost/Laptrinhweb/public/css/style.css">
        <!-- Modernizr js -->
        <link href="http://localhost/Laptrinhweb/public/fontawesome-free-5.15.4-web/css/all.min.css" rel="stylesheet"> <!--load all styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
                integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </head>
    <body>
            <!-- Begin Header -->
            <nav id="navColor" class=" navbar fixed-top navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="http://localhost/Laptrinhweb/Home">Restaurent</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="http://localhost/Laptrinhweb/Home">Trang ch??? <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="http://localhost/Laptrinhweb/Home/productList" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                S???n ph???m
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="http://localhost/Laptrinhweb/Home/productList/0">T???t c???</a>
                            <?php
                                $countCategory = count($data["allCategory"]);
                                    for($i=0;$i<$countCategory;$i++){
                                        echo   '<a class="dropdown-item" href="http://localhost/Laptrinhweb/Home/productList/'.$data["allCategory"][$i]["id"].'">'.$data["allCategory"][$i]["name"].'</a>';
                                    }
                                        
                            ?>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/Laptrinhweb/Home/tintuc">Tin t???c</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="http://localhost/Laptrinhweb/Home/gioithieu">Gi???i thi???u</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="http://localhost/Laptrinhweb/Home/contact">Li??n h???</a>
                        </li>
                    </ul>
                </div>
                <div style="margin-right: 20px;" class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php
                        if(isset($fullname))
                            echo $fullname;
                        else echo '<i style="font-size: 27px;color:black" class="far fa-user"></i>';
                    ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <?php
                        if(!isset($fullname)){
                            echo '<a class="dropdown-item" href="http://localhost/Laptrinhweb/Login">????ng nh???p</a>';
                            echo '<a class="dropdown-item" href="http://localhost/Laptrinhweb/Register">????ng k??</a>';
                        }
                        else{
                            if($user["role_id"] == 2) echo '<a class="dropdown-item" href="http://localhost/Laptrinhweb/Admin">Qu???n l?? trang web</a>';
                            echo '<a class="dropdown-item" href="http://localhost/Laptrinhweb/Home/quanlytaikhoan">Qu???n l?? t??i kho???n</a>';
                            if($user["role_id"] == 3) echo '<a class="dropdown-item" href="http://localhost/Laptrinhweb/Home/staff">Qu???n l?? ????n h??ng</a>';
                            else echo '<a class="dropdown-item" href="http://localhost/Laptrinhweb/Home/quanlydonhang/'.$user["id"].'">Qu???n l?? ????n h??ng</a>';
                            echo '<a class="dropdown-item" href="http://localhost/Laptrinhweb/Login/UserLogout">????ng xu???t</a>';
                        } 
                            
                    ?>
                        
                    </div>
                </div>
                <div class="shopping_cart">
                    <a style="font-size: 30px;color:black" href="http://localhost/Laptrinhweb/Home/card"><i class="shopping_cart fas fa-shopping-cart"></i></a>
                    <span class="mount_product"><?=$count?></span>
                </div>
                
            </nav>
            <!-- End Header -->
           
   
