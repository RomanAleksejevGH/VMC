<?php
$books = array();
// Create a class, put it in a variable, create fields
         $mysqli = new mysqli('localhost', 'root', '', 'shop'); 


// Handling connection error
        if(mysqli_connect_errno()) {
            print('Соединение не установлено');
            exit();
        } 

// Indicates encoding setting
        $mysqli->set_charset('utf8'); 

        // Make a query from a table Books
        $query = "Select * From Books"; 

// Request in progress 
        $result = $mysqli->query($query);  
// Download all the books and get the result
        $books = $result->fetch_all(MYSQLI_ASSOC); 


//$books = array(
//    array(
//        "bookname" => "HTML and CSS",
//        "author" => "Jon Duckett",
//        "price" => "17.19$",
//        "description"=> "description",
//        "image"=>"HTMLandCSS_Duckett.jpg"
//    ),
//    array(
//        "bookname" => "HTML5",
//        "author" => "Matthew MacDonald",
//        "price" => "27.65$",
//        "description"=> "description",
//        "image"=>"HTML5TheMissing_MacDonald.jpg"
//    ),
//    array(
//        "bookname" => "Head First JavaScript Programming",
//        "author" => "Eric Freeman",
//        "price" => "37.60$",
//        "description"=> "description",
//        "image"=>"HeadFirstJavaScript.jpg"
//    ),
//    array(
//        "bookname" => "Head First HTML5 Programming",
//        "author" => "Eric Freeman",
//        "price" => "35.35$",
//        "description"=> "description",
//        "image"=>"HeadFirstHTML5.jpg"
//    ),
//    array(
//        "bookname" => "jQuery in Action",
//        "author" => "Bear Bibeault",
//        "price" => "32.12$",
//        "description"=> "description",
//        "image"=>"JQueryInAction.jpg"
//    ),
//);