<?php
    include 'connection.php';
    $id = $_GET['id_cat'];
    $cat_name = $_GET['cat_update'];
    

    $sql = "UPDATE category SET category_name = $cat_name WHERE cat_id = $id";
    $result = $conn->query($sql);

    header("Location: home.php")
?>