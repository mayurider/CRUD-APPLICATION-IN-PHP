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
    <form action="insert.php" method="post">
        <div>
            <input type="email" placeholder="enter your email"  name="email" required>
        </div>
        <div>
            <input type="password" placeholder="enter your password" name="password" required>
        </div>
        <button type="submit">submit</button>
    </form>
    </div>
</body>
</html>