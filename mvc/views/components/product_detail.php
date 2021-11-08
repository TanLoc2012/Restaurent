<div style="margin-top:-20px" class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="http://localhost/Laptrinhweb/Home">Home</a></li>
                <a href="http://localhost/Laptrinhweb/Home/productList/<?php echo $data["category_id"];?>"><li class="active"><?php echo $data["productCategory"];?></li></a>
            </ul>   
        </div>
    </div>
</div>
<div class="content-wraper">
                <div class="container">
                    <div class="row single-product-area">
                        <div class="col-lg-5 col-md-6">
                           <!-- Product Details Left -->
                            <div class="product-details-left">
                                <div class="product-details-images slider-navigation-1">
                                    <div class="lg-image">
                                        <a class="popup-img venobox vbox-item" href="images/product/large-size/1.jpg" data-gall="myGallery">
                                            <img src="<?php echo $data["productItem"]["thumbnail"]; ?>" alt="product image">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!--// Product Details Left -->
                        </div>

                        <div class="col-lg-7 col-md-6">
                            <div class="product-details-view-content pt-60">
                                <div class="product-info">
                                    <h2><?php echo $data["productItem"]["title"]; ?></h2>
                                    <div class="rating-box pt-20">
                                        <ul class="rating rating-with-review-item">
                                            <li><i class="fa fa-star-o"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <div class="price-box pt-20">
                                        <span class="new-price new-price-2"><?php echo number_format($data["productItem"]["price"]); ?>VNĐ</span>
                                    </div>
                                    <div  class="price-box">
                                        <span style=" text-decoration: line-through;" class="old-price"><?php echo number_format($data["productItem"]["discount"])?> VNĐ</span>
                                    </div>
                                    <div class="product-desc">
                                        <p>
                                            <span><?php echo $data["productItem"]["description"]; ?>
                                            </span>
                                        </p>
                                    </div>
                                    </div>
                                    <div class="single-add-to-cart cart-quantity">
                                            <div class="quantity ">
                                                <label>Số lượng</label>
                                                <div class="cart-plus-minus">
                                                    <input class="cart-plus-minus-box" value="1" type="text">
                                                    <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                                    <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                                </div>
                                            </div>
                                            <button class="add-to-cart" onclick="addToCard(<?php echo $data['productItem']['id'].','.$data['productItem']['price'];?>)">Thêm vào giỏ hàng</button>
                                    </div>
                                    <div class="product-additional-info pt-25">
                                        <div class="product-social-sharing pt-25">
                                            <ul>
                                                <li class="facebook"><a href="#"><i class="fa fa-facebook"></i>Facebook</a></li>
                                                <li class="twitter"><a href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
                                                <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i>Google +</a></li>
                                                <li class="instagram"><a href="#"><i class="fa fa-instagram"></i>Instagram</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="block-reassurance">
                                        <ul>
                                            <li>
                                                <div class="reassurance-item">
                                                    <div class="reassurance-icon">
                                                        <i class="fa fa-check-square-o"></i>
                                                    </div>
                                                    <p>Security policy (edit with Customer reassurance module)</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="reassurance-item">
                                                    <div class="reassurance-icon">
                                                        <i class="fa fa-truck"></i>
                                                    </div>
                                                    <p>Delivery policy (edit with Customer reassurance module)</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="reassurance-item">
                                                    <div class="reassurance-icon">
                                                        <i class="fa fa-exchange"></i>
                                                    </div>
                                                    <p> Return policy (edit with Customer reassurance module)</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
            
            <!-- content-wraper end -->
            <!-- Begin Product Area -->
            <div class="product-area pt-35">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="li-product-tab">
                                <ul class="nav li-product-menu">
                                   <li><a class="active" data-toggle="tab" href="#description"><span>Mô tả</span></a></li>
                                   <li><a data-toggle="tab" href="#product-details"><span>Chi tiết sản phẩm</span></a></li>
                                </ul>               
                            </div>
                            <!-- Begin Li's Tab Menu Content Area -->
                        </div>
                    </div>
                    <div class="tab-content">
                        <div id="description" class="tab-pane active show" role="tabpanel">
                            <div class="product-description">
                                <span><?php echo $data["productItem"]["description"]; ?></span>
                            </div>
                        </div>
                        <div id="product-details" class="tab-pane" role="tabpanel">
                            <div class="product-details-manufacturer">
                                <a href="#">
                                    <img src="http://localhost/Laptrinhweb/public/images/product-details/1.jpg" alt="Product Manufacturer Image">
                                </a>
                                <p><span>Reference</span> demo_7</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product Area End Here -->
            <!-- Begin Li's Laptop Product Area -->
            <section class="product-area li-laptop-product pt-30 pb-50">
                <div class="container">
                    <div class="row">
                        <!-- Begin Li's Section Area -->
                        <div class="col-lg-12">
                            <div class="li-section-title">
                                <h2>
                                    <span>Các sản phẩm cùng danh mục</span>
                                </h2>
                            </div>
                            <div class="row">
                                <div class="product-active owl-carousel">
                            <?php
                            $countProduct = count($data["allProductCategory"]);
                            for($i=0;$i<$countProduct;$i++){
                                echo    '<div class="col-lg-12">
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
                                                                <a href="product-details.html">Graphic Corner</a>
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
                                                            <span class="new-price">'.$data["allProductCategory"][$i]["price"].' VNĐ</span>
                                                        </div>
                                                        <div  class="price-box">
                                                            <span class="old-price">'.number_format($data["allProductCategory"][$i]["discount"]).' VNĐ</span>
                                                        </div>
                                                    </div>
                                                    <div class="add-actions">
                                                        <ul class="add-actions-link">
                                                            <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                            <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                            <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single-product-wrap end -->
                                        </div>';
                                }
                            ?>
                                </div>
                            </div>
                        </div>
                        <!-- Li's Section Area End Here -->
                    </div>
                </div>
            </section>
<script type="text/javascript">
    function addToCard(productId, priceProduct) {
        var action = "add";
        $.ajax({
            url:"../../home/addToCart",
            method:"POST",
            data:{action:action ,productId:productId, num:1, priceProduct:priceProduct},
            success:function(data){
                location.reload();
            }
        });
    }
</script>