<?php
$id = $_GET['id'];

include('config.php');

$query = "DELETE FROM new_crudd WHERE id = {$id}";
$result = mysqli_query($con, $query) or die("query unsuccessful");

header("Location: index.php");
mysqli_close($con);
?>