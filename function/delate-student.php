<?php
session_start();
$mail = $_GET['mail'];
$id_class = $_GET['id_class'];;
require 'databaes-connect.php';
    $sql = "DELETE FROM student WHERE mail = ? AND id_class = ?";
 
    $stmt = mysqli_stmt_init($conn);
    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_bind_param($stmt, "ss", $mail, $id_class);
        mysqli_stmt_execute($stmt);
         header("Location: ../html/list-student-all.php");

    }else{
        echo "<h1>error SQL</h1>";
    }
