<!DOCTYPE html>
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
            ID  <input type="text" name="pid">
        </div>
        <input type="submit" name="showbtn" value="SHOW">
        </form>
        <?php
        if(isset($_POST['showbtn'])){
			include('config.php');
            $stu_id = $_POST['pid'];
            $query = "select * from new_crudd where id= {$stu_id}";
            $result = mysqli_query($con, $query) or die("query unsuccesful");
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
        ?>
    <form action="updatedata.php" method="post">
        <div>
            <input type="hidden" name="sid" value="<?php echo $row['id']; ?>">
            <input type="email" value="<?php echo $row['email']; ?>" name="email" required>
        </div>
        <div>
            <input type="password" value="<?php echo $row['password']; ?>" name="password" required>
        </div>
        <button type="submit">update</button>
    </form>
    <?php
                }    
            }
        }
 ?>
    </div>
</body>
</html>