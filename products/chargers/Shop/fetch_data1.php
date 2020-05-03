<?php
	session_start();
	$connection = mysqli_connect("localhost","root","","test");
	if(isset($_POST["add"])){
        print_r($_POST["product_id"]);
        if(isset($_SESSION["cart"])){
            $item_array_id = array_column($_SESSION["cart"],"product_id");
            print_r($item_array_id);
            if(in_array($_POST["product_id"],$item_array_id)){
                echo "<script>alert('product is already added!!!!')</script>";
                echo "<script>window.location = 'index.php'</script>";
            }else{
                $count = count($_SESSION["cart"]);
                print_r($count);
                $item_array = array(
                    'product_id' => $_POST['product_id']
                );
                $_SESSION["cart"][$count] = $item_array;
                print_r($_SESSION["cart"]);
            }
            //print_r($_SESSION["cart"]);
        }else{
            $item_array = array(
                'product_id' => $_POST['product_id']
            );

            //create a session variable
            $_SESSION["cart"][0]= $item_array;
            print_r($_SESSION["cart"]);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php

//fetch_data.php

include('database_connection.php');

if(isset($_POST["action"]))
{
	$query = "
		SELECT * FROM chargers WHERE product_status = '1'
	";
	if(isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"]))
	{
		$query .= "
		 AND product_price BETWEEN '".$_POST["minimum_price"]."' AND '".$_POST["maximum_price"]."'
		";
	}
	if(isset($_POST["brand"]))
	{
		$brand_filter = implode("','", $_POST["brand"]);
		$query .= "
		 AND product_brand IN('".$brand_filter."')
		";
	}
	if(isset($_POST["ram"]))
	{
		$ram_filter = implode("','", $_POST["ram"]);
		$query .= "
		 AND product_ram IN('".$ram_filter."')
		";
	}
	if(isset($_POST["storage"]))
	{
		$storage_filter = implode("','", $_POST["storage"]);
		$query .= "
		 AND product_storage IN('".$storage_filter."')
		";
	}

	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	$total_row = $statement->rowCount();
	$output = '';
	if($total_row > 0)
	{
		foreach($result as $row)
		{
			$output .= '

				<div class="product-design col-sm-3">
					<form action="index.php" method="POST">
						<a href="product.php?product_name='.$row["product_id"].'">
							<div class="product-wrapper col-12"> 
								<div class="product-image">
									<img src="image/'. $row['product_image'] .'" alt="" class="img-responsive" >
									
								</div>
								<a class="product-description mt-4" href="#">
									<h5 class="Product-Name">'. $row['product_name'] .'</h5>
									<h4 style="text-align:center;" class="text-danger" ><i class="fa fa-inr"></i> '. $row['product_price'] .'</h4>
									<input type="hidden" name="product_id" value="'.$row["product_id"].'">
								</a>
								<button type="submit" class="btn btn-warning my-3 text-center" name="add">Add to cart <i class="fa fa-shopping-cart"></i></button>
							</div>
						</a>
					</form>
				</div>
			
			';
		}
	}
	else
	{
		$output = '<h3>No Data Found</h3>';
	}
	echo $output;
}

?>

</body>
</html>
<script src="main.js"></script>
				<!--<div class="product-design">
					<a href="#">
						<div class="product-wrapper">
							<div class="product-image">
								<img src="image/'. $row['product_image'] .'" alt="" class="img-responsive" >
							</div>
							<a class="product-description" href="#">
								<h4 align="center" class="Product-Name"><strong>'. $row['product_name'] .'</strong></h4>
								<h4 style="text-align:center;" class="text-danger" >'. $row['product_price'] .'</h4>

							</a>
						</div>
					</a>
				</div>-->