<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assests/css/style.css">
    <link rel="stylesheet" href="assests/css/blog1.css">
    <title>Blog | Hari Collection | shop more with us</title>
    <style>
        a,a:hover{
            text-decoration: none;
            color: #333;
        }
        .about-container{
            margin-top: 0;
            width: 100%;
            font-family: Georgia, 'Times New Roman', Times, serif;
            
        }
        .about-boxes{
            width: 80%;
            margin: auto;
        }
        .about-box{
            width: 65%;
            margin: auto;
            border: 2px solid #2bc;
            margin-top: 20px;
            padding: 20px 30px;
            background: #ccc;
            box-shadow: 5px 5px 5px rgba(0,0,0,0.4)
        }
        .about-box > h1{
            margin: 0;
            padding-bottom: 10px;
            border-bottom: 2px solid #2bc;
        }
        .about-box > p{
            padding-top: 20px;
            line-height: 1.35;
            font-size: 17px;
        }
        h5{
            font-size: 18px;
            line-height: 1.5;
            
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

                            <a class="navbar-brand" href="index.php">Hari Collection</a>
                            
                            <!-- IMG BASED LOGO  -->
                            <!-- <a class="navbar-brand" href="index.html"><img src="assets/images/logo.png" alt="logo"></a> -->
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
                            <ul id="top-menu" class="nav navbar-nav  navbar-right main-nav">
                                <li><a href="index.php">Home</a></li>
                                <li class="dropdown"> <a href="#">Shop <i class="fa fa-angle-down"></a></i>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="products/mobile-phones/ShoppingDemo/index1.php">Mobile</a></li>
                                        <li><a href="products/chargers/shop/">Chargers</a></li>
                                        <li><a href="products/earphone/shop/">Earphones</a></li>
                                        <li><a href="products/speakers/shop/">Speakers</a></li>
                                    </ul>
                                </li>
                                <li><a href="blog.php">Blog</a></li>
                                <li><a href="about-us.php" class="active">About us</a></li>
                                <li><a href="products/cart.php">Cart</a></li>
                            </ul>
                        </div><!--/.nav-collapse -->
                    </div>
                </div>
            </div>
        </nav>
    </section>

    <div class="about-container">
        <div class="about-boxes">
            <div class="about-box">
                <h1>Mobile repairing</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque voluptates reprehenderit quos eligendi veniam delectus unde labore ut quisquam illo accusantium nobis, iusto harum eveniet praesentium porro optio dolorum sequi at hic quis deserunt doloremque ducimus. Maiores suscipit natus laudantium, sapiente alias deserunt omnis magnam nostrum repellat rem nulla odit porro neque quaerat nihil repellendus et dignissimos assumenda. Dolores maiores itaque repellat odio error quos, eius ipsum ut incidunt explicabo.</p>
            </div>
            <div class="about-box">
                <h1>Delivery Items</h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error vel nostrum dolorem neque assumenda odit iste nulla quia voluptate veritatis, sunt modi voluptatibus atque? Earum at voluptates perspiciatis et unde cumque minus in totam possimus reprehenderit, illum dolores voluptas molestias nisi consequatur architecto repellat libero eligendi accusamus! Provident, esse alias.</p>
            </div>
            <div class="about-box">
                <h1>24 X 7 Access</h1>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae reprehenderit magni architecto fugit autem labore dicta sunt officia, natus esse! Et, laborum labore beatae sint ipsam sequi, repellat iste temporibus dignissimos quae animi repudiandae totam molestiae soluta placeat. Repudiandae qui, consectetur, labore quaerat vitae voluptates incidunt, natus deleniti nostrum ipsum reprehenderit a. Nisi non beatae sequi blanditiis pariatur, aliquam officiis sit itaque cum, voluptatum eligendi a eum iste, ratione architecto quam temporibus quod veritatis reiciendis voluptas sed obcaecati. Nemo, molestiae.</p>
            </div>
            <div class="about-box">
                <h1>Contact Info</h1>
                <h5>Email: ecomservice@haricollection.com</h5>
                <h5>Mobile: +91 9879876363</h5>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>