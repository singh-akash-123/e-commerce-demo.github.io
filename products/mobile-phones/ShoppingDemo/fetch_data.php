<?php
	session_start();
	$connection = mysqli_connect("localhost","root","","test");
	if(isset($_POST["add"])){
		alert("Hello");
	}
?>
<body>
<?php

//fetch_data.php

include('database_connection.php');

if(isset($_POST["action"]))
{
	$query = "
		SELECT * FROM product WHERE product_status = '1'
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
			
				
					<div class="product-design col-sm-6 col-md-6">
						<form method="POST">
						<a href="product.php?product_name='.$row["product_name"].'">
							<div class="rows">
								<div class="product-wrapper col-sm-12 col-md-12">
									<div class="row">
										<div class="product-image col-sm-6 col-md-6">
											<img src="image/'. $row['product_image'] .'" alt="" class="img-responsive" >
											
										</div>
										<div class="col-md-6 col-sm-6 product-description">
											<h4 align="center" style="padding-top: 15px"; class="Product-Name"><strong>'. $row['product_name'] .'</strong></h4>
											
											<h5>Ram: '.$row["product_ram"].' GB</h5>
											<h5>Storage: '.$row["product_storage"].' GB</h5>
											<h5>Camera: '.$row["product_camera"].' MP</h5>
											<h4>'. $row['product_price'] .'</h4>
											<button type="submit" class="btn btn-warning my-3 center-text" name="add">Add to cart <i class="fa fa-shopping-cart"></i></button>
											<input type="hidden" name="product_id" value="'.$row["product_id"].'">
											<input type="hidden" name="product_name" value="'.$row["product_name"].'">
										</div>	
										
									</div>
								</div>
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
<div id="compare-set">
	<div class="text">
		
	</div>
	<div class="add-to-compare">

	</div>
</div>
</body>
</html>
<script src="main.js"></script>
<script>
	$(document).ready(function(){
		$('.comparison').click(function(){
			alert("hello");
			var action = 'compare-set'
			$.ajax({
            url:"compare-set.php",
            method:"POST",
            data:{action:action, minimum_price:minimum_price, maximum_price:maximum_price, brand:brand, ram:ram, storage:storage},
            success:function(data){
                $('.add-to-compare').html(data);
            }
        });
		});
		$('#akash').click(function(){
			alert("Btn is click");
			window.location = "#10";
		});	
	});
</script>
<?php
	//include('newRefresh.php');
?>
