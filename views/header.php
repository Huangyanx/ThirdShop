<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        function ActiveCssClass($url){
            if($_SERVER["REQUEST_URI"]==$url) {
                echo   "active_url";
            }else{
                echo  "";
            }
        }
    ?>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="Font-Awesome-master/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap-3.3./css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/common.css">
    <script src="js/jQuery2.14.js"></script>
    <script src="bootstrap-3.3./js/bootstrap.min.js"></script>
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7./html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4./respond.min.js"></script>
    <![endif]-->


</head>
<body data-spy="scroll" >
<!-- 头部 -->
<header >
    <div class="header_box row">
        <div class="container">
            <div class="container_box">
                <div class="col-lg-4 header_right ">
                    Welcome visitor you can
                    <a href="./login.php" class="<?php  ActiveCssClass("/login.php")?>"> Login or Create an account</a>
                </div>

                <div class="pull-right one header_right_list hidden-sm hidden-xs">
                    <div class="list dropdown">
                       <span class="name" >
                           SETTINGS
                       </span>
                        <span class="drop_down" data-toggle="dropdown">
                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                       </span>
                        <!--二级菜单-->
                        <ul class="dropdown-menu">
                            <li><i class="fa fa-heart" aria-hidden="true"></i>Wish List</li>
                            <li><i class="fa fa-retweet" aria-hidden="true"></i>Compare</li>
                            <li><i class="fa fa-expeditedssl" aria-hidden="true"></i>Sign in</li>
                            <li><i class="fa fa-user" aria-hidden="true"></i>My Account</li>
                            <li><i class="fa fa-share" aria-hidden="true"></i>Checkout</li>
                        </ul>
                    </div>
                </div>

                <div class="pull-right two header_right_list hidden-sm hidden-xs">
                    <div class="list dropdown">
                        <span class="name">$USD</span>
                        <span class="drop_down" data-toggle="dropdown">
                           <i class="fa fa-angle-down" aria-hidden="true"></i>
                       </span>

                        <!--二级菜单-->
                        <ul class="dropdown-menu">
                            <li class="cur">Dollar(USSD)</li>
                            <li> Euros (EUR)</li>
                        </ul>
                    </div>
                </div>

                <div class="pull-right three header_right_list hidden-sm hidden-xs">
                    <div class="list dropdown">
                        <span>
                            <img src="./images/meiguo.jpg">
                        </span>
                        <span class="name">ENGLISH</span>
                        <span class="drop_down" data-toggle="dropdown">
                           <i class="fa fa-angle-down" aria-hidden="true"></i>
                       </span>

                        <!--二级菜单-->
                        <ul class="dropdown-menu">
                            <li class="cur"><img src="./images/meiguo.jpg">English</li>
                            <li><img src="./images/Français.jpg">Français</li>
                            <li><img src="./images/Italiano.jpg">Italiano</li>
                            <li><img src="./images/Español.jpg">Español</li>
                            <li><img src="./images/Persian.jpg">Persian</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!--logo图片部分-->
    <div class="header_main">
        <div class="container">
            <div class="col-lg-3 logo_box ">
                <a href="./index.php"><img src="./images/logo.png" alt=""></a>
            </div>

            <!--右边上部分-->
            <div class="col-lg-9">
                <div class="up_header_box">
                    <ul class="list-inline hidden-sm hidden-xs">
                        <li class="<?php  (ActiveCssClass("/index.php")||ActiveCssClass("/"))?"active_url":"";?>">
                            <a href="./index.php">home</a>
                        </li>
                        <!--二级菜单容器-->
                        <li class="parent dropdown" hover="1">
                            <a href="javascript:;" data-toggle="dropdown">
                                Snacks
                                <b class="tu">
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </b>
                            </a>
                            <!--二级菜单-->
                            <div  class="dropdown-menu">
                                <span>Link HTML</span>
                                <div class="down_list">
                                    <ul class="down_list_ul">
                                        <li>Ipsum dolor sit</li>
                                        <li>Placerat dapibus</li>
                                        <li>Vitae vestibulum</li>
                                        <li>Fusce lobortis</li>
                                        <li>Mauris viverra</li>
                                        <li>Vitae vestibulum</li>
                                        <li>Fusce lobortis</li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <!--二级菜单容器-->
                        <li class="parent dropdown" hover="1">
                            <a data-toggle="dropdown">
                                <a  class="inli <?php  ActiveCssClass("/fruitlist.php")?>" href="./fruitlist.php">
                                    Fruit
                                    <b class="tu">
                                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                                    </b>
                                </a>
                            </a>
                            <!--二级菜单-->
                            <div  class="dropdown-menu media_width_box">
                                <div class=" col-lg-8">
                                    <div class=" col-lg-4">
                                        <span>Link HTML</span>
                                        <div class="down_list">
                                            <ul class="down_list_ul">
                                                <li>Ipsum dolor sit</li>
                                                <li>Placerat dapibus</li>
                                                <li>Vitae vestibulum</li>
                                                <li>Fusce lobortis</li>
                                                <li>Mauris viverra</li>
                                                <li>Vitae vestibulum</li>
                                                <li>Fusce lobortis</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class=" col-lg-4">
                                        <span>Link HTML</span>
                                        <div class="down_list">
                                            <ul class="down_list_ul">
                                                <li>Ipsum dolor sit</li>
                                                <li>Placerat dapibus</li>
                                                <li>Vitae vestibulum</li>
                                                <li>Fusce lobortis</li>
                                                <li>Mauris viverra</li>
                                                <li>Vitae vestibulum</li>
                                                <li>Fusce lobortis</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class=" col-lg-4">
                                        <span>Link HTML</span>
                                        <div class="down_list">
                                            <ul class="down_list_ul">
                                                <li>Ipsum dolor sit</li>
                                                <li>Placerat dapibus</li>
                                                <li>Vitae vestibulum</li>
                                                <li>Fusce lobortis</li>
                                                <li>Mauris viverra</li>
                                                <li>Vitae vestibulum</li>
                                                <li>Fusce lobortis</li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                                <div class=" col-lg-4">
                                    <span>VIDEO WIDGET</span>
                                    <div class="down_list">
                                        <img src="./images/yingtao.jpg" class=" img_yingtao">
                                    </div>
                                </div>

                            </div>
                        </li>

                        <!--二级菜单容器-->
                        <li class="parent dropdown" hover="1">
                            <a href="javascript:;"  data-toggle="dropdown">
                                Beverage
                                <b class="tu">
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </b>
                            </a>
                            <!--二级菜单-->
                            <div  class="dropdown-menu">
                                <span>Link HTML</span>
                                <div class="down_list">
                                    <ul class="down_list_ul">
                                        <li>Ipsum dolor sit</li>
                                        <li>Placerat dapibus</li>
                                        <li>Vitae vestibulum</li>
                                        <li>Fusce lobortis</li>
                                        <li>Mauris viverra</li>
                                        <li>Vitae vestibulum</li>
                                        <li>Fusce lobortis</li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <!--二级菜单容器-->
                        <li class="parent dropdown" hover="1">
                            <a   data-toggle="dropdown" >
                                <a  class="inli  <?php  ActiveCssClass("/newslist.php")?>" href="./newslist.php">
                                    news
                                    <b class="tu">
                                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                                    </b>
                                </a>
                            </a>
                            <!--二级菜单-->
                            <div  class="dropdown-menu">
                                <span>Link HTML</span>
                                <div class="down_list">
                                    <ul class="down_list_ul">
                                        <li>Ipsum dolor sit</li>
                                        <li>Placerat dapibus</li>
                                        <li>Vitae vestibulum</li>
                                        <li>Fusce lobortis</li>
                                        <li>Mauris viverra</li>
                                        <li>Vitae vestibulum</li>
                                        <li>Fusce lobortis</li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li class="parent">
                            <a href="javascript:;">
                                Beverage
                            </a>
                        </li>

                    </ul>
                </div>

                <!--右边下部分(搜索)-->
                <div class="bottom_header_box inner">

                    <div class="col-lg-8 sousuo">
                        <form class="sousuo_box">
                            <div class="form-group search_box">

                                <div class="col-lg-3 input-group-select">

                                    <div>
                                        <!--<input type="text" class="form-control" placeholder="All Categories">-->
                                        <select name="category_filter" id="category_filter">
                                            <option value="0" selected="selected">All Categories</option>
                                            <option value="2">-- Home</option>
                                            <option value="15">
                                                ---- Delicious Snacks
                                            </option>
                                            <option value="29">
                                                ------ Trends
                                            </option>

                                            <option value="32">
                                                ------ Casual Outfits
                                            </option>

                                            <option value="30">
                                                ------ Street Style
                                            </option>

                                            <option value="60">
                                                ------ Designer
                                            </option>

                                            <option value="31">
                                                ------ Dresses
                                            </option>

                                            <option value="12">
                                                ------ Accessories
                                            </option>

                                            <option value="14">
                                                ---- Fresh Fruit
                                            </option>
                                            <option value="24">
                                                ------ Make up
                                            </option>

                                            <option value="25">
                                                ------ Cleanser
                                            </option>

                                            <option value="26">
                                                ------ Skin Care
                                            </option>

                                            <option value="33">
                                                ------ Hair Care
                                            </option>

                                            <option value="61">
                                                ------ Perfume
                                            </option>

                                            <option value="34">
                                                ------ Accessories
                                            </option>

                                            <option value="13">
                                                ---- Imported Food
                                            </option>
                                            <option value="16">
                                                ------ Boots
                                            </option>
                                            <option value="19">
                                                -------- Nam vulputate
                                            </option>

                                            <option value="20">
                                                -------- Quisque aliquet
                                            </option>

                                            <option value="17">
                                                ------ Sandals
                                            </option>

                                            <option value="18">
                                                ------ Pumps &amp; Heels
                                            </option>

                                            <option value="35">
                                                ------ Flats
                                            </option>

                                            <option value="36">
                                                ------ Sneakers
                                            </option>

                                            <option value="62">
                                                ------ Platform
                                            </option>

                                            <option value="28">
                                                ---- Beverage
                                            </option>
                                            <option value="37">
                                                ------ Mobiles
                                            </option>

                                            <option value="38">
                                                ------ Tablets
                                            </option>

                                            <option value="39">
                                                ------ Earphones
                                            </option>

                                            <option value="40">
                                                ------ Memory Cards
                                            </option>

                                            <option value="41">
                                                ------ Batteries
                                            </option>

                                            <option value="63">
                                                ------ Accessories
                                            </option>

                                            <option value="42">
                                                ---- Specialty Deli
                                            </option>
                                            <option value="43">
                                                ------ Laundry
                                            </option>

                                            <option value="44">
                                                ------ Dishwasher
                                            </option>

                                            <option value="45">
                                                ------ Cooking
                                            </option>

                                            <option value="46">
                                                ------ Refrigeration
                                            </option>

                                            <option value="47">
                                                ------ Floorcare
                                            </option>

                                            <option value="64">
                                                ------ Air Conditioner
                                            </option>
                                        </select>
                                    </div>

                                    <!-- <b class="tu">
                                         <i class="fa fa-angle-down" aria-hidden="true"></i>
                                     </b>-->
                                </div>

                                <div class="col-lg-7">
                                    <input type="text" class="form-control" placeholder="Search...">
                                </div>
                                <div class="col-lg-2 spic">
                                    <button  type="button" class=" btn  btn-primary btn-fruit-topic">
                                        <span class="glyphicon glyphicon-search"></span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-lg-4 shopping">
                        <div class="shopping_box ">
                            <a href="./goodscart.php">
                                <img src="./images/shopping.png">
                                <span>My Cart 2 item</span>
                                <b class="tu">
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </b>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- 头部 end-->