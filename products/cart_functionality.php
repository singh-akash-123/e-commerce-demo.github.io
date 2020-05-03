<?php
    session_start();
    include('database_connection.php');
    if(isset($_POST["add"])){
        print_r($_POST["product_id"]);
        if(isset($_SESSION["cart"])){
            $item_array_id = array_column($_SESSION["cart"],"product_id");
            print_r($item_array_id);
            if(in_array($_POST["product_id"],$item_array_id)){
                echo "<script>alert('product is already added!!!!')</script>";
                echo "<script>window.location = 'index1.php'</script>";
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