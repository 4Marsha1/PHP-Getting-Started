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
        $fruits = array("apple", "orange", "banana");
        $fruits[3]="mango";
        for($i=0;$i<count($fruits);$i++){
            echo $fruits[$i];
            echo "<br>";
        }
    ?>

    <!-- Checkboxes  -->

    <h1> Checkboxes </h1>
    <form action="arrays.php" method="post">
        Apples: <input type="checkbox" value="Apples" name="fruits[]">    <br>
        Oranges: <input type="checkbox" value="Oranges" name="fruits[]"> <br>
        Bananas: <input type="checkbox" value="Bananas" name="fruits[]"> <br>
        <input type="submit">
    </form>

    <?php 
        $fruits = $_POST["fruits"];
        for($i=0;$i<count($fruits);$i++){
            echo $fruits[$i];
            echo "<br>";
        }
    ?>
</body>
</html>