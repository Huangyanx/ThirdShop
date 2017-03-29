


<?php include("./views/header.php")?>
    <title>购物车</title>
    <link href="css/goodscart.css" rel="stylesheet">
<!---------------头部------------------>
    <!--显示对应页面，跳转-->
    <div class="container">
        <div class="breadcrumb">
            <a href="index.php"><i class="fa fa-home"><span>home</span></i></a>
            <span>/</span>
            <a href="#" class="cur_page">购物车</a>
        </div>
    </div>
    <div class="goodscart_summary">
        <div class="goodscart_cont container">
            <h2>Shopping-cart summary <span class="header_counter">Your shopping cart contains: <span class="total_count">2</span>  Products</span></h2>
        </div>

    </div>
    <div class="goodscart_main main_content_bc container">

            <ul class="pay_step">
                <li>1.Summary</li>
                <li>2.Sign in</li>
                <li>3.Address</li>
                <li>4.Shipping</li>
                <li>5.Payment</li>
            </ul>
            <div class="cart_goods_list">
                        <table class="goods table-bordered">
                            <tr>
                                <th>Product</th>
                                <th>Description</th>
                                <th>Unit price</th>
                                <th>Qty</th>
                                <th>Total</th>
                            </tr>
                            <tr>
                                <td>
                                    <a href=""><img src="images/289-home_default.jpg"></a>
                                </td>
                                <td>
                                    <p>Bean Bear opening hazelnut 208g/ bag nuts snacks specialty new nuts </p>
                                    <p>Sweet hazelnut</p>
                                    <p>Size : M, Color : Black</p>

                                </td>
                                <td><span class="money">$<span class=" unit_price">67.00</span></span></td>
                                <td>
                                    <span class="reduce btn cout">-</span>
                                    <input class="count" value="1">

                                    <span class="add btn cout">+</span>
                                </td>
                                <td> <span class="money ">$<span class=" total_mo">67.00</span></span></td>

                            </tr>
                            <tr>
                                <td>
                                    <a href=""><img src="images/289-home_default.jpg"></a>
                                </td>
                                <td>
                                    <p>Bean Bear opening hazelnut 208g/ bag nuts snacks specialty new nuts </p>
                                    <p>Sweet hazelnut</p>
                                    <p>Size : M, Color : Black</p>

                                </td>
                                <td><span class="money">$<span class=" unit_price">67.00</span></span></td>
                                <td>
                                    <span class="reduce btn cout">-</span>
                                    <input class="count" value="1">

                                    <span class="add btn cout">+</span>
                                </td>
                                <td> <span class="money ">$<span class=" total_mo">67.00</span></span></td>

                            </tr>
                        </table>
                        <div class="total-money">
                            <div class="col-lg-8"></div>
                            <div class="col-lg-4 bott">
                                <div class="row">
                                    <div class="cart_total_price col-lg-5 total">
                                        Total products
                                    </div>
                                    <div class="col-lg-7 money total">
                                        $<span class=" total_money">134.00</span>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="cart_total_price col-lg-5 total">
                                        Total shipping
                                    </div>
                                    <div class="col-lg-7 money total">
                                        $<span class="ship">10.00</span>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="cart_total_price col-lg-5 total">
                                        Total
                                    </div>
                                    <div class="col-lg-7 money total">
                                        $<span class=" pay_total_money ">144.00</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <form action="#">
                                        <input type="submit" class="pay" value="paymoney">
                                    </form>
                                </div>
                            </div>

                        </div>




            </div>

    </div>

    <!------------------------底部（footer）------------------------->


<script src="../js/goodscart.js"></script>
<?php include("./views/footer.php")?>