<?php
$conn = mysqli_connect("localhost","root","","trs");
//to check
if(!$conn){
    echo "connected error";
}

//Read
$sql = "SELECT * FROM township";

//Create
$sql = "INSERT INTO `township`(`name`, `state_division_id`) VALUES ('aa','1')";

//Delete
$sql = "Delete FROM township where id=9";

//Update
$sql = "UPDATE `township` SET `name`='KoKO' WHERE id = 2";
$query = mysqli_query($conn,$sql);

if($query){
    echo "aung p";
}else{
    echo "fail";
}

//print_r(mysqli_fetch_all($query));