<?php
$id = $_REQUEST['sid'];
$em = $_REQUEST['email'];
$ps = $_REQUEST['password'];

include('config.php');

 $query = "update new_crudd set email = '{$em}', password = '{$ps}' where id = '{$id}'";
 $result = mysqli_query($con, $query) or die("query unsuccessful");
header("Location: index.php");
mysqli_close($con);
?>