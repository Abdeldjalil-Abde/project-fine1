<?php
session_start();

function search($class, $mail)
{
    require 'databaes-connect.php';
    $sql = "SELECT * FROM $class WHERE mail = ? ";

    $stmt = mysqli_stmt_init($conn);

    if (mysqli_stmt_prepare($stmt, $sql)) {

        mysqli_stmt_bind_param($stmt, "s", $mail);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);
        mysqli_stmt_store_result($stmt);
        if (mysqli_num_rows($result) > 0) {
            $first = $_POST['first_name'];
            $gender = $_POST['gender'];
            $last = $_POST['last_name'];
            $date = $_POST['date'];
            $location = $_POST['location'];
            $mail = $_POST['mail'];
            $tel = $_POST['tel'];
            header("Location: ../signup.php?error=mail_exist&first_name=" . $first . "&last_name=" . $last . "&gender=" . $gender . "&location=" . $location . "&date=" . $date . "&tel=" . $tel . "&mail=" . $mail );
            exit();
        } else {

            return 0;
        }
    } else {
        
        header("Location: ../signup.php?error=sql1&first_name=" . $first . "&last_name=" . $last . "&gender=" . $gender . "&location=" . $location . "&date=" . $date . "&tel=" . $tel . "&mail=" . $mail . '&pwd=' . $pwd);
        exit();
    }
}


if (isset($_POST['submit'])) {

    $first = $_POST['first_name'];
    $last = $_POST['last_name'];
    $gender = $_POST['gender'];
    $location = $_POST['location'];
    $date = $_POST['date'];
    $tel = $_POST['tel'];
    $mail = $_POST['mail'];
    $pwd = $_POST['pwd'];
    $pwd_repeat = $_POST['pwd_repeat'];
    $class = $_POST['class'];

    if (!preg_match("/^[\p{Arabic}]+$/u", $first)) {
        header("Location: ../signup.php?error=first&last_name=" . $last . "&gender=" . $gender . "&location=" . $location . "&date=" . $date . "&tel=" . $tel . "&mail=" . $mail . "&class=" . $class);
        exit();
    } else if (!preg_match("/^[\p{Arabic}]+$/u", $last)) {
        header("Location: ../signup.php?error=last&first_name=" . $first . "&gender=" . $gender . "&location=" . $location . "&date=" . $date . "&tel=" . $tel . "&mail=" . $mail . "&class=" . $class);
        exit();
    } else if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../signup.php?error=mail&first_name=" . $first . "&last_name=" . $last . "&gender=" . $gender . "&location=" . $location . "&date=" . $date . "&tel=" . $tel . "&class=" . $class);
        exit();
    } else if ($pwd !== $pwd_repeat) {
        header("Location: ../signup.php?error=pwd&first_name=" . $first . "&last_name=" . $last . "&gender=" . $gender . "&location=" . $location . "&date=" . $date . "&tel=" . $tel . "&mail=" . $mail . "&class=" . $class);
        exit();
    } else if ($class == "none") {
        header("Location: ../signup.php?error=none&first_name=" . $first . "&last_name=" . $last . "&gender=" . $gender . "&location=" . $location . "&date=" . $date . "&tel=" . $tel . "&mail=" . $mail . "&class=" . $class);
        exit();
    } else if ($gender == "") {
        header("Location: ../signup.php?error=gender&first_name=" . $first . "&last_name=" . $last . "&gender=" . $gender . "&location=" . $location . "&date=" . $date . "&tel=" . $tel . "&mail=" . $mail . "&class=" . $class);
        exit();
    } else {
        require 'databaes-connect.php';
         //............................................................................
            
                if (search("student", $mail)) {
                } else if (search("teacher", $mail)) {
                } else if (search("active", $mail)) {
                } else {
                    $sql = "INSERT INTO  active (first_name, last_name, gender, location,  dat, tel, mail, pwd, hizb, id_class ) VALUES ('$first', '$last','$gender','$location','$date', '$tel', '$mail', '$pwd', 0,'$class');";

                    $stmt = mysqli_stmt_init($conn);
                   if(mysqli_stmt_prepare($stmt, $sql)) {
                           mysqli_stmt_execute($stmt);
                           header("Location: ../index.php?ok");
                        exit();
                   } else {
                           header("Location: ../signup.php?error=sql2");
                           exit();
                   }
                }
         //................................................................................
    }
} else {
    header("Location: ../signup.php?");
    exit();
}
