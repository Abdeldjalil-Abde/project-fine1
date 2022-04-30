<?php
if (isset($_POST['submit'])) {
    require 'databaes-connect.php';
    $id  =  $_POST['id_class'];
    $i = $_POST['number_student'];

    for ($k = 1; $k <= $i; $k++) {

        $mail = $_POST['mail' . $k];
        $hizb = $_POST['hizb' . $k];

        $sql = "UPDATE student SET hizb = ? WHERE  id_class = ? AND mail = ? ;";
        $stmt = mysqli_stmt_init($conn);

        if (mysqli_stmt_prepare($stmt, $sql)) {
            mysqli_stmt_bind_param($stmt, "sss", $hizb, $id, $mail);
            mysqli_stmt_execute($stmt);
            header("Location: ../html/list-student.php");
        } else {

            header("Location: ../html/change-mot-de-passe.php?error=sql1");
            exit();
        }
    }
    header("Location: ../html/list-student.php");
    exit();
}
