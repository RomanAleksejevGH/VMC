<?php
// Turn on output buffering
ob_start();
echo '<h2>Список книг</h2>';
foreach ($booksList as $bookOne){
    // Output one or more strings
    echo 
    '<article>'.
     '<h3>'.
     '<a href="book?title='.$bookOne['bookname'].'">'.$bookOne['bookname'].'</a>'.
     '</h3>'.
     '<img src="public/images/'.$bookOne['image'].'">'.
     '<p>Author(s): '.$bookOne['author'].'</p>'.
     '<p>Price: '.$bookOne['price'].'</p>'.
     '<p style="padding: top 10px;">'.
     '<a href="book?title='.$bookOne['bookname'].'" role="button"> Содержание &raquo;</a>'.
     '</article>'.
     '<div style="clear:both;"></div>'
     ;
    
} 
//Get current buffer contents and delete current output buffer
$content= ob_get_clean();
include 'view/templates/layout.php';
?>