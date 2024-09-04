<?php
if(isset($_POST['id']) && !empty($_POST['id'])){
    require '../db_conn.php';

    $id = $_POST['id'];

    if(!preg_match('/^\d+$/', $id) || $id == 0){
       throw new Exception('Invalid id');
    }

    try {
        $stmt = $conn->prepare("SELECT * FROM todos WHERE id=? LIMIT 1");
        $stmt->execute([$id]);
        $result = $stmt->fetch();

        if($result){
            $stmt = $conn->prepare("DELETE FROM todos WHERE id=? LIMIT 1");
            $res = $stmt->execute([$id]);

            if($res){
                echo 1;
            }else {
                throw new Exception('Deletion failed');
            }
        }else {
            throw new Exception('Id not found');
        }
    } catch (Exception $e) {
        error_log($e->getMessage());
        echo 0;
    }

    $conn = null;
    exit();
}else {
    header("Location: ../index.php?mess=error");
}