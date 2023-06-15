<?php 
$about = [
    "name"=>"Kyaw Kyaw",
    "age"=>"23",
    "job"=>"Designer"
];

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
    <a href="server.php?name=<?php $about['name'] ?> & age <?php $about['age'] ?>">click me</a>

    <form action="server.php" method="post">
        <label for="">Name</label>
        <input type="text" name="foodName" id="">
        <label for="">Price</label>
        <input type="text" name="foodPrice" id="">
        <input type="submit" name="" id="" value="send">
    </form>
</body>
</html>
