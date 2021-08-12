<?php include 'connection.php'?>

<?php 
$id = $_GET['id'];
$sql = "DELETE FROM product WHERE product_id = '$id'";
$result = $conn->query($sql);
?>

<?php header("Location: product_details.php")?>