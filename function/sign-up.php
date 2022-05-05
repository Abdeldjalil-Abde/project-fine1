<?php
session_start();
if (isset($_POST['submit'])) {

    $first = $_POST['first_name'];
    $last = $_POST['last_name'];
    $gender = $_POST['gender'];
    $location = $_POST['location'];
    $date = $_POST['date'];
    $tel = $_POST['tel'];
    $mail = $_POST['mail'];
    $pwd = $_POST['pwd'];
    $pwd_repeat = $_POST['pwd-repeat'];
    $class = $_POST['class'];

    if (!preg_match("/^[\p{Arabic}]+$/u", $first)) {
        header("Location: ../sinup.php?error=first&last_name=" . $last . "&gender=" . $gender . "&location=" . $location . "&dat=" . $date . "&tel=" . $tel . "&mail=" . $mail . "&class=" . $class);
        exit();
    } else if (!preg_match("/^[\p{Arabic}]+$/u", $last)) {
        header("Location: ../sinup.php?error=last&first_name=" . $first . "&gender=" . $gender . "&location=" . $location . "&dat=" . $date . "&tel=" . $tel . "&mail=" . $mail . "&class=" . $class);
        exit();
    } else if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../sinup.php?error=mail&first_name=" . $first . "&last_name=" . $last . "&gender=" . $gender . "&location=" . $location . "&dat=" . $date . "&tel=" . $tel . "&class=" . $class);
        exit();
    } else if ($pwd !== $pwd_repeat) {
        header("Location: ../sinup.php?error=pwd&first_name=" . $first . "&last_name=" . $last . "&gender=" . $gender . "&location=" . $location . "&dat=" . $date . "&tel=" . $tel . "&mail=" . $mail . "&class=" . $class);
        exit();
    } else if ($class == "none") {
        header("Location: ../sinup.php?error=none&first_name=" . $first . "&last_name=" . $last . "&gender=" . $gender . "&location=" . $location . "&dat=" . $date . "&tel=" . $tel . "&mail=" . $mail . "&class=" . $class);
        exit();
    } else if ($gender == "") {
        header("Location: ../sinup.php?error=gender&first_name=" . $first . "&last_name=" . $last . "&gender=" . $gender . "&location=" . $location . "&dat=" . $date . "&tel=" . $tel . "&mail=" . $mail . "&class=" . $class);
        exit();
    } else {
        require 'databaes-connect.php';

        $sql = "SELECT * FROM student   WHERE mail = '$mail';";

        $stmt = mysqli_stmt_init($conn);
        if (mysqli_stmt_prepare($stmt, $sql)) {
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);

            if ($resultCheck > 0) {
                header("Location: ../sinup.php?error=mail_exist&first_name=" . $first . "last_name=" . $last . "&gender=" . $gender . "&location=" . $location . "&dat=" . $date . "&tel=" . $tel . "&mail=" . $mail . "&class=" . $class);
                exit();
            } else {

                $sql = "INSERT INTO  active (first_name, last_name, gender, location,  dat, tel, mail, pwd, hizb, id_class ) VALUES ('$first', '$last','$gender','$location','$date', '$tel', '$mail', '$pwd', 0,'$class');";

                $stmt = mysqli_stmt_init($conn);
                 echo $sql;
                if(mysqli_stmt_prepare($stmt, $sql)) {
                    echo $sql;
                    mysqli_stmt_execute($stmt);
                    //  header("Location: ../html/waiting.php");
                    // header("Location: ../html/download-information.php?first_name=" . $first . "&last_name=" . $last . "&gender=" . $gender . "&location=" . $location . "&date=" . $date . "&tel=" . $tel . "&mail=" . $mail . "&class=" . $class);
                     header("Location: ../index.php?ok=ok");
                    exit();
                } else {
                    header("Location: ../sinup.php?error=sql2");
                    exit();
                }
            }
        } else {
            header("Location: ../sinup.php?error=sql1&first_name=" . $first . "&last_name=" . $last . "&gender=" . $gender . "&location=" . $location . "&date=" . $date . "&phone=" . $tel . "&mail=" . $mail . '&pwd=' . $pwd);
            exit();
        }
    }
} else {
    header("Location: ../sinup.php?");
    exit();
}
