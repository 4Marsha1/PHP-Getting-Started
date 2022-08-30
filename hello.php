<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="hello.php" method="get">
        <input type="text" name="name" placeholder="NAME"><br>
        <input type="number" name="age" placeholder="AGE"><br>
        <input type="submit">
    </form>

    Your name is:  <?php echo $_GET["name"]? $_GET["name"] : 'NAME YET TO BE SUBMITTED'; ?>
    <br>
    Your age is: <?php echo $_GET["age"]? $_GET["age"] : 'AGE YET TO BE SUBMITTED';?>
    
</body>
</html>