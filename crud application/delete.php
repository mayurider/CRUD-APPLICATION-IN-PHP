<?php
include('config.php');

if(isset($_REQUEST['deletebtn'])){

    $id = $_POST['sid'];
    $query = "delete from new_crudd where id = '{$id}'";
    $result = mysqli_query($con, $query) or die("query unsuccessful");

    header("Location: index.php");
    mysqli_close($con);
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header><h2>CRUD APPLICATION</h2></header>
    <nav><ul>
        <li><a href="index.php">READ</a></li>
        <li><a href="create.php">CREATE</a></li>
        <li><a href="update.php">UPDATE</a></li>
        <li><a href="delete.php">DELETE</a></li>
    </ul></nav>
    <div class="data">
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <div>
            ID <input type="text" name="sid">
        </div>
        <input type="submit" name="deletebtn" value="DELETE">
        </form>
    </div>
</body>
</html>