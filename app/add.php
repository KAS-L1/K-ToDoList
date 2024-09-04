<?php

if (isset($_POST['title'])) {
    require '../db_conn.php';

    $title = $_POST['title']; // added closing bracket

    if (empty($title)) {
        header("Location: ../index.php?mess=error");
        exit();
    } else {
        $stmt = $conn->prepare('INSERT INTO todos(title) VALUE(?)');
        $res = $stmt->execute([$title]); // fixed typo

        if ($res) {
            header('Location: ../index.php?mess=success');
        } else {
            header("Location: ../index.php");
        }

        $conn = null;
        exit();
    }
} else {
    header("Location: ../index.php?mess=error");
    exit();
}