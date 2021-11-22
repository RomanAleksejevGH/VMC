<?php
    $host = explode('?',$_SERVER['REQUEST_URI'])[0];

    $num = substr_count($host, '/');
    // method of obtaining the number of substrings
    $way = explode('/', $host)[$num];

    // how to get a response from the site
    if ($way == '' || $way == 'index.php'){
        $response = Controller::StartSite();
    }
    // how to get a response from the list of the books
    elseif($way == 'books'){
        $response = Controller::BookList();
    }
    // how to get a response from the one book
    elseif($way = 'book'){
        if(isset($_GET['title'])){
            $title = $_GET['title'];
        }
        $response = Controller::BookOne($title);
    }
    // how to get an error response
    else{
        $response= Controller::error404();
    } ?>