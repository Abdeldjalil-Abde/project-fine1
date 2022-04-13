<?php

if (isset($_POST['submit'])) {

    $first = $_POST['first_name'];
    $last = $_POST['last_name'];
    $gender = $_POST['gender'];
    $adrass = $_POST['adrass'];
    $date = $_POST['date'];
    $tel = $_POST['tel'];
    $mail = $_POST['mail'];
    $pwd = $_POST['pwd'];
    $pwd_repeat = $_POST['pwd-repeat'];
    $teacher = $_POST['teacher'];

    echo $teacher;

    if (preg_match("/^[\x0600-\x06FF]/i", $first)) {
        header("Location: ../signup.php?error=first&last_name=" . $last . "&gender=" . $gender . "&adrass=" . $adrass . "&date=" . $date . "&phone=" . $tel . "&mail=" . $mail . "&teacher=" . $teacher);
        exit();
    } else if (preg_match("/^[\x0600-\x06FF]/i", $last)) {
        header("Location: ../signup.php?error=last&first_name=" . $first . "&gender=" . $gender . "&adrass=" . $adrass . "&date=" . $date . "&phone=" . $tel . "&mail=" . $mail . "&teacher=" . $teacher);
        exit();
    } else if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../signup.php?error=mail&first_name=" . $first . "last_name=" . $last . "&gender=" . $gender . "&adrass=" . $adrass . "&date=" . $date . "&phone=" . $tel . "&teacher=" . $teacher);
        exit();
    } else
     if ($pwd !== $pwd_repeat) {
        header("Location: ../signup.php?error=pwd&first_name=" . $first . "last_name=" . $last . "&gender=" . $gender . "&adrass=" . $adrass . "&date=" . $date . "&phone=" . $tel . "&mail=" . $mail . "&teacher=" . $teacher);
        exit();
    } else {
        require 'databaes-connect.php';

        if ($teacher == "teacher1") {
            $sql = "SELECT * FROM teacher1   WHERE mail = '$mail';";
        } elseif ($teacher == "teacher2") {
            $sql = "SELECT * FROM teacher2 WHERE mail = '$mail';";
        } elseif ($teacher == "teacher3") {
            $sql = "SELECT * FROM teacher3  WHERE mail = '$mail';";
        } elseif ($teacher == "teacher4") {
            $sql = "SELECT * FROM teacher4 WHERE mail = '$mail';";
        }


        $stmt = mysqli_stmt_init($conn);
        if (mysqli_stmt_prepare($stmt, $sql)) {
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);

            if ($resultCheck > 0) {
                header("Location: ../sinup.php?error=mail_exist&first_name=" . $first . "&last_name=" . $last . "&age=" . $age . "&phone=" . $tel . "&submit=" . $submit);
                exit();
            } else {
                if ($teacher == "teacher1") {
                    $sql = "INSERT INTO  teacher1 (first_name, last_name,  gender, adress,  dat, tel, mail, pwd) VALUES ('$first', '$last','$gender','$adrass','$date', '$tel', '$mail', '$pwd');";
                } elseif ($teacher == "teacher2") {
                    $sql = "INSERT INTO teacher2 (first_name, last_name,  gender, adress,  dat, tel, mail, pwd) VALUES ('$first', '$last','$gender','$adrass','$date', '$tel', '$mail', '$pwd');";
                } elseif ($teacher == "teacher3") {
                    $sql = "INSERT INTO teacher3  (first_name, last_name,  gender, adress,  dat, tel, mail, pwd) VALUES ('$first', '$last','$gender','$adrass','$date', '$tel', '$mail', '$pwd');";
                } elseif ($teacher == "teacher4") {
                    $sql = "INSERT INTO teacher4 (first_name, last_name,  gender, adress,  dat, tel, mail, pwd) VALUES  ('$first', '$last','$gender','$adrass','$date', '$tel', '$mail', '$pwd');";
                }


                $stmt = mysqli_stmt_init($conn);

                if (mysqli_stmt_prepare($stmt, $sql)) {

                    mysqli_stmt_execute($stmt);
                    header("Location: ../html/profile-student.php?first_name=" . $first . "&last_name=" . $last . "&gender=" . $gender . "&adrass=" . $adrass . "&dat=" . $date . "&tel=" . $tel . "&mail=" . $mail . "&teacher=" . $teacher . '&pwd=' . $pwd);
                    exit();
                } else {
                    header("Location: ../sinup.php?error=sql2&first_name=" . $first . "last_name=" . $last . "&gender=" . $gender . "&adrass=" . $adrass . "&date=" . $date . "&phone=" . $tel . "&mail=" . $mail . "&teacher=" . $teacher . '&pwd=' . $pwd);
                    exit();
                }
            }
        } else {
            header("Location: ../sinup.php?error=sql1&first_name=" . $first . "last_name=" . $last . "&gender=" . $gender . "&adrass=" . $adrass . "&date=" . $date . "&phone=" . $tel . "&mail=" . $mail . "&teacher=" . $teacher . '&pwd=' . $pwd);
            exit();
        }
    }
} else {
    header("Location: ../sinup.php?submit=" . $submit);
    exit();
}
