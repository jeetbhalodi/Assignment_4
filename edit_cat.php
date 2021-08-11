<?php
    include 'connection.php';
    $cat_name = $_GET['cat_update'];
    $id = $_GET['id_cat'];

    $sql = "UPDATE category SET category_name = $cat_name WHERE caat_id = $id";
    $result = $conn->query($sql);

    header("Location: home.php")
?>