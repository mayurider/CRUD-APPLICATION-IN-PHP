<?php 
include('config.php');
$em = $_REQUEST['email'];
$ps = $_REQUEST['password'];

$query = "insert into new_crudd(email,password) values ('{$em}','{$ps}')";
$result = mysqli_query($con, $query) or die("query unsuccessful");
header("Location: index.php");
mysqli_close($con);
?>