<?php

$conn = mysqli_connect("localhost","root","","trs");
if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    $sql = "DELETE FROM products where id = $id";
    mysqli_query($conn,$sql);
    header("Location:list.php");
}