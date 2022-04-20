<?php
session_start();

function serch($class, $mail)
{
    require 'databaes-connect.php';

    $sql1 = "SELECT * FROM $class WHERE mail = ?";
    $stmt1 = mysqli_stmt_init($conn);
    if (mysqli_stmt_prepare($stmt1, $sql1)) {
        mysqli_stmt_bind_param($stmt1, "s", $mail);
        mysqli_stmt_execute($stmt1);

        $result1 = mysqli_stmt_get_result($stmt1);
        mysqli_stmt_store_result($stmt1);

        if (mysqli_num_rows($result1) > 0) {
            
            $row = mysqli_fetch_assoc($result1);
            $first = $row['first_name'];
            $last = $row['last_name'];
            $dat =  $row['dat'];

            header("Location: ../html/profile-admin.php?first_uesr=" . $first ."&last_uesr=" . $last ."&dat_uesr=" . $dat);
            exit();
        } else {
            return 0;
        }
    } else {
        header("Location: ../sigin.php?error=sql1&way=" . $submit);
        exit();
    }
}


if (isset($_POST['submit'])) {
    $mail_student = $_POST['mail'];
    $id = $_SESSION["id"];
    require 'databaes-connect.php';
    $sql = "";
    
    if (!filter_var($mail_student, FILTER_VALIDATE_EMAIL)) {

        header("Location: ../html/profile-teacher.php?error=mail");
        exit();
    } else {
            $teacher = "teacher" . $id; 
            $sql = "SELECT * FROM $teacher WHERE mail = ? ;";
        
        $stmt = mysqli_stmt_init($conn);
        if (mysqli_stmt_prepare($stmt, $sql)) {
            mysqli_stmt_bind_param($stmt, "s", $mail_student);
            mysqli_stmt_execute($stmt);

            $result = mysqli_stmt_get_result($stmt);
            mysqli_stmt_store_result($stmt);
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);

                $first  = $row['first_name'];
                $last = $row['last_name'];
                $dat  = $row['dat'];
                $mail = $row['mail'];
                header("Location: ../html/profile-teacher.php?first_student=" . $first . "&last_student=" . $last ."&dat_student=" . $dat);
                exit();
            } else {
                header("Location: ../html/profile-teacher.php?error=not");
            }
        } else {
            header("Location: ../html/profile-teacher.php?error=sql1&way=" . $submit);
            exit();
        }
    }
} else if (isset($_POST['information'])) {
    $mail_uesr = $_POST['mail_uesr'];
    require 'databaes-connect.php';
    if (!filter_var($mail_uesr, FILTER_VALIDATE_EMAIL)) {


        header("Location: ../html/profile-admin.php?error=mail&mail=" . $mail_student . "&first_name=" . $first . "&last_name=" . $last . "&mail=" . $mail . "&pwd=" . $pwd . "&id=" . $id);
        exit();
    } else {

        $sql = "";

        if (serch("teacher1", $mail_uesr)) {
        } else if (serch("teacher2", $mail_uesr)) {
        } else if (serch("teacher3", $mail_uesr)) {
        } else if (serch("teacher4", $mail_uesr)) {
        } else if (serch("teacher", $mail_uesr)) {
        } else {
            header("Location: ../html/profile-admin.php?error=not");
            exit();
        }
    }
} else {
    exit();
}
