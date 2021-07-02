<?php

$conn = mysqli_connect("localhost","root","","trs");
$sql = "SELECT * FROM products";

$query = mysqli_query($conn,$sql);

//$rows = [];
//
//
//
////while ($row = mysqli_fetch_assoc($query) ){
////
////    array_push($rows,$row);
////
////}
//
//print_r($rows);

//
print_r(mysqli_fetch_assoc($query));