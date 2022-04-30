<?php
session_start();
$mail = $_GET['mail'];
echo $mail;
require 'databaes-connect.php';
$sql = "";
$sql = "SELECT * FROM active WHERE mail = ?;";
$stmt = mysqli_stmt_init($conn);
if (mysqli_stmt_prepare($stmt, $sql)) {
    mysqli_stmt_bind_param($stmt, "s", $mail);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $pwd = $row['pwd'];
        $first = $row['first_name'];
        $last = $row['last_name'];
        $gender = $row['gender'];
        $adrass = $row['adress'];
        $dat =  $row['dat'];
        $tel =  $row['tel'];
        $hizb = $row['hizb'];
        $id_class = $row['id_class'];
    } else {
        header("Location: ../html/list-activation.php?error=sql2");
        exit();
    }
    $sql = "INSERT INTO  student (first_name, last_name,  gender, adress,  dat, tel, mail, pwd, hizb, id_class ) VALUES ('$first', '$last','$gender','$adrass','$date', '$tel', '$mail', '$pwd', 0, '$id_class');";
    $stmt = mysqli_stmt_init($conn);
    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_execute($stmt);
        $sql = "DELETE FROM active WHERE mail = ?";

        $stmt = mysqli_stmt_init($conn);
        if (mysqli_stmt_prepare($stmt, $sql)) {
            mysqli_stmt_bind_param($stmt, "s", $mail);
            mysqli_stmt_execute($stmt);
            header("Location: ../html/list-activation.php");
        } else {
            echo "<h1>error SQL</h1>";
        }
        header("Location: ../html/list-activation.php");
    } else {
        echo "<h1>error SQL</h1>";
    }
} else {
    header("Location: ../html/list-activation.php?error=sql1");
    exit();
}
