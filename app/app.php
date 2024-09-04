<?php

if (isset($_POST['title'])){
    require '../db_conn.php';

    $title = $_POST['title'];

    // echo $title;

    if(empty($title)) {
        header("Location: ../index.php?mess=error");

    }
 }