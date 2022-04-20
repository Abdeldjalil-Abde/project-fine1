<?php
    session_start();
function serch($class, $mail, $pwd) {

    require 'databaes-connect.php';
    $sql = "SELECT * FROM $class WHERE mail = ? AND pwd = ?";
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
            $_SESSION['first-name'] = $row['first_name'];
            $_SESSION['last-name'] = $row['last_name'];
            $_SESSION['gender'] = $row['gender'];
            $_SESSION['adrass'] = $row['adress'];
            $_SESSION['dat'] =  $row['dat'];
            $_SESSION['tel'] =  $row['tel'];
            $_SESSION['hizb'] = $row['hizb'];
            if($class=='admin'){
                $id = $row['id'];
                $_SESSION['id'] =   $id;
                header("Location: ../html/profile-admin.php");
                  exit();

            }else if($class=="teacher"){

                $_SESSION['id'] =  $row['id'];
                header("Location: ../html/profile-teacher.php");
                exit();
            }else{

                header("Location: ../html/profile-student.php");
                exit();
            }

        } else {
            return 0;
        }
    } else {
        header("Location: ../sigin.php?error=sql1&way=" . $submit);
         exit();
    }
}


if (isset($_POST['submit'])) {

    $mail = $_POST['mail'];
    $pwd = $_POST['pwd'];

    if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../sigin.php?error=mail&mail=" . $mail );
        exit();
    } else {

        $sql = "";

        if (serch("teacher1", $mail, $pwd)) {
        } else if (serch("teacher2", $mail, $pwd)) {
        } else if (serch("teacher3", $mail, $pwd)) {
        } else if (serch("teacher4", $mail, $pwd)) {
        } else if (serch("teacher", $mail, $pwd)) {
        } else if (serch("admin", $mail, $pwd)){
        }else{
                header("Location: ../sigin.php?error=not" );
                 exit();
            }
             
        
    }
} else {
    header("Location: ../sigin.php");
    exit();
}
