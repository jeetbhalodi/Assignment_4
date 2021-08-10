<?php include 'connection.php'?>

<?php 
$id = $_GET['id'];
$sql = $sql = "DELETE FROM category WHERE cat_id = '$id'";
$result = $conn->query($sql);
?>

<?php header("Location: home.php")?>