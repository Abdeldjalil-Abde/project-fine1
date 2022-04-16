<?php
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
            $stmt2 = mysqli_stmt_init($conn);
            $sql2 = "SELECT * FROM admin ;";
            if (mysqli_stmt_prepare($stmt2, $sql2)) {
                mysqli_stmt_execute($stmt2);
                $result2 = mysqli_stmt_get_result($stmt2);
                mysqli_stmt_store_result($stmt2);

                $row = mysqli_fetch_assoc($result2);

                $first = $row['first_name'];
                $last = $row['last_name'];
                $mail = $row['mail'];
                $pwd = $row['pwd'];
                $id = $row['id'];
            } else {
                header("Location: ../html/profile-teacher.php?error=sql1&way=" . $submit);
                exit();
            }
            $row = mysqli_fetch_assoc($result1);
            $first_uesr = $row['first_name'];
            $last_uesr = $row['last_name'];
            $dat_uesr =  $row['dat'];

            header("Location: ../html/profile-admin.php?first_uesr=" . $first_uesr . "&last_uesr=" . $last_uesr . "&dat_uesr=" . $dat_uesr ."&first_name=" . $first . "&last_name=" . $last . "&mail=" . $mail . "&pwd=" . $pwd . "&id=" . $id);
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
    $id = $_POST["submit"];
    require 'databaes-connect.php';
    $sql = "";

    $stmt = mysqli_stmt_init($conn);
    $sql = "SELECT * FROM teacher   WHERE id = ?;";
    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_bind_param($stmt, "s", $id);
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
        $id = $row['id'];
    } else {
        header("Location: ../html/profile-teacher.php?error=sql1&way=" . $submit);
        exit();
    }

    if (!filter_var($mail_student, FILTER_VALIDATE_EMAIL)) {

        header("Location: ../html/profile-teacher.php?error=mail&mail=" . $mail_student . "&first_name=" . $first . "&last_name=" . $last . "&gender=" . $gender . "&adrass=" . $adrass . "&dat=" . $dat . "&tel=" . $tel . "&mail=" . $mail . "&pwd=" . $pwd . "&id=" . $id);
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
                header("Location: ../html/profile-teacher.php?first_name=" . $first . "&last_name=" . $last . "&gender=" . $gender . "&adrass=" . $adrass . "&dat=" . $dat . "&tel=" . $tel . "&mail=" . $mail . "&pwd=" . $pwd . "&mail_student=" . $mail_student . "&first_student=" . $first_student . "&last_student=" . $last_student . "&dat_student=" . $dat_student . "&id=" . $id);
                exit();
            } else {
                header("Location: ../html/profile-teacher.php?error=not&first_name=" . $first . "&last_name=" . $last . "&gender=" . $gender . "&adrass=" . $adrass . "&dat=" . $dat . "&tel=" . $tel . "&mail=" . $mail . "&pwd=" . $pwd . "&id=" . $id);
            }
        } else {
            header("Location: ../html/profile-teacher.php?error=sql1&way=" . $submit);
            exit();
        }
    }
} else if (isset($_POST['information'])) {
    $mail_uesr = $_POST['mail_uesr'];
    echo $mail_uesr;
    require 'databaes-connect.php';
    $sql = "";

    $stmt = mysqli_stmt_init($conn);
    $sql = "SELECT * FROM admin ;";
    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        mysqli_stmt_store_result($stmt);

        $row = mysqli_fetch_assoc($result);

        $first = $row['first_name'];
        $last = $row['last_name'];
        $mail = $row['mail'];
        $pwd = $row['pwd'];
        $id = $row['id'];
    } else {
        header("Location: ../html/profile-admin.php?error=sql1&way=" . $submit);
        exit();
    }
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
            header("Location: ../html/profile-admin.php?error=not&first_name=" . $first . "&last_name=" . $last . "&mail=" . $mail . "&pwd=" . $pwd . "&id=" . $id);
            exit();
        }
    }
} else {
    exit();
}
