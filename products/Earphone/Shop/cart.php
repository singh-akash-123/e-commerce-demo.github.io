<?php
    session_start();
    $connection = mysqli_connect("localhost","root","","test");

    if(isset($_POST["remove"])){
        //print_r($_GET["id"]);
        if($_GET["action"] == "remove"){
            foreach($_SESSION["cart-earphones"] as $key => $value){
                if($value["product_id"] == $_GET["id"]){
                    unset($_SESSION["cart-earphones"][$key]);
                    unset($_SESSION["product_quantity"][$key]);
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
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <title>cart items</title>
</head>
<body>
    <header id="header">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a href="index.php" class="navbar-brand">
                <h3 class="px-5">
                    <i class="fa fa-shopping-cart"></i>Shopping Cart
                </h3>
            </a>
            <button class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="mr-auto">
                    <div class="navbar-nav">
                        <a href="cart.php" class="nav-item nav-link active">
                            <h5 class="px-5 cart">
                                <i class="fa fa-shopping-cart"></i>Cart
                                <?php
                                    if(isset($_SESSION["cart"])){
                                        $count = count($_SESSION["cart"]);
                                        echo "<span id='cart_count' class='text-warning bg-light'>".$count."</span>";
                                    }
                                    else{
                                        echo "<span id='cart_count' class='text-warning bg-light'>0</span>";
                                    }
                                ?>
                            </h5>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div class="container-fluid container">
        <div class="row px-5">
            <div class="col-md-7">
                <div class="shopping-cart">
                    <h6>My Cart</h6>
                    <hr>
                </div>
                <?php 
                if(isset($_SESSION["cart-earphones"])){

                    $total = 0;
                    $query = "
                        SELECT * FROM earphones
                    ";
                    $show = '';
                    $result = mysqli_query($connection,$query);
                    //print_r($result);
                    $product_id = array_column($_SESSION["cart-earphones"],"product_id");
                    print_r($product_id);
                    while($row = mysqli_fetch_assoc($result)){
                       // print_r($row);
                       $show .= '<div class="cart-list">';
                        foreach($product_id as $id){
                            if($row["product_id"] == $id){
                                $show .= '<div class="cart">
                                        <form action="cart.php?action=remove&id='.$row["product_id"].'" method="POST" class="cart-items">
                                            <div class="borders">
                                                <div class="row cart-container">
                                                    <div class="col-md-3 cart-img">
                                                        <img src="image/image-'.$row["product_id"].'.jpeg" alt="">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <h5 class="pt-2">'.$row["product_name"].'</h5>
                                                        <small class="text-secondary">Seller:Akash Singh</small>
                                                        <h5 class="pt-2">'.$row["product_price"].'</h5>
                                                        <input type="hidden" name="product_price" value="'.$row["product_price"].'">
                                                        <input type="hidden" name="product_id" value="'.$row["product_id"].'">
                                                        <button class="btn btn-danger mx-2" name="remove">Remove</button>

                                                    </div>
                                                    <div class="col-md-3 py-5 item-quantity">
                                                        <input type="text" value="1" name="quantity" class="form-control"/>
                                                        <input type="submit" name="change-quantity" value="change" class="change-btn"/>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        </div>
                                ';
                                //print_r($item_quantity_id);
                                //print((int)$row["product_price"]);
                                //print_r("\n".$quantity);
                                //print_r("\n");
                                $total = $total + $row["product_price"];
                                //print_r($total);
                                //print_r("\n");
                            }
                        }
                        $show .= '</div>';
                    }
                    echo $show;
                }
                else{
                    echo "<h5>Cart is Empty!!!!</h5>";
                }   
                ?>

                <!--<form action="cart.php" mrthod="GET" class="cart-items">
                    <div class="border rounded">
                        <div class="row bg-white">
                            <div class="col-md-3">
                                <img src="" alt="">
                            </div>
                            <div class="col-md-6">
                                <h5 class="pt-2"></h5>
                                <small class="text-secondary">Seller:Akash Singh</small>
                                <h5 class="pt-2"></h5>
                                <button class="btn btn-danger mx-2" name="remove">Remove</button>
                            </div>
                            <div class="col-md-3 py-5">
                                <button class="btn bg-light border rounded-circle"><i class="fa fa-minus"></i></button>
                                <input type="text" value="1"class="form-control w-25 d-inline"/>
                                <button class="btn bg-light border rounded-circle"><i class="fa fa-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </form>-->
            </div>
            <div class="col-md-1">

            </div>
            
            <div class="col-md-4 cart-summary">
                <div class="pt-4 price-detail-heading">
                    <h4>PRICE DETAILS</h4>
                    
                    <div class="row price-details">
                        <div class="col-md-6">
                            <?php
                                if(isset($_SESSION["cart"])){
                                    $count = count($_SESSION["cart"]);
                                    echo "<h6>Price ($count items)</h6>";
                                }else{
                                    echo "<h6>Price (0 items)</h6>";
                                }
                            ?>
                            <h6>Delivery Charges</h6>
                            <hr>
                            <h6>Amount payable</h6>
                        </div>
                        <div class="col-md-6">
                            <h6><?php echo $total; ?></h6>
                            <h6>FREE</h6>
                            <hr>
                            <h6><?php echo $total; ?></h6>
                        </div>
                    </div>
                </div>
            </div>
                            
        </div>
    </div>
</body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    
    <!-- Bootstrap -->
    <script src="../assets/js/bootstrap.js"></script>
    <script>
        $('document').ready(function(){
            let count = 1;
            $('.btn').click(function(){
                alert(var count);
                console.log("Btn is clicked");
                let count = count + 1;
                console.log(count);
            });
        });
    </script>
</html>