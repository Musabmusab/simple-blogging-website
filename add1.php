<?php 

$con = mysqli_connect('localhost','root','','blog');

$name=$_POST['title'];
$text =$_POST['text'];
$image = $_FILES['image'];
$image_loc = $_FILES['image']['tmp_name'];
$image_name = $_FILES['image']['name'];

$image_des = "images/".$image_name ;

move_uploaded_file($image_loc,"images/".$image_name);




// mysqli_query($con,"INSERT INTO `add`(`tital`, `image`, `text`) 
//                VALUES ('$name','$image_des','$text')");


mysqli_query($con,"INSERT INTO `add`(`tital`, `image`, `text`) 
VALUES ('$name','$image_des','$text')");



header("location:index.php");
?>