<?php
   $id = $_GET['id'];
   $con = mysqli_connect('localhost','root','','blog');
   mysqli_query($con,"DELETE FROM `add` WHERE  id = $id");
    header("location:index.php");
?>