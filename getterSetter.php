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
        class Movie {
            public $title;
            private $rating;

            function __construct($Title, $Rating){
                $this->title = $Title;
                $this->setRating($Rating);
            }

            // GETTER FUNCTION
            function getRating(){
                return $this->rating;
            }

            // SETTER FUNCTION
            function setRating($Rating){
                if($Rating == 'G' || $Rating == 'PG' || $Rating == 'PG-13' || $Rating == 'R' || $Rating == 'NR' ){
                    $this->rating = $Rating;
                }else{
                    $this->rating = 'NR';
                }
            }
        }

        $movie1 = new Movie("Me Time", "FOG");
        $movie1->setRating("PG-13");
        echo "$movie1->title<br>";
        echo $movie1->getRating();
    ?>

</body>
</html>