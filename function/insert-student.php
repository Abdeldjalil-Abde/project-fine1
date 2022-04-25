<?php
session_start();
$mail = $_GET['mail'];
$teacher = "teacher" .  $_SESSION['id'];
require 'databaes-connect.php';
    $sql = "";
    $sql = "SELECT * FROM $class WHERE mail = ?";
    $stmt = mysqli_stmt_init($conn);
    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_bind_param($stmt, "s", $mail);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);
        mysqli_stmt_store_result($stmt);
  
            $row = mysqli_fetch_assoc($result);

            $first = $row['first_name'];
            $last = $row['last_name'];
            $adrass = $row['adress'];
            $dat =  $row['dat'];
            $hizb = $row['hizb'];

    } else {
        header("Location: ../html/list-student.php?error=sql1");
         exit();
    }
    $sql = "INSERT INTO  diploma (first_name, last_name,  adress,  dat, hizb, class ) VALUES ('$first', '$last','$adrass','$date', , 0, '$class');";
    $stmt = mysqli_stmt_init($conn);

    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_execute($stmt);
        header("Location: ../html/list-student.php");
        exit();
    } else {
        header("Location: ../html/list-student.php?error=sql2");
        exit();
    }