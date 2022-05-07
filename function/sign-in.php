<?php
session_start();
function search($class, $mail, $pwd)
{
    require 'databaes-connect.php';
    $sql = "SELECT *, c.name_class FROM $class s,class c WHERE mail = ? AND pwd = ? AND c.id = s.id_class ";
    $stmt = mysqli_stmt_init($conn);

    if (mysqli_stmt_prepare($stmt, $sql)) {

        mysqli_stmt_bind_param($stmt, "ss", $mail, $pwd);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);
        mysqli_stmt_store_result($stmt);
        if (mysqli_num_rows($result) > 0) {

            $row = mysqli_fetch_assoc($result);
            $_SESSION['mail'] = $mail;
            $_SESSION['pwd'] = $pwd;
            $_SESSION['first_name'] = $row['first_name'];
            $_SESSION['last_name'] = $row['last_name'];
            $_SESSION['gender'] = $row['gender'];
            $_SESSION['location'] = $row['location'];
            $_SESSION['dat'] =  $row['dat'];
            $_SESSION['tel'] =  $row['tel'];
            $_SESSION['hizb'] = $row['hizb'];
            $_SESSION['class'] = $row['name_class'];
            $_SESSION['status'] = $row['status'];
            if ($_SESSION['status'] == 2) {
                header("Location: ../html/profile-admin.php");
                exit();
            } else if ($_SESSION['status']  == 1) {
                $_SESSION['id_class'] = $row['id_class'];
                header("Location: ../html/profile-teacher.php");
                exit();
            } else {
                header("Location: ../html/profile-student.php");
                exit();
            }
        } else {
            return 0;
        }
    } else {

         header("Location: ../signin.php?error=sql1");
        exit();
    }
}


if (isset($_POST['submit'])) {

    $mail = $_POST['mail'];
    $pwd = $_POST['pwd'];

    if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../signin.php?error=mail&mail=" . $mail);
        exit();
    } else {

        require 'databaes-connect.php';
        $sql = "SELECT * FROM active WHERE mail = ? AND pwd = ?;";
        $stmt = mysqli_stmt_init($conn);
        if (mysqli_stmt_prepare($stmt, $sql)) {
            mysqli_stmt_bind_param($stmt, "ss", $mail, $pwd);
            mysqli_stmt_execute($stmt);

            $result = mysqli_stmt_get_result($stmt);
            mysqli_stmt_store_result($stmt);

            if (mysqli_num_rows($result) > 0) {
                  header("Location: ../signin.php?error=active");
                    exit();
            } else {
                if (search("student", $mail, $pwd)) {
                } else if (search("teacher", $mail, $pwd)) {
                } else {
                     header("Location: ../signin.php?error=not");
                    exit();
                }
            }
        } else {
             header("Location: ../signin.php?error=sql1");
            exit();
        }
    }
} else {
     header("Location: ../signin.php");
    exit();
}
