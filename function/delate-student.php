<?php
session_start();
$mail = $_GET['mail'];
$teacher = "teacher" . $_GET['teacher'];;
require 'databaes-connect.php';
    $sql = "DELETE FROM $teacher WHERE mail = ?";
 
    $stmt = mysqli_stmt_init($conn);
    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_bind_param($stmt, "s", $mail);
        mysqli_stmt_execute($stmt);
         header("Location: ../html/liste-student-all.php");

    }else{
        echo "<h1>error SQL</h1>";
    }
