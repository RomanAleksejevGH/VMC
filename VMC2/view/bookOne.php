<?php
    ob_start();
    echo
        '<article>'.
        '<h3>'.$book['bookname'].'</h3>'.
        '<img src="public/images/'.$book['image'].'">'.
        '<p>Author(s): '.$book['author'].'</p>'.
        '<p>Price: '.$book['price'].'</p>'.
        '<p>Содержание: '.$book['description'].'</p>'.
        '<p style="padding: top 10px;">'.
        '<a href="books" role="button"> Back &raquo;</a>'.
        '</p>'.
        '</article>'.
        '<div style="clear:both;"></div>';
        $content= ob_get_clean();
    include 'view/templates/layout.php';
