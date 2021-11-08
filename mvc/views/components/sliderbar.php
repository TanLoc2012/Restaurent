<div class="slider-with-banner">
                <div class="container">
                    <div class="row">
                        <!-- Begin Category Menu Area -->
                        <div class="col-lg-3">
                            <!--Category Menu Start-->
                            <div class="category-menu category-menu-2">
                                <div class="category-heading">
                                    <h2 class="categories-toggle"><span>Danh mục sản phẩm</span></h2>
                                </div>
                                <div id="cate-toggle" class="category-menu-list">
                                    <ul>
                                <?php
                                    $countCategory = count($data["allCategory"]);
                                    for($i=0;$i<$countCategory;$i++){
                                        echo   '<li><a href="http://localhost/Laptrinhweb/Home/productList/'.$data["allCategory"][$i]["id"].'">'.$data["allCategory"][$i]["name"].'</a></li>';
                                    }          
                                ?>
                                    </ul>
                                </div>
                            </div>
                            <!--Category Menu End-->
                        </div>
                        <!-- Category Menu Area End Here -->
                        <!-- Begin Slider Area -->
                        <div class="col-lg-6 col-md-8">
                            <div class="slider-area slider-area-3 pt-sm-30 pt-xs-30 pb-xs-30">
                                <div class="slider-active owl-carousel">
                                    <!-- Begin Single Slide Area -->
                                    <div class="single-slide align-center-left animation-style-01 bg-7">
                                        <div class="slider-progress"></div>
                                        <div class="slider-content">
                                            <h5>Sale Offer <span>-20% Off</span> This Week</h5>
                                            <h2>Chamcham Galaxy S9 | S9+</h2>
                                            <h3>Starting at <span>$589.00</span></h3>
                                            <div class="default-btn slide-btn">
                                                <a class="links" href="shop-left-sidebar.html">Shopping Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Slide Area End Here -->
                                    <!-- Begin Single Slide Area -->
                                    <div class="single-slide align-center-left animation-style-02 bg-8">
                                        <div class="slider-progress"></div>
                                        <div class="slider-content">
                                            <h5>Sale Offer <span>Black Friday</span> This Week</h5>
                                            <h2>Work Desk Surface Studio 2018</h2>
                                            <h3>Starting at <span>$1599.00</span></h3>
                                            <div class="default-btn slide-btn">
                                                <a class="links" href="shop-left-sidebar.html">Shopping Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Slide Area End Here -->
                                    <!-- Begin Single Slide Area -->
                                    <div class="single-slide align-center-left animation-style-01 bg-9">
                                        <div class="slider-progress"></div>
                                        <div class="slider-content">
                                            <h5>Sale Offer <span>-10% Off</span> This Week</h5>
                                            <h2>Phantom 4 Pro+ Obsidian</h2>
                                            <h3>Starting at <span>$809.00</span></h3>
                                            <div class="default-btn slide-btn">
                                                <a class="links" href="shop-left-sidebar.html">Shopping Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Slide Area End Here -->
                                </div>
                            </div>
                        </div>
                        <!-- Slider Area End Here -->
                        <!-- Begin Li Banner Area -->
                        <div class="col-lg-3 col-md-4 text-center pt-sm-30">
                            <div class="li-banner">
                                <a href="#">
                                    <img src="https://cdn.cellphones.com.vn/media/ltsoft/promotion/a52s-Rightbanner_Desktop_3_.png" alt="">
                                </a>
                            </div>
                            <div class="li-banner mt-15 mt-sm-30 mt-xs-25 mb-xs-5">
                                <a href="#">
                                    <img src="https://cdn.cellphones.com.vn/media/ltsoft/promotion/ip-12-r690-300-max.png" alt="">
                                </a>
                            </div>
                            <div class="li-banner mt-15 mt-sm-30 mt-xs-25 mb-xs-5">
                                <a href="#">
                                    <img src="https://cdn.cellphones.com.vn/media/ltsoft/promotion/lttt-right-690-300-max.png" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- Li Banner Area End Here -->
                    </div>
                </div>
            </div>
            <!-- Slider With Category Menu Area End Here -->
            <!-- Begin Li's Static Banner Area -->
            <div class="li-static-banner pt-20 pt-sm-30">
                <div class="container">
                    <div class="row">
                        <!-- Begin Single Banner Area -->
                        <div class="col-lg-12 col-md-12 text-center">
                            <div class="single-banner pb-xs-30">
                                <a href="#">
                                    <img src="https://cdn.cellphones.com.vn/media/wysiwyg/mb-ip-13-1200-75-max.png" alt="Li's Static Banner">
                                </a>
                            </div>
                        </div>
                        <!-- Single Banner Area End Here -->
                        <!-- Begin Single Banner Area -->
                        
                        <!-- Single Banner Area End Here -->
                    </div>
                </div>
            </div>