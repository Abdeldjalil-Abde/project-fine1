<?php
if (isset($_POST['submit'])) {
    require 'databaes-connect.php';
    $id  =  $_POST['id_teacher'];
    $teacher = "teacher" . $id;
    $i = $_POST['number-student'];
    
    for ($k = 1; $k <= $i; $k++) {

        $mail = $_POST['mail' . $k];
        $hizb = $_POST['hezb' . $k];

        $sql = " UPDATE  $teacher SET hizb = ? WHERE mail = ?";
        $stmt = mysqli_stmt_init($conn);

        if (mysqli_stmt_prepare($stmt, $sql)) {
            mysqli_stmt_bind_param($stmt, "ss", $hizb, $mail);
            mysqli_stmt_execute($stmt);

            echo "تم";
        } else {

            header("Location: ../html/change-mot-de-passe.php?error=sql1");
            echo "لم يتم ";
            exit();
        }
    }
    header("Location: ../html/liste-student.php");
    exit();
}
