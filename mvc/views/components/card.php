<div class="body-wrapper">
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-content">
                <ul>
                    <li><a href="http://localhost/Laptrinhweb/Home">Trang chủ</a></li>
                    <li class="active">Giỏ hàng</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Li's Breadcrumb Area End Here -->
    <!--Shopping Cart Area Strat-->
    <div class="Shopping-cart-area pt-60 pb-60">
        <div class="container">
            <div class="row">
                <div class="col-12">
                        <div class="table-content table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="li-product-remove">Xóa</th>
                                        <th class="li-product-thumbnail">Hình ảnh</th>
                                        <th class="cart-product-name">Sản phẩm</th>
                                        <th class="li-product-price">Giá</th>
                                        <th class="li-product-quantity">Số lượng</th>
                                        <th class="li-product-subtotal">Tổng tiền</th>
                                    </tr>
                                </thead>
                                <tbody>
                        <?php
                            $total = 0;
                            for($i=0;$i<$data["countOrder"];$i++){
                                $total += $data["num"][$i]*$data["orderDetails"][$i]["price"];
                            echo    '<tr>
                                        <td  class="li-product-remove"><button class="btn btn-danger" onclick="deleteCart('.$data["orderDetails"][$i]["id"].')">Xóa</button></td>
                                        <td  class="li-product-thumbnail"><a href="http://localhost/Laptrinhweb/Home/productDetail/'.$data["orderDetails"][$i]["id"].'"><img width="150" height="150"
                                                    src="'.$data["orderDetails"][$i]["thumbnail"].'" alt="Product Image"></a>
                                        </td>
                                        <td class="li-product-name"><a href="http://localhost/Laptrinhweb/Home/productDetail/'.$data["orderDetails"][$i]["id"].'">'.$data["orderDetails"][$i]["title"].'</a></td>
                                        <td class="li-product-price"><span class="amount">'.number_format($data["orderDetails"][$i]["price"]).' VNĐ</span></td>
                                        <td class="quantity cart-plus-minus-box">
                                           <span >'.$data["num"][$i].' </span>
                                    
                                        </td>
                                        <td class="product-subtotal"><span class="amount">'.number_format($data["num"][$i]*$data["orderDetails"][$i]["price"]).' VNĐ</span></td>
                                    </tr>';
                            }
                        ?>       
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="coupon-all">
                                    <div class="coupon">
                                        <input id="coupon_code" class="input-text" name="coupon_code" value=""
                                            placeholder="Mã giảm giá" type="text">
                                        <input class="button" name="apply_coupon" value="Áp dụng phiếu giảm giá" type="submit">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5 ml-auto">
                                <div class="cart-page-total">
                                    <h2  >Tổng tiền</h2>
                                    <ul>
                                        <li>Tổng tiền phải thanh toán: <span><?=number_format($total)?> VNĐ</span></li>
                                    </ul>
                                    <a href="#">Thanh toán</a>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>

<script type="text/javascript">
	function deleteCart(productId) {
		var action = "delete";
        $.ajax({
            url:"../home/deleteCart",
            method:"POST",
            data:{action:action ,productId:productId},
            success:function(data){
                location.reload();
            }
        });
	}
</script>