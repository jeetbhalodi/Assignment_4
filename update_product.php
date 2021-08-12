<?php
    include 'connection.php';
    $id = $_POST['product_id'];
    
    $p_name = $_REQUEST['product_name'];
    $p_price = $_REQUEST['product_price'];
    $p_img = $_REQUEST['product_img'];
    
    $cat_id = $_REQUEST['optcategory'];
    

    $sql = "UPDATE `product` SET `product_name`='$p_name',`product_img`='$p_img',`product_price`='$p_price',`cat_id`='$cat_id' WHERE product_id = '$id'";
    $result = $conn->query($sql);


    
    header("Location: product_details.php")
?>