<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="calc.php" method="post">
        <input type="number" placeholder="a" name="first">
        <input type="number" placeholder="b" name="second">
        <input type="text" placeholder="+ - / * %" name="op">
        <input type="submit" value="Calculate">
    </form>

    <?php 
        $a = $_POST["first"];
        $b = $_POST["second"];
        $op = $_POST["op"];
        if($op == '+'){
            $res = $a + $b;
            echo "Your sum is $res";
        }else if($op == '-'){
            $res = $a - $b;
            echo "Your diff is $res";
        }else if($op == '*'){
            $res = $a * $b;
            echo "Your product is $res";
        }else if($op == '/'){
            $res = $a + $b;
            echo "Your quotient is $res";
        }else if($op == '%'){
            $res = $a % $b;
            echo "Your remainder is $res";
        }else {
            echo "Invalid Operator";
            return;
        }
    ?>

</body>
</html>