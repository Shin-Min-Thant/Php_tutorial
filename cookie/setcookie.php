<?php 
setcookie("name","Mg Mg");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This is Set cookie page</h1>
    <h2>Cookie value is <?php echo $_COOKIE["name"] ?></h2>
    <a href="showcookie.php">Go to show cookie</a>
    <a href="deletecookie.php">Go to delete cookie</a>
</body>
</html>