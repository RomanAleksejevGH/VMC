<?php
class Controller{

    // connecting the main page of the site using the function
    public static function StartSite(){
        include './view/main.php';
    }

    // get the connection of the list of books using the function 
    public static function BookList(){
        $booksList = Model::getBookList();
        include './view/bookList.php';
    }

    //get the connection of one book using the function. If the test is true the book loads.
    public static function bookOne($title){
        $test = Model::getBook($title);
        if($test[0]==true){
            $book = $test[1];
            include './view/bookOne.php';
        }
        // connecting error checking
        else{
            include './view/error404.php';
        }
    }
    // function shows if there is an error
    public static function error404(){
        include './view/error404.php';
    }
}
?>