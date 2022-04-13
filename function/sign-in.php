<?php
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

            $first = $row['first_name'];
            $last = $row['last_name'];
            $gender = $row['gender'];
            $adrass = $row['adress'];
            $dat =  $row['dat'];
            $tel =  $row['tel'];
            $id = $row['id_teacher'];
            if($class="teacher"){
            header("Location: ../html/profile-teacher.php?first_name=" . $first . "&last_name=" . $last . "&gender=" . $gender . "&adrass=" . $adrass . "&dat=" . $dat . "&tel=" . $tel . "&mail=" . $mail . "&pwd=" . $pwd . "&id=" . $id);
            exit();
            }else{
                header("Location: ../html/profile-student.php?first_name=" . $first . "&last_name=" . $last . "&gender=" . $gender . "&adrass=" . $adrass . "&dat=" . $dat . "&tel=" . $tel . "&mail=" . $mail . "&pwd=" . $pwd);
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
        } else {
            header("Location: ../sigin.php?error=not" );
            exit();
        }
    }
} else {
    header("Location: ../sigin.php");
    exit();
}
