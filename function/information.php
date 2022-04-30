<?php
session_start();

function search($class, $mail)
{
    require 'databaes-connect.php';

    $sql1 = "SELECT *, class.name_class FROM $class ,class WHERE mail = ? AND class.id = id_class ";

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
            $name_class = $row['name_class'];
            header("Location: ../html/profile-admin.php?first_uesr=" . $first . "&last_uesr=" . $last . "&dat_uesr=" . $dat . "&name_class=" . $name_class . "&class=" . $class);
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
    $id = $_SESSION["id_class"];
    require 'databaes-connect.php';
    $sql = "";

    if (!filter_var($mail_student, FILTER_VALIDATE_EMAIL)) {

        header("Location: ../html/profile-teacher.php?error=mail");
        exit();
    } else {
        $sql = "SELECT s.* FROM student s,class c WHERE  mail = ? AND s.id_class = ?  ";

        $stmt = mysqli_stmt_init($conn);
        if (mysqli_stmt_prepare($stmt, $sql)) {
            mysqli_stmt_bind_param($stmt, "ss", $mail_student, $id);
            mysqli_stmt_execute($stmt);

            $result = mysqli_stmt_get_result($stmt);
            mysqli_stmt_store_result($stmt);
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);

                $first  = $row['first_name'];
                $last = $row['last_name'];
                $dat  = $row['dat'];
                $mail = $row['mail'];
                header("Location: ../html/profile-teacher.php?first_student=" . $first . "&last_student=" . $last . "&dat_student=" . $dat);
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


        header("Location: ../html/profile-admin.php");
        exit();
    } else {
          
        if (search("student", $mail_uesr)) {
        } else if (search("teacher", $mail_uesr)) {
        } else {
            header("Location: ../html/profile-admin.php?error=not");
            exit();
        }
    }
} else {
    exit();
}
