<div id="category_id1" class="content-wraper pt-60 pb-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 order-1 order-lg-2">
                <!-- Begin Li's Banner Area -->
                <div class="single-banner shop-page-banner">
                    <a href="#">
                        <img src="http://localhost/Laptrinhweb/public/images/bg-banner/2.jpg" alt="Li's Static Banner">
                    </a>
                </div>
                <!-- Li's Banner Area End Here -->
                <!-- shop-top-bar start -->
                <div class="shop-top-bar mt-30">
                    <div class="shop-bar-inner">
                        <div class="product-view-mode">
                            <!-- shop-item-filter-list start -->
                            <ul class="nav shop-item-filter-list" role="tablist">
                                <li class="active" role="presentation"><a aria-selected="true" class="active show"
                                        data-toggle="tab" role="tab" aria-controls="list-view" href="#list-view"><i
                                            class="fa fa-th-list"></i></a></li>
                            </ul>
                            <!-- shop-item-filter-list end -->
                        </div>
                        <div class="toolbar-amount">
                    <?php
                        $countCategoyCheck = 0;
                        $countProduct = count($data["allProductCategory"]);
                        echo '<span>Tổng cộng có '.$countProduct.' sản phẩm</span>';
                    ?>
                        </div>
                    </div>
                    <!-- product-select-box start -->
                    <div class="product-select-box">
                        <div class="product-short">
                            <p>Bộ lọc</p>
                            <select class="nice-select">
                                <option value="sales">Name (A - Z)</option>
                                <option value="sales">Name (Z - A)</option>
                                <option value="rating">Price (Low &gt; High)</option>
                                <option value="date">Rating (Lowest)</option>
                            </select>
                        </div>
                    </div>
                    <!-- product-select-box end -->
                </div>
                <!-- shop-top-bar end -->
                <!-- shop-products-wrapper start -->
                <div class="shop-products-wrapper">
                    <div class="tab-content">
                        <div id="grid-view" class="tab-pane fade product-list-view active show" role="tabpanel">
                            <div class="product-area shop-product-area">
                                <div class="row">
                        <?php
                            for($i=$data["currentIndex"];$i<$data["currentIndex"]+9 && $i<$countProduct;$i++){
                        echo    '<div class="col-lg-4 col-md-4 col-sm-6 mt-40">
                                    <!-- single-product-wrap start -->
                                    <div class="single-product-wrap">
                                        <div class="product-image">
                                            <a href="http://localhost/Laptrinhweb/Home/productDetail/'.$data["allProductCategory"][$i]["id"].'">
                                                <img src="'.$data["allProductCategory"][$i]["thumbnail"].'" alt="Product Image">
                                            </a>
                                            <span class="sticker">New</span>
                                        </div>
                                        <div class="product_desc">
                                            <div class="product_desc_info">
                                                <div class="product-review">
                                                    <h5 class="manufacturer">
                                                        <a href="http://localhost/Laptrinhweb/Home/productDetail/'.$data["allProductCategory"][$i]["id"].'">Graphic Corner</a>
                                                    </h5>
                                                    <div class="rating-box">
                                                        <ul class="rating">
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <h4><a class="product_name" href="http://localhost/Laptrinhweb/Home/productDetail/'.$data["allProductCategory"][$i]["id"].'">'.$data["allProductCategory"][$i]["title"].'</a></h4>
                                                <div class="price-box">
                                                    <span class="new-price">'.number_format($data["allProductCategory"][$i]["price"]).' VNĐ</span>
                                                </div>
                                                <div class="price-box">
                                                    <span class="old-price">'.number_format($data["allProductCategory"][$i]["discount"]).' VNĐ</span>
                                                </div>
                                            </div>
                                            <div class="add-actions">
                                                <ul class="add-actions-link">
                                                    <li onclick="addToCard('.$data["allProductCategory"][$i]["id"].','.$data["allProductCategory"][$i]["price"].')" class="add-cart active">Thêm vào giỏ</li>

                                                    <li><a href="#" title="quick view" class="quick-view-btn"
                                                            data-toggle="modal" data-target="#exampleModalCenter"><i
                                                                class="fa fa-eye"></i></a></li>
                                                    <li><a class="links-details" href="wishlist.html"><i
                                                                class="fa fa-heart-o"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>';
                            }
                        ?>
                                </div>
                            </div>
                        </div>
                    
                        <div class="paginatoin-area">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <ul class="pagination-box">
                        <?php
                        if($data["numPages"]>1){
                            if($data["pages"]==1){
                                echo    '<li><a href="http://localhost/Laptrinhweb/Home/productList/'.$data["category_id"].'/1" class="Previous"><i class="fa fa-chevron-left"></i> Previous</a></li>';
                            }
                            else echo    '<li><a href="http://localhost/Laptrinhweb/Home/productList/'.$data["category_id"].'/'.($data["pages"]-1).'" class="Previous"><i class="fa fa-chevron-left"></i> Previous</a></li>';

                            for($i=1; $i<=$data["numPages"];$i++){
                                if($i == $data["pages"]){
                                    echo '<li class="active"><a href="http://localhost/Laptrinhweb/Home/productList/'.$data["category_id"].'/'.$i.'">'.$i.'</a></li>';
                                }
                                else echo '<li><a href="http://localhost/Laptrinhweb/Home/productList/'.$data["category_id"].'/'.$i.'">'.$i.'</a></li>';
                            }
                                
                            if($data["pages"] == $data["numPages"]){
                                echo '<li><a href="http://localhost/Laptrinhweb/Home/productList/'.$data["category_id"].'/'.$data["numPages"].'" class="Next"> Next <i class="fa fa-chevron-right"></i></a></li>';
                            }
                            else echo '<li><a href="http://localhost/Laptrinhweb/Home/productList/'.$data["category_id"].'/'.($data["pages"]+1).'" class="Next "> Next <i class="fa fa-chevron-right"></i></a></li>';
                        }
                        ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                                
                    </div>
                </div>
                <!-- shop-products-wrapper end -->
            </div>
            <div class="col-lg-3 order-2 order-lg-1">
                <!--sidebar-categores-box start  -->
                <div class="sidebar-categores-box mt-sm-30 mt-xs-30">
                    <div class="sidebar-title">
                        <h2>
                    <?php 
                        $countCategory = count($data["allCategory"]);
                        for($i=0;$i<$countCategory;$i++){
                                    if($data["category_id"] == $data["allCategory"][$i]["id"])
                                        echo $data["allCategory"][$i]["name"]; 
                    }?>
                        </h2>
                    </div>
                    <!-- category-sub-menu start -->
                    <!-- category-sub-menu end -->
                </div>
                <!--sidebar-categores-box end  -->
                <!--sidebar-categores-box start  -->
                <div class="sidebar-categores-box">
                    <div class="sidebar-title">
                        <h2>Filter By</h2>
                    </div>
                    <!-- btn-clear-all start -->
            <?php
                if($data["category_id"]==0)
                    echo '<button class="btn-clear-all mb-sm-30 mb-xs-30">Tất cả sản phẩm</button>';
                else {
                    for($i=0; $i<$countCategory;$i++){
                    if($data["category_id"] == $data["allCategory"][$i]["id"]) 
                        echo '<button class="btn-clear-all mb-sm-30 mb-xs-30">'.$data["allCategory"][$i]["name"].'</button>';
                    } 
                }
            ?>
                    <!-- btn-clear-all end -->
                    <!-- filter-sub-area start -->
                    <div class="filter-sub-area pt-sm-10 pt-xs-10">
                        <h5 class="filter-sub-titel">Danh mục sản phẩm</h5>
                        <div class="categori-checkbox">
                            <form >
                                <ul>
                                <li><input onclick= checkedCategory(0) <?php if($data["category_id"]==0) echo 'checked';?> type="checkbox" name="product-category">
                                    <a  href="http://localhost/Laptrinhweb/Home/productList/">Tất cả sản phẩm</a>
                                </li>
                    <?php
                        for($i=0; $i<$countCategory;$i++){
                            if($data["category_id"] == $data["allCategory"][$i]["id"]){
                                $checkedCategory[$countCategoyCheck] = $data["category_id"];
                                ++$countCategoyCheck;
                                echo '<li><input checked type="checkbox" name="product-category">
                                        <a href="http://localhost/Laptrinhweb/Home/productList/'.$data["allCategory"][$i]["id"].'">'.$data["allCategory"][$i]["name"].'</a>
                                      </li>';
                            }
                            else {
                                echo '<li><input onclick= checkedCategory('.$data["category_id"];
                                for($k=1;$k<$countCategoyCheck;$k++)
                                    echo ','.$checkedCategory[$k];   
                                echo ') type="checkbox" name="product-category"><a href="http://localhost/Laptrinhweb/Home/productList/'.$data["allCategory"][$i]["id"].'">'.$data["allCategory"][$i]["name"].'</a></li>';
                            }
                        }              
                    ?>           
                                </ul>
                            </form>
                        </div>
                    </div>
                    <!-- filter-sub-area end -->
                    <!-- filter-sub-area start -->
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function addToCard(productId, priceProduct) {
        var action = "add";
        $.ajax({
            url:"http://localhost/Laptrinhweb/home/addToCart",
            method:"POST",
            data:{action:action ,productId:productId, num:1, priceProduct:priceProduct},
            success:function(data){
                location.reload();
            }
        });
    }
</script>