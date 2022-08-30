<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
        function greet($name){
            echo "Hello $name <br>";
        }
        greet("Mark");
        greet("Weins");
        greet("Matt");
        greet("Stonie");

        function square($num){
            return $num*$num;
        }
        echo square(5);
    ?>

</body>
</html>