<?php
function chang_pwd($class, $mail, $pwd, $nouveau_pwd) {
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
            if($class=="admin"){
                $first = $row['first_name'];
                 $last = $row['last_name'];
                 $id = $row['id'];
                 $sql = " UPDATE  $class SET pwd = ? WHERE mail = ? AND pwd = ?";
                 if (mysqli_stmt_prepare($stmt, $sql)) {
                    mysqli_stmt_bind_param($stmt, "sss",$nouveau_pwd, $mail, $pwd);
                    mysqli_stmt_execute($stmt);
                    } else {
                        header("Location: ../html/change-mot-de-passe?error=sql1");
                        exit();
                    }
                    header("Location: ../html/profile-admin.php?first_name=" . $first . "&last_name=" . $last . "&mail=" . $mail . "&pwd=" . $nouveau_pwd . "&id=" . $id);
                    exit();
            }
            $first = $row['first_name'];
            $last = $row['last_name'];
            $gender = $row['gender'];
            $adrass = $row['adress'];
            $dat =  $row['dat'];
            $tel =  $row['tel'];
            if($class=="teacher"){
            $id = $row['id'];
            }
            $sql = " UPDATE  $class SET pwd = ? WHERE mail = ? AND pwd = ?";
            if (mysqli_stmt_prepare($stmt, $sql)) {
            mysqli_stmt_bind_param($stmt, "sss",$nouveau_pwd, $mail, $pwd);
            mysqli_stmt_execute($stmt);
            } else {
                header("Location: ../html/change-mot-de-passe?error=sql1");
                exit();
            }
   
            if($class=="teacher"){
            header("Location: ../html/profile-teacher.php?first_name=" . $first . "&last_name=" . $last . "&gender=" . $gender . "&adrass=" . $adrass . "&dat=" . $dat . "&tel=" . $tel . "&mail=" . $mail . "&pwd=" . $nouveau_pwd . "&id=" . $id);
            exit();
            }else{
                header("Location: ../html/profile-student.php?first_name=" . $first . "&last_name=" . $last . "&gender=" . $gender . "&adrass=" . $adrass . "&dat=" . $dat . "&tel=" . $tel . "&mail=" . $mail . "&pwd=" . $nouveau_pwd);
                exit();
            }

        } else {
            return 0;
        }
    } else {
        header("Location: ../html/change-mot-de-passe?error=sql1");
        exit();
    }
}

if (isset($_POST['change-pwd'])) {

    $mail = $_POST['mail'];
    $pwd = $_POST['pwd'];
    $nouveau_pwd = $_POST['nouveau_pwd'];
    if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../html/change-mot-de-passe.php?error=mail&mail=" . $mail );
        exit();
    } else {

        if (chang_pwd("teacher1", $mail, $pwd, $nouveau_pwd)) {
        } else if (chang_pwd("teacher2", $mail, $pwd, $nouveau_pwd)) {
        } else if (chang_pwd("teacher3", $mail, $pwd, $nouveau_pwd)) {
        } else if (chang_pwd("teacher4", $mail, $pwd, $nouveau_pwd)) {
        } else if (chang_pwd("teacher", $mail, $pwd, $nouveau_pwd)) {
        } else if (chang_pwd("admin", $mail, $pwd, $nouveau_pwd)) {
        } else {
             header("Location: ../html/change-mot-de-passe.php?error=not");
            exit();
        }
    }
}else if(isset($_POST['change-mail'])){
    $mail = $_POST['mail'];
    $pwd = $_POST['pwd'];
    $nouveau_mail = $_POST['nouveau_mail'];
    if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../html/change-mail.php?error=mail&mail=" . $mail );
        exit();
    }else if(!filter_var($nouveau_mail, FILTER_VALIDATE_EMAIL)){
        header("Location: ../html/change-mail.php?error=mail&nouveau_mail=" . $nouveau_mail );
        exit();
    } else {
        require 'databaes-connect.php';
        echo $nouveau_mail;
        $sql = "SELECT * FROM admin WHERE mail = ? AND pwd = ?";
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
                 $sql = " UPDATE  admin SET mail = ? WHERE mail = ? AND pwd = ?";
                if (mysqli_stmt_prepare($stmt, $sql)) {
                mysqli_stmt_bind_param($stmt, "sss",$nouveau_mail, $mail, $pwd);
                mysqli_stmt_execute($stmt);
                } else {
                    header("Location: ../html/change-mail?error=sql1");
                    exit();
                }
                header("Location: ../html/profile-admin.php?first_name=" . $first . "&last_name=" . $last .  "&mail=" . $nouveau_mail . "&pwd=" . $pwd . "&id=" . $id);
                exit();
    
            } else {
                header("Location: ../html/change-mail.php?error=not");
                exit();
            }
        } else {
            header("Location: ../html/change-mail?error=sql1");
            exit();
        }
    }    
    
}else {
    header("Location: ../sigin.php");
    exit();
}

