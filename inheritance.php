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
        class Chef {
            function makeChicken(){
                echo "I made Chicken";
            }
            function makeMashedPotato(){
                echo "I made mashed Potato";
            }
            function makeSpecial(){
                echo "I made pasta";
            }
        }

        class SuperChef extends Chef {
            function makeNoodles(){
                echo "I made noodles";
            }
            // OVERLOADING
            function makeSpecial(){
                echo "I made spaghetti";
            }
        }

        $chef = new Chef;
        echo $chef->makeSpecial();
        echo "<br>";
        $superChef = new SuperChef;
        echo $superChef->makeSpecial();
        echo "<br>"
    ?>

</body>
</html>