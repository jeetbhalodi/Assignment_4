
<?php
    include 'connection.php';
    $p_name = $_REQUEST['product_name'];
    $p_price = $_REQUEST['product_price'];
    $p_img = $_REQUEST['product_img'];
    
    $cat_id = $_REQUEST['optcategory'];

    $sql = "INSERT INTO `product`( `product_name`, `product_img`, `product_price`, `cat_id`) VALUES ('$p_name','$p_img',$p_price,$cat_id)";
    $result = $conn->query($sql);

    // echo $p_name;
    // echo $p_price;
    // echo $p_img;
    // echo $cat_id;

    header("Location: product_details.php")
?>