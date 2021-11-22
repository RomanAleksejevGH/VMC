<?php 
// Turn on output buffering
ob_start(); ?>

<h2>Проект MVC технологии. Книги</h2>
<article>
    <p>
        Просмотр списка книг и детальной информации по одной книге
    </p>
</article>

<?php
//Get current buffer contents and delete current output buffer
    $content= ob_get_clean();
    include 'view/templates/layout.php'; ?>