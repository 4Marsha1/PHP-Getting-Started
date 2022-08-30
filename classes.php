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
        class Book {
            var $title;
            var $author;
            var $noOfPages;

            function __construct($Title,$Author,$NoOfPages){
                $this->title=$Title;
                $this->author=$Author;
                $this->noOfPages=$NoOfPages;
            }

            function isBookBig(){
                if($this->noOfPages>500){
                    echo "Damn Big Book!";
                }else {
                    echo "Nah! Its fine!";
                }
            }
        }

        // $book1 = new Book;
        // $book1->title = 'My Book';
        // $book1->author = 'My Author';
        // $book1->noOfPages = 945;

        $book1 = new Book("My Book", "My Author", 945);
        $book2 = new Book("My Book2", "My Author2", 449);

        echo "$book1->noOfPages<br>";
        $book2->isBookBig();

    ?>

</body>
</html>