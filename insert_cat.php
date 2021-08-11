<?php
    include 'connection.php';
    $cat_name = $_GET['cat_update'];

    $sql = "INSERT INTO category (category_name) VALUES ('$cat_name')";
    $result = $conn->query($sql);

    header("Location: home.php")
?>