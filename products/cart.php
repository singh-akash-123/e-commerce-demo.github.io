<?php
    session_start();
    $connection = mysqli_connect("localhost","root","","test");

    if(isset($_POST["remove"])){
        //print_r($_GET["id"]);
        if($_GET["action"] == "remove_mobiles"){
            foreach($_SESSION["cart-mobiles"] as $key => $value){
                if($value["product_id"] == $_GET["id"]){
                    unset($_SESSION["cart-mobiles"][$key]);
                    echo "<script>alert('product has been removed')</script>";
                    echo "<script>window.location = cart.php</script>";
                }
            }
        }
        if($_GET["action"] == "remove_earphones"){
            foreach($_SESSION["cart-earphones"] as $key => $value){
                if($value["product_id"] == $_GET["id"]){
                    unset($_SESSION["cart-earphones"][$key]);
                    echo "<script>alert('product has been removed')</script>";
                    echo "<script>window.location = cart.php</script>";
                }
            }
        }
        if($_GET["action"] == "remove_speakers"){
            foreach($_SESSION["cart-speakers"] as $key => $value){
                if($value["product_id"] == $_GET["id"]){
                    unset($_SESSION["cart-speakers"][$key]);
                    echo "<script>alert('product has been removed')</script>";
                    echo "<script>window.location = cart.php</script>";
                }
            }
        }
        if($_GET["action"] == "remove_chargers"){
            foreach($_SESSION["cart-chargers"] as $key => $value){
                if($value["product_id"] == $_GET["id"]){
                    unset($_SESSION["cart-chargers"][$key]);
                    echo "<script>alert('product has been removed')</script>";
                    echo "<script>window.location = cart.php</script>";
                }
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Font Awesome-->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assests/css/style.css">
    <link rel="stylesheet" href="../assests/css/cartStyle.css">
    <title>cart items | Hari Collection</title>
</head>
<body>
    <section id="menu-area">
        <nav class="navbar navbar-default" role="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="navbar-header">
                            <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <!-- LOGO -->
                            <!-- TEXT BASED LOGO -->

                            <a class="navbar-brand" href="../index.php">Hari Collection</a>
                            
                            <!-- IMG BASED LOGO  -->
                            <!-- <a class="navbar-brand" href="index.html"><img src="assets/images/logo.png" alt="logo"></a> -->
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
                            <ul id="top-menu" class="nav navbar-nav  navbar-right main-nav">
                                <li><a href="../index.php">Home</a></li>
                                <li class="dropdown"> <a href="#">Shop <i class="fa fa-angle-down"></a></i>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="mobile-phones/ShoppingDemo/index1.php">Mobile</a></li>
                                        <li><a href="chargers/shop/">Chargers</a></li>
                                        <li><a href="earphone/shop/">Earphones</a></li>
                                        <li><a href="speakers/shop/">Speakers</a></li>
                                    </ul>
                                </li>
                                <li><a href="../blog.php">Blog</a></li>
                                <li><a href="../about-us.php">About us</a></li>
                                <li><a href="../products/cart.php" class="active">Cart</a></li>
                            </ul>
                        </div><!--/.nav-collapse -->
                    </div>
                </div>
            </div>
        </nav>
    </section>

    <div class="container-fluid container">
        <div class="row px-5">
            <div class="col-md-7">
                <div class="shopping-cart">
                    <h6>My Cart</h6>
                    <hr>
                </div>
                <?php 
                    $total = 0;
                    if(isset($_SESSION["cart-mobiles"])){
                        $query_mobile = "
                            SELECT * FROM product
                        ";
                        $show1 = '';
                        $result_mobile = mysqli_query($connection,$query_mobile);
                        $product_id_mobile = array_column($_SESSION["cart-mobiles"],"product_id");
                        //print_r($product_id_mobile);
                        while($row_mobile = mysqli_fetch_assoc($result_mobile)){
                            foreach($product_id_mobile as $id_mobile){
                                if($row_mobile["product_id"] == $id_mobile){
                                    $show1 .= '
                                            <form action="cart.php?action=remove_mobiles&id='.$row_mobile["product_id"].'" method="POST" class="cart-items">
                                                <div class="border rounded cart-container">
                                                    <div class="row bg-white">
                                                        <div class="col-md-4">
                                                            <img src="mobile-phones/ShoppingDemo/Image/'.$row_mobile["product_image"].'" alt="">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <h5 class="pt-2 product_name">'.$row_mobile["product_name"].'</h5>
                                                            <small class="text-secondary">Seller:Akash Singh</small>
                                                            <h5 class="pt-2 product_price">'.$row_mobile["product_price"].'</h5>
                                                            <input type="hidden" name="product_id" value="'.$row_mobile["product_id"].'">
                                                            <button class="btn btn-danger mx-2" name="remove">Remove</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                    ';
                                    $total = $total + (int)$row_mobile["product_price"];
                                }
                            }
                        }
                        echo $show1;
                    }
                ?>
                
                <?php 
                    if(isset($_SESSION["cart-chargers"])){
                        $show_chargers = '';
                        $query_chargers = "
                            SELECT * FROM chargers
                        ";
                        $result_chargers = mysqli_query($connection,$query_chargers);
                        $product_id_chargers = array_column($_SESSION["cart-chargers"],"product_id");
                        //print_r($product_id_chargers);
                        while($row_chargers = mysqli_fetch_assoc($result_chargers)){
                            foreach($product_id_chargers as $id_chargers){
                                if($row_chargers["product_id"] == $id_chargers){
                                    $show_chargers .= '
                                            <form action="cart.php?action=remove_chargers&id='.$row_chargers["product_id"].'" method="POST" class="cart-items">
                                                <div class="border rounded cart-container">
                                                    <div class="row bg-white">
                                                        <div class="col-md-4">
                                                            <img src="chargers/Shop/image/'.$row_chargers["product_image"].'" alt="">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <h5 class="pt-2 product_name">'.$row_chargers["product_name"].'</h5>
                                                            <small class="text-secondary">Seller:Akash Singh</small>
                                                            <h5 class="pt-2 product_price">'.$row_chargers["product_price"].'</h5>
                                                            <input type="hidden" name="product_id" value="'.$row_chargers["product_id"].'">
                                                            <button class="btn btn-danger mx-2" name="remove">Remove</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                    ';
                                    $total = $total + (int)$row_chargers["product_price"];
                                }
                            }
                        }
                        echo $show_chargers;
                    }  
                ?>

                <?php 
                    if(isset($_SESSION["cart-earphones"])){
                        $show_earphones = '';
                        $query_earphones = "
                            SELECT * FROM earphones
                        ";
                        $result_earphones = mysqli_query($connection,$query_earphones);
                        $product_id_earphones = array_column($_SESSION["cart-earphones"],"product_id");
                        //print_r($product_id_earphones);
                        while($row_earphones = mysqli_fetch_assoc($result_earphones)){
                            foreach($product_id_earphones as $id_earphones){
                                if($row_earphones["product_id"] == $id_earphones){
                                    $show_earphones .= '
                                            <form action="cart.php?action=remove_earphones&id='.$row_earphones["product_id"].'" method="POST" class="cart-items">
                                                <div class="border cart-container rounded">
                                                    <div class="row bg-white">
                                                        <div class="col-md-4">
                                                            <img src="Earphone/shop/Image/Image-'.$row_earphones["product_id"].'.jpeg" alt="">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <h5 class="pt-2 product_name">'.$row_earphones["product_name"].'</h5>
                                                            <small class="text-secondary">Seller:Akash Singh</small>
                                                            <h5 class="pt-2 product_price">'.$row_earphones["product_price"].'</h5>
                                                            <input type="hidden" name="product_id" value="'.$row_earphones["product_id"].'">
                                                            <button class="btn btn-danger mx-2" name="remove">Remove</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                    ';
                                    $total = $total + (int)$row_earphones["product_price"];
                                }
                            }
                        }
                        echo $show_earphones;
                    } 
                ?>

                <?php 
                    if(isset($_SESSION["cart-speakers"])){
                        $show_speakers = '';
                        $query_speakers = "
                            SELECT * FROM speakers
                        ";
                        $result_speakers = mysqli_query($connection,$query_speakers);
                        $product_id_speakers = array_column($_SESSION["cart-speakers"],"product_id");
                        //print_r($product_id_speakers);
                        while($row_speakers = mysqli_fetch_assoc($result_speakers)){
                            foreach($product_id_speakers as $id_speakers){
                                if($row_speakers["product_id"] == $id_speakers){
                                    $show_speakers .= '
                                            <form action="cart.php?action=remove_speakers&id='.$row_speakers["product_id"].'" method="POST" class="cart-items">
                                                <div class="border cart-container rounded">
                                                    <div class="row bg-white">
                                                        <div class="col-md-4">
                                                            <img src="Speakers/Shop/image/image-'.$row_speakers["product_id"].'.jpeg" alt="">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <h5 class="pt-2 product_name">'.$row_speakers["product_name"].'</h5>
                                                            <small class="text-secondary">Seller:Akash Singh</small>
                                                            <h5 class="pt-2 product_price">'.$row_speakers["product_price"].'</h5>
                                                            <input type="hidden" name="product_id" value="'.$row_speakers["product_id"].'">
                                                            <button class="btn btn-danger mx-2" name="remove">Remove</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                    ';
                                    $total = $total + (int)$row_speakers["product_price"];
                                }
                            }
                        }
                        echo $show_speakers;
                    } 
                ?>

            </div>
            <div class="col-md-4 offset-md-1 border rounded mt-5 bg-lighht">
                <div class="pt-4">
                    <h6>PRICE DETAILS</h6>
                    <hr>
                    <div class="row price-details">
                        <div class="col-md-6">
                            <?php
                                $total_count = 0;
                                if(isset($_SESSION["cart-mobiles"])){
                                    $count_mobile = count($_SESSION["cart-mobiles"]);
                                    $total_count = $count_mobile + $total_count;
                                }
                                if(isset($_SESSION["cart-chargers"])){
                                    $count_chargers = count($_SESSION["cart-chargers"]);
                                    $total_count = $count_chargers + $total_count;
                                }
                                if(isset($_SESSION["cart-speakers"])){
                                    $count_speakers = count($_SESSION["cart-speakers"]);
                                    $total_count = $count_speakers + $total_count;
                                }
                                if(isset($_SESSION["cart-earphones"])){
                                    $count_earphones = count($_SESSION["cart-earphones"]);
                                    $total_count = $count_earphones + $total_count;
                                }
                                echo "<h6>Price ($total_count items)</h6>";
                            ?>
                            <h6>Delivery Charges</h6>
                            <hr>
                            <h6>Amount payable</h6>
                        </div>
                        <div class="col-md-6">
                            <h6><?php echo $total; ?></h6>
                            <h6 class="text-success">FREE</h6>
                            <hr>
                            <h6><?php echo $total; ?></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="footer">
        <div class="container">
            <div class="footer-inner">
                <div class="footer-nav">
                    <ul>
                        Menus
                        <li><a href="../products/mobile-phones/ShoppingDemo/index1.php">Mobile phones</a></li>
                        <li><a href="../products/chargers/shop/">Mobile Chargers</a></li>
                        <li><a href="../products/speakers/shop">Speakers</a></li>
                        <li><a href="../products/earphone/shop">Earphones</a></li>
                    </ul>
                    <ul>
                        Repairing
                        <li><a href="#">Submenu 1</a></li>
                        <li><a href="#">Submenu 2</a></li>
                        <li><a href="#">Submenu 3</a></li>
                        <li><a href="#">Submenu 4</a></li>
                    </ul>
                    <ul>
                        Policy
                        <li><a href="#">Shipment Policy</a></li>
                        <li><a href="#">Logistics Policy</a></li>
                        <li><a href="#">Terma and Conditions</a></li>
                        <li><a href="#">Shipment Policy</a></li>
                    </ul>
                </div>
                <div class="subscribe">
                    <h4>Subscribe:</h4>
                    <input type="text" name="email" placeholder="Enter Your email address">
                </div>
            </div>
        </div>
    </section>

</body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    
    <!-- Bootstrap -->
    <script src="../assets/js/bootstrap.js"></script>
</html>