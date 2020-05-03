<?php
    //session_start();
    include('database_connection.php');
    //include('newRefresh.php');
    include '../../cart_functionality.php';
    if(isset($_POST["add"])){
        //print_r($_POST["product_id"]);
        if(isset($_SESSION["cart-mobiles"])){
            $item_array_id = array_column($_SESSION["cart-mobiles"],"product_id");
            //print_r($item_array_id);
            if(in_array($_POST["product_id"],$item_array_id)){
                echo "<script>alert('product is already added!!!!')</script>";
                echo "<script>window.location = 'index.php'</script>";
            }else{
                $count = count($_SESSION["cart-mobiles"]);
                //print_r($count);
                $item_array = array(
                    'product_id' => $_POST['product_id']
                );
                $_SESSION["cart-mobiles"][$count] = $item_array;
                //print_r($_SESSION["cart-mobiles"]);
            }
            //print_r($_SESSION["cart"]);
        }else{
            $item_array = array(
                'product_id' => $_POST['product_id']
            );

            //create a session variable
            $_SESSION["cart-mobiles"][0]= $item_array;
            //print_r($_SESSION["cart-mobiles"]);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mobile phones | Hari Collection</title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href = "css/jquery-ui.css" rel = "stylesheet">
    <!-- Custom CSS -->
    <link href="../../../assests/css/style.css" rel="stylesheet">
    <style>
        .containers{
            width: 95%;
            margin: auto;
        }
        .list-group-item{
            padding: 5px;
        }
        .product-design{
            padding: 5px;
        }
        .product-wrapper{
            border: 1px solid rgba(0,0,0,0.5);
            box-shadow: 2px 2px 5px rgba(0,0,0,0.4);
            transition: all ease-in-out 0.5s;
        }
        .product-wrapper:hover{
            box-shadow: 3px 3px 5px rgba(0,0,0,0.4);
            transform: scale(1.01);
        }
        .product-description > h5{
            color: #444;
            margin: 0px !important;
            padding: 0px !important;
            display: grid;
            font-size: 16px;
            text-decoration: none;
        }
        a:hover{
            text-decoration: none !important;
        }
    </style>
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

                            <a class="navbar-brand" href="../../../index.php">Hari Collection</a>
                            
                            <!-- IMG BASED LOGO  -->
                            <!-- <a class="navbar-brand" href="index.html"><img src="assets/images/logo.png" alt="logo"></a> -->
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
                            <ul id="top-menu" class="nav navbar-nav  navbar-right main-nav">
                                <li><a href="../../../index.php">Home</a></li>
                                <li class="dropdown"> <a href="#" class="active">Shop <i class="fa fa-angle-down"></a></i>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="../../mobile-phones/ShoppingDemo/index1.php">Mobile</a></li>
                                        <li><a href="../../chargers/shop/">Chargers</a></li>
                                        <li><a href="../../earphone/shop/">Earphones</a></li>
                                        <li><a href="../../Speakers/shop/">Speakers</a></li>
                                    </ul>
                                </li>
                                <li><a href="../../../blog.php">Blog</a></li>
                                <li><a href="../../../about-us.php">About us</a></li>
                                <li><a href="../../cart.php">Cart</a></li>
                            </ul>
                        </div><!--/.nav-collapse -->
                    </div>
                </div>
            </div>
        </nav>
    </section>
    <!-- Page Content -->
    <div class="containers">
        <div class="row">
            <div class="col-sm-2 col-md-2 list">
				<div class="list-group">
					<h3>Price</h3>
					<input type="hidden" id="hidden_minimum_price" value="0" />
                    <input type="hidden" id="hidden_maximum_price" value="65000" />
                    <p id="price_show">1000 - 65000</p>
                    <div id="price_range"></div>
                </div>
                <div class="list-group">
					<h3>Brand</h3>
                    <div style="height: 180px; overflow-y: auto; overflow-x: hidden;">
					<?php

                        $query = "SELECT DISTINCT(product_brand) FROM product WHERE product_status = '1' ORDER BY product_id DESC";
                        $statement = $connect->prepare($query);
                        $statement->execute();
                        $result = $statement->fetchAll();
                        foreach($result as $row)
                        {
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector brand" value="<?php echo $row['product_brand']; ?>"  > <?php echo $row['product_brand']; ?></label>
                    </div>
                    <?php
                    }

                    ?>
                    </div>
                </div>

				<div class="list-group">
					<h3>RAM</h3>
                    <?php

                    $query = "
                    SELECT DISTINCT(product_ram) FROM product WHERE product_status = '1' ORDER BY product_ram DESC
                    ";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector ram" value="<?php echo $row['product_ram']; ?>" > <?php echo $row['product_ram']; ?> GB</label>
                    </div>
                    <?php
                    }

                    ?>
                </div>

				<div class="list-group">
					<h3>Internal Storage</h3>
					<?php
                    $query = "
                    SELECT DISTINCT(product_storage) FROM product WHERE product_status = '1' ORDER BY product_storage DESC
                    ";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector storage" value="<?php echo $row['product_storage']; ?>"  > <?php echo $row['product_storage']; ?> GB</label>
                    </div>
                    <?php
                    }
                    ?>
                </div>
            </div>

            <div class="col-sm-10 col-md-10">
            	<br />
                <div class="row filter_data box">
                    
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
                        <li><a href="../../../products/mobile-phones/ShoppingDemo/index1.php">Mobile phones</a></li>
                        <li><a href="../../../products/chargers/shop/">Mobile Chargers</a></li>
                        <li><a href="../../../products/speakers/shop">Speakers</a></li>
                        <li><a href="../../../products/earphone/shop">Earphones</a></li>
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

<!--<style>
#loading
{
	text-align:center;
	background: url('loader.gif') no-repeat center;
	height: 150px;
}
</style>-->

<script>
$(document).ready(function(){

    filter_data();

    

    function filter_data()
    {
        $('.filter_data').html('<div id="loading" style="" ></div>');
        var action = 'fetch_data';
        var minimum_price = $('#hidden_minimum_price').val();
        var maximum_price = $('#hidden_maximum_price').val();
        var brand = get_filter('brand');
        var ram = get_filter('ram');
        var storage = get_filter('storage');
        $.ajax({
            url:"fetch_data.php",
            method:"POST",
            data:{action:action, minimum_price:minimum_price, maximum_price:maximum_price, brand:brand, ram:ram, storage:storage},
            success:function(data){
                $('.filter_data').html(data);
            }
        });
    }

    function get_filter(class_name)
    {
        var filter = [];
        $('.'+class_name+':checked').each(function(){
            filter.push($(this).val());
        });
        return filter;
    }

    $('.common_selector').click(function(){
        filter_data();
    });

    $('#price_range').slider({
        range:true,
        min:1000,
        max:65000,
        values:[1000, 65000],
        step:500,
        stop:function(event, ui)
        {
            $('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
            $('#hidden_minimum_price').val(ui.values[0]);
            $('#hidden_maximum_price').val(ui.values[1]);
            filter_data();
        }
    });
});
</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>

