<?php
require_once('database/database.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $isCreate = addBook($_POST);
    if ($isCreate) {
        header("Location: http://localhost/online-library-php/?page=bookinfo");
    }
}
