<?php

if (isset($_POST['submit'])) {
    $mail_student = $_POST['mail'];
    $id = $_POST["submit"];
    require 'databaes-connect.php';
        $sql="";
        
        $stmt = mysqli_stmt_init($conn);
        $sql = "SELECT * FROM teacher   WHERE id_teacher = '$id';";
        if (mysqli_stmt_prepare($stmt, $sql)) {
            mysqli_stmt_execute($stmt);
    
            $result = mysqli_stmt_get_result($stmt);
            mysqli_stmt_store_result($stmt);
    
                $row = mysqli_fetch_assoc($result);
    
                $first = $row['first_name'];
                $last = $row['last_name'];
                $gender = $row['gender'];
                $adrass = $row['adress'];
                $dat =  $row['dat'];
                $tel =  $row['tel'];
                $mail = $row['mail'];
                $pwd = $row['pwd'];
                $id = $row['id_teacher'];
    
        } else {
            header("Location: ../html/profile-teacher.php?error=sql1&way=" . $submit);
            exit();
        }
       
    if (!filter_var($mail_student, FILTER_VALIDATE_EMAIL)) {

        header("Location: ../html/profile-teacher.php?error=mail&mail=" . $mail_student ."&first_name=" . $first . "&last_name=" . $last . "&gender=" . $gender . "&adrass=" . $adrass . "&dat=" . $dat . "&tel=" . $tel . "&mail=" . $mail . "&pwd=" . $pwd . "&id=" . $id );
        exit();
    } else {
    
        $sql = "";
        if ($id == "1") {
            $sql = "SELECT * FROM teacher1   WHERE mail = '$mail_student';";
        } elseif ($id == "2") {
            $sql = "SELECT * FROM teacher2 WHERE mail = '$mail_student';";
        } elseif ($id == "3") {
            $sql = "SELECT * FROM teacher3  WHERE mail = '$mail_student';";
        } elseif ($id == "4") {
            $sql = "SELECT * FROM teacher4 WHERE mail = '$mail_student';";
        }
        $stmt = mysqli_stmt_init($conn);
    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);
        mysqli_stmt_store_result($stmt);
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);

            $first_student = $row['first_name'];
            $last_student = $row['last_name'];
            $dat_student =  $row['dat'];
            $mail_student = $row['mail'];
            echo $first_student;
                 header("Location: ../html/profile-teacher.php?first_name=" . $first . "&last_name=" . $last . "&gender=" . $gender . "&adrass=" . $adrass . "&dat=" . $dat . "&tel=" . $tel . "&mail=" . $mail . "&pwd=" . $pwd ."&mail_student=" . $mail_student ."&first_student=" . $first_student ."&last_student=" . $last_student ."&dat_student=" . $dat_student ."&id=" .$id);
                exit();

        } else {
             header("Location: ../html/profile-teacher.php?error=not&first_name=" . $first . "&last_name=" . $last . "&gender=" . $gender . "&adrass=" . $adrass . "&dat=" . $dat . "&tel=" . $tel . "&mail=" . $mail . "&pwd=" . $pwd . "&id=" . $id);
        }
    } else {
        
    }   
    }
} else {
    header("Location: ../profile-teacher.php");
    exit();
}