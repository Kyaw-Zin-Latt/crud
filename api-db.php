<?php

$data = file_get_contents("https://fakestoreapi.com/products?limit=15");
$dataArr = json_decode($data);

$conn = mysqli_connect("localhost","root","","trs");

//Method 1
//this method is not ok if all of user will come
//foreach ($dataArr as $d){
//    $sql = "INSERT INTO products (`title`, `price`) VALUES ('$d->title','$d->price.$')";
//    $query = mysqli_query($conn,$sql);
//}

//Method 2
//recommend for this method
//Note : don't forget ';' to add
$sql = "";

foreach ($dataArr as $d){
    $title = htmlentities($d->title,ENT_QUOTES);
    $sql .= "INSERT INTO products (`title`, `price`) VALUES ('$title','$d->price');";

}

print_r(mysqli_multi_query($conn,$sql));

