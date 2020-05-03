<?php
    $connection = mysqli_connect("localhost","root","","test");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="assests/swip/swiper.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assests/slick-master/slick/slick-theme.css"/>
    <link rel="stylesheet" href="assests/slick-master/slick/slick.css"/>
    <link rel="stylesheet" href="assests/css/style.css">
    <title>Hari Collection | shop more with us</title>
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

                            <a class="navbar-brand" href="index.php">Hari Collection</a>
                            
                            <!-- IMG BASED LOGO  -->
                            <!-- <a class="navbar-brand" href="index.html"><img src="assets/images/logo.png" alt="logo"></a> -->
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
                            <ul id="top-menu" class="nav navbar-nav  navbar-right main-nav">
                                <li><a href="#" class="active">Home</a></li>
                                <li class="dropdown"> <a href="#">Shop <i class="fa fa-angle-down"></a></i>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="products/mobile-phones/ShoppingDemo/index1.php">Mobile</a></li>
                                        <li><a href="products/chargers/shop/">Chargers</a></li>
                                        <li><a href="products/earphone/shop/">Earphones</a></li>
                                        <li><a href="products/speakers/shop/">Speakers</a></li>
                                    </ul>
                                </li>
                                <li><a href="blog.php">Blog</a></li>
                                <li><a href="about-us.php">About us</a></li>
                                <li><a href="products/cart.php">Cart</a></li>
                            </ul>
                        </div><!--/.nav-collapse -->
                    </div>
                </div>
            </div>
        </nav>
    </section>


    <section class="slider">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <span class="slider-text">Slide 1</span>
                </div>
                <div class="swiper-slide"><span class="slider-text">Slide 1</span></div>
                <div class="swiper-slide">
                    <span class="slider-text">Slide 1</span>
                </div>
                <div class="swiper-slide">
                <span class="slider-text">Slide 1</span>
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>

    <section id="latest-added" class="slick-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="slicker">
                        <div class="slick-header">
                            <h3>Latest added</h3>
                            <a href="products/earphone/shop/">View All</a>
                        </div>
                        <div class="slick-slider">
                        <?php
                            $select_earphones = "
                                SELECT * FROM earphones
                                WHERE product_id BETWEEN 0 AND 7;
                            ";
                            $result_earphones = mysqli_query($connection,$select_earphones);
                            $output = '';
                            if(mysqli_num_rows($result_earphones) > 0){
                                while($row = mysqli_fetch_array($result_earphones)){
                                    $output .= '
                                        <div class="product-detail">
                                            <a href="product_earphones.php?product_id='.$row["product_id"].'">
                                                <img src="products/earphone/shop/image/image-'.$row["product_id"].'.jpeg" class="img">
                                                <h4>'.$row["product_name"].'</h4>
                                                <h4>'.$row["product_price"].'</h4>
                                            </a>
                                        </div>
                                    ';
                                }
                                echo $output;
                            }
                        ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="poster">
        <div class="container">
            <div class="poster-inner">
                <li class="poster-text">
                    <h4>Shop your faviourite product now!!!</h4>
                    
                    <button>Shop now</button>
                </li>
                <li class="poster-image"><img src="assests/images/poster.jpg" alt=""></li>
            </div>
        </div>
    </section>

    <section id="latest-added" class="slick-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="slicker">
                        <div class="slick-header">
                            <h3>Top Selling</h3>
                            <a href="products/mobile-phones/ShoppingDemo/index1.php">View All</a>
                        </div>
                        <div class="slick-slider">
                            <?php
                                $select_mobile = "
                                    SELECT * FROM product
                                    WHERE product_id BETWEEN 0 AND 8;
                                ";
                                $result_mobile = mysqli_query($connection,$select_mobile);
                                $output_mobile = '';
                                if(mysqli_num_rows($result_mobile) > 0){
                                    while($row = mysqli_fetch_array($result_mobile)){
                                        $output_mobile .= '
                                            <div class="product-detail">
                                                <a href="product_mobile.php?product_id='.$row["product_id"].'">
                                                    <img src="products/mobile-phones/shoppingDemo/image/image-'.$row["product_id"].'.jpeg" class="img">
                                                    <h4>'.$row["product_name"].'</h4>
                                                    <h4>'.$row["product_price"].'</h4>
                                                </a>
                                            </div>
                                        ';
                                    }
                                    echo $output_mobile;
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="footer">
        <div class="container">
            <div class="footer-inner">
                <div class="footer-nav">
                    <ul>
                        Menus
                        <li><a href="products/mobile-phones/ShoppingDemo/index1.php">Mobile phones</a></li>
                        <li><a href="products/chargers/shop/">Mobile Chargers</a></li>
                        <li><a href="products/speakers/shop">Speakers</a></li>
                        <li><a href="products/earphone/shop">Earphones</a></li>
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

    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="assests/swip/swiper.min.js"></script>
    <script src="assests/javascript/slickCopy.js"></script>
    <script>
        $(document).ready(function(){
            $('#search').click(function(){
                $('.menu-item').addClass('hide-item');
                $('.search-form').addClass('active');
                $('.close').addClass('active');
                $('#search').hide();
            });
            $('.close').click(function(){
                $('.menu-item').removeClass('hide-item');
                $('.search-form').removeClass('active');
                $('.close').removeClass('active');
                $('#search').show();
            });
        });
        var swiper = new Swiper('.swiper-container', {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
      });
    </script>
    <script src="assests/slick-master/slick/slick.js"></script>
</body>
</html>