<?php
    $connection = mysqli_connect("localhost","root","","test") or die("connection successful");
    $get_product = $_GET["product_id"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $get_product ?></title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <script src="products/mobile-phones/shoppingdemo/js/jquery-1.10.2.min.js"></script>
    <script src="products/mobile-phones/shoppingdemo/js/jquery-ui.js"></script>
    <script src="products/mobile-phones/shoppingdemo/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="products/mobile-phones/shoppingdemo/css/bootstrap.min.css">
</head>
<body>
    <section class="product-display">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-6 col-md-6">
                    <div class="img-container">

                    </div>
                </div>
                <div class="col-sm-6 col-lg-6 col-md-6">
                
                </div>
                <?php
                    $select_query = "
                        SELECT * FROM earphones
                        WHERE product_id='$get_product';
                    ";
                    $result = mysqli_query($connection,$select_query);
                    $output = '';
                    
                    if(mysqli_num_rows($result) > 0){
                       
                        
                        while($row = mysqli_fetch_array($result)){
                            $output .= '
                            <div class="col-sm-6 col-lg-6 col-md-6">
                                <div class="img-container">
                                    <img src="products/earphone/shop/image/image-'.$row["product_id"].'."/>
                                    
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-6 col-md-6">
                                <div class="text-container">
                                    <h2>'.$row["product_name"].'</h2>
                                    <h3><i class="fa fa-inr" aria-hidden="true"> </i> '.$row["product_price"].'</h3>
                                    <h3 class="text-warning"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-half-o" aria-hidden="true"></i></h3>
                                    <div class="row">
                                        <p><i class="text-success fa fa-check-square-o" aria-hidden="true"></i><b> Bank Offer</b> 20% Instant discount on SBI Cards</p>
                                        <p><i class="text-success fa fa-check-square-o" aria-hidden="true"></i><b> Bank Offer</b> 5% Unlimited Cashback on flipkart Axis Bank Credit Card</p>
                                        <p><i class="text-success fa fa-check-square-o" aria-hidden="true"></i><b> Bank Offer</b> Extra 5% off* with Axis Bank Buzz Credit Card</p>
                                        <p><i class="text-success fa fa-check-square-o" aria-hidden="true"></i><b> Bank Offer</b> 20% Instant Discount on pay with Google Wallet</p>
                                    </div>
                                    <div class="row mt-4">
                                        <h3><i class="fa fa-map-marker text-info" aria-hidden="true"></i> Delivered in 2 Days | <span class="text-success">FREE</span></h3>
                                    </div>
                                    <div class="row mt-4">
                                        <h4>Colors: <a class="btn btn-primary text-light">Sky Blue</a> &nbsp;<a class="btn btn-danger text-light"> Red </a> &nbsp;<a class="btn btn-info text-light"> Blue </a> &nbsp;<a class="btn btn-warning text-light"> Yellow </a> &nbsp;<a class="btn btn-success text-light"> Green</a></h4>
                                        <p style="font-size: 16px";><b>Seller: </b> Hari collection<p>
                                    </div>
                                </div>
                            </div>
                            ';
                        }
                    }
                    echo $output;
                ?>

                <div class="container mt-5 mb-5">
                    <div class="row">
                        <h2>Rating & Review</h2>
                    </div>
                    <div class="row mt-5 mb-5">
                        <div class="media">
                            <img src="#" class="mr-3" alt="">
                            <div class="media-body">
                                <h5 class="mt-0">Very nice product <span class="text-warning"><i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i></span></h5>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aspernatur aliquid iusto ipsam quae ex consequuntur alias ullam molestiae aliquam tempore, nostrum reprehenderit accusamus numquam quia aperiam consequatur quis vitae animi eius dolor quisquam culpa. Recusandae corporis nulla nostrum laboriosam, consequatur et iste, totam quidem officia numquam eos? Quae, velit deleniti?
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5 mb-5">
                        <div class="media">
                            <img src="#" class="mr-3" alt="">
                            <div class="media-body">
                                <h5 class="mt-0">Very nice product <span class="text-warning"><i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i></span></h5>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aspernatur aliquid iusto ipsam quae ex consequuntur alias ullam molestiae aliquam tempore, nostrum reprehenderit accusamus numquam quia aperiam consequatur quis vitae animi eius dolor quisquam culpa. Recusandae corporis nulla nostrum laboriosam, consequatur et iste, totam quidem officia numquam eos? Quae, velit deleniti?
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5 mb-5">
                        <div class="media">
                            <img src="#" class="mr-3" alt="">
                            <div class="media-body">
                                <h5 class="mt-0">Very nice product <span class="text-warning"><i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i></span></h5>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aspernatur aliquid iusto ipsam quae ex consequuntur alias ullam molestiae aliquam tempore, nostrum reprehenderit accusamus numquam quia aperiam consequatur quis vitae animi eius dolor quisquam culpa. Recusandae corporis nulla nostrum laboriosam, consequatur et iste, totam quidem officia numquam eos? Quae, velit deleniti?
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5 mb-5">
                        <div class="media">
                            <img src="#" class="mr-3" alt="">
                            <div class="media-body">
                                <h5 class="mt-0">Very nice product <span class="text-warning"><i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i></span></h5>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aspernatur aliquid iusto ipsam quae ex consequuntur alias ullam molestiae aliquam tempore, nostrum reprehenderit accusamus numquam quia aperiam consequatur quis vitae animi eius dolor quisquam culpa. Recusandae corporis nulla nostrum laboriosam, consequatur et iste, totam quidem officia numquam eos? Quae, velit deleniti?
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container mt-5 mb-5">
                    <div class="row">
                        <h4>Post your own comment here</h4>
                    </div>
                    <div class="form-group">
                        <label for="">Email:</label>
                        <input type="email" class="form-control" placeholder="Enter Email">
                        <smaill class="form-text text-muted" id="emailHelp">We'll never share your email with anyone else.</smaill>
                    </div>
                    <div class="form-group">
                        <label for="Password">Password: </label><br>
                        <textarea name="comment" id="comment" cols="155" rows="5" placeholder="Enter your comment here"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>

        </div>
    </section>
</body>
<script>
    $('document').ready(function(){
        alert("Hardcoded value. Designed for demo only!!!");
    });
</script>
</html>