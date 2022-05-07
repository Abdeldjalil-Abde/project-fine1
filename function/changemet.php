<?php
session_start();
function chang_pwd($class, $mail, $pwd, $new_pwd)
{
    require 'databaes-connect.php';
    $sql = "SELECT * FROM $class WHERE mail = ? AND pwd = ?";
    
    $stmt = mysqli_stmt_init($conn);
    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_bind_param($stmt, "ss", $mail, $pwd);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        mysqli_stmt_store_result($stmt);
        if (mysqli_num_rows($result) > 0) {
            $sql = " UPDATE  $class SET pwd = ? WHERE mail = ? AND pwd = ?";
            if (mysqli_stmt_prepare($stmt, $sql)) {
                mysqli_stmt_bind_param($stmt, "sss", $new_pwd, $mail, $pwd);
                mysqli_stmt_execute($stmt);
                $_SESSION['pwd'] = $new_pwd;
            } else {
                header("Location: ../html/change_password?error=sql1");
                exit();
            }
            if ($_SESSION['status'] == 2) {
                header("Location: ../html/profile-admin.php");
                exit();
            } else if ($_SESSION['status'] == 1) {
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
         header("Location: ../html/change_password.php?error=sql1");
        exit();
    }
}

if (isset($_POST['change-pwd'])) {

    $mail = $_POST['mail'];
    $pwd = $_POST['pwd'];
    $new_pwd = $_POST['new_pwd'];
    if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../html/change-mot-de-passe.php?error=mail&mail=" . $mail);
        exit();
    } else {

        if (chang_pwd("student", $mail, $pwd, $new_pwd)) {
        } else if (chang_pwd("teacher", $mail, $pwd, $new_pwd)) {
        }  else {
            header("Location: ../html/change_password.php?error=not");
            exit();
        }
    }
} else if (isset($_POST['change-mail'])) {
    $mail = $_POST['mail'];
    $pwd = $_POST['pwd'];
    $nouveau_mail = $_POST['new_mail'];
    if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../html/change-mail.php?error=mail&mail=" . $mail);
        exit();
    } else if (!filter_var($new_mail, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../html/change-mail.php?error=mail&new_mail=" . $new_mail);
        exit();
    } else {
        require 'databaes-connect.php';
        $sql = "SELECT * FROM teacher WHERE mail = ? AND pwd = ?";
        $stmt = mysqli_stmt_init($conn);
        if (mysqli_stmt_prepare($stmt, $sql)) {
            mysqli_stmt_bind_param($stmt, "ss", $mail, $pwd);
            mysqli_stmt_execute($stmt);

            $result = mysqli_stmt_get_result($stmt);
            mysqli_stmt_store_result($stmt);
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                $first = $row['first_name'];
                $last = $row['last_name'];
                $id = $row['id'];
                $sql = " UPDATE  teacher SET mail = ? WHERE mail = ? AND pwd = ?";
                if (mysqli_stmt_prepare($stmt, $sql)) {
                    mysqli_stmt_bind_param($stmt, "sss", $new_mail, $mail, $pwd);
                    mysqli_stmt_execute($stmt);
                } else {
                    header("Location: ../html/change_mail?error=sql1");
                    exit();
                }
                $_SESSION['mail'] = $new_mail;
                header("Location: ../html/profile-admin.php");
                exit();
            } else {
                header("Location: ../html/change_mail.php?error=not");
                exit();
            }
        } else {
            header("Location: ../html/change_mail?error=sql1");
            exit();
        }
    }
} else {
    header("Location: ../sigin.php");
    exit();
}
