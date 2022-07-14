<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <?php 
	include('config.php');
    $query = "select * from new_crudd";
    $result = mysqli_query($con, $query) or die("query failed");
    if(mysqli_num_rows($result) > 0){
    ?>
    <table border="1">
     <thead>
        <th>id</th>
        <th>email</th>
        <th>password</th>
        <th colspan="2">action</th>
    </thead>
    <tbody>
        <?php
            while($row = mysqli_fetch_assoc($result)){
        ?>
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['password'] ?></td>
            <td><a href="EDIT.PHP?id=<?php echo $row['id'] ?>">edit</a></td>
            <td><a href="delete-inline.php?id=<?php echo $row['id'] ?>">delete</a></td>
        </tr>
        <?php } ?>
    </tbody>
    </table>
    <?php }else{echo "<h2>no record found</h2>";} mysqli_close($con);?>
 </div>
</body>
</html>