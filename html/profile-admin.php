<?php session_start();
if(!isset($_SESSION['first_name'])){
    header('location:jju.php');
}else{
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الملف الشخصي </title>
    <link rel="stylesheet" href="../css/style-header.css">
    <link rel="stylesheet" href="../css/style-profile-admin.css">

</head>

<body>
    <header>
        <div class="container">
            <div class="logo">
                <img src="../imaj/logo.png" alt="" />
            </div>
            <div class="list">
                <a href="../index.php">الصفحة الرئيسية</a>
                <a href="../logout.php"> تسجيل الخروج </a>
                <a href="profile-admin.php"><?php echo  $_SESSION['first_name'];  ?></a>
                <img src="../imaj/images.png" alt="">
            </div>
        </div>
        <?php
        function number_column($type)
        {
            require '../function/databaes-connect.php';

            if ($type == 'student') {
                $number_rows = 0;
                for ($i = 1; $i < 5; $i++) {

                    $teble = "teacher" . $i;
                    $sql = "SELECT * FROM $teble";
                    $stmt = mysqli_stmt_init($conn);
                    if (mysqli_stmt_prepare($stmt, $sql)) {
                        mysqli_stmt_execute($stmt);

                        $result = mysqli_stmt_get_result($stmt);
                        mysqli_stmt_store_result($stmt);

                        $number_rows = $number_rows + mysqli_num_rows($result);
                    } else {
                        header("Location: ../sigin.php?error=sql1&way=" . $submit);
                        exit();
                    }
                }
                return $number_rows;
            } else {
                $sql = "SELECT * FROM teacher";
                $stmt = mysqli_stmt_init($conn);
                if (mysqli_stmt_prepare($stmt, $sql)) {
                    mysqli_stmt_execute($stmt);

                    $result = mysqli_stmt_get_result($stmt);
                    mysqli_stmt_store_result($stmt);

                    $number_rows = mysqli_num_rows($result);
                    return $number_rows;
                } else {
                    header("Location: ../sigin.php?error=sql&way=" . $submit);
                    exit();
                }
            }
        }
        ?>
        <div class="overflow">
            <div class="cercle"></div>
        </div>
        <main dir="rtl">

            <img class="img" src="../imaj/images.png" alt="">
            <div class="center">
                <form action="">
                    <div>
                        <span>البريد الإلكتروني :</span>
                        <?php echo "<span class='info'>" . $_SESSION['mail'] . "</span>"; ?>
                        <a class="chang" href="change-mail.php"> تغيير البريد الإلكتروني </a>
                    </div>
                    <div>
                        <span>كلمة السر : </span>
                        <?php echo "<span class='info'>" . $_SESSION['pwd'] . "</span>"; ?>
                        <a class="chang" href="change-mot-de-passe.php"> تغير كلمة السر </a>
                    </div>
                </form>
                <div class="ensmble-list">
                    <div class="students">
                        <div class="student"> الطلاب </div>
                        <div class="numberStudent"> عدد الطلاب في المادة :
                            <span> <?php echo number_column("student");
                                    ?> </span>
                        </div>
                        <a class="chang" href="list-student-all.php"> قائمة الطلاب </a>
                    </div>
                    <div class="searchs">
                        <div class="search"> البحث </div>
                        <div class="f">
                            <form class="form" action="../function/information.php" method="POST">

                                <div>
                                    <input class="input" type="mail" name="mail_uesr" required autocomplete="off" value="" />
                                    <label class="lable" for="">
                                        <span class="txt">إدخال البريد الإلكتروني</span>
                                    </label>

                                </div>
                                <?php
                                if (isset($_GET['error'])) {
                                    if ($_GET['error'] == "mail") {
                                        echo '<p class="error">البريد الإلكتروني غير صالح اعد كتابته</p>';
                                    } else if ($_GET['error'] == "not") {
                                        echo '<p class="error">  البريد الإلكتروني غير مسجل  </p>';
                                    } else if ($_GET['error'] == "sql1") {
                                        echo '<p class="error">SQL ERROR 1</p>';
                                    }
                                }
                                ?>
                                <button class="submit" type="submit" name="information" >بحث</button>
                            </form>
                        </div>
                        <div class="infStudent">
                            <div>
                                <span> الإسم :</span>
                                <?php
                                if (isset($_GET['first_uesr']))
                                    echo "<span class='info'>" . $_GET['first_uesr'] . "</span>";

                                ?>
                                <span> القب :</span>
                                <?php
                                if (isset($_GET['last_uesr']))
                                    echo "<span class='info'>" . $_GET['last_uesr'] . "</span>";

                                ?>
                            </div>
                            <div>
                                <span>تاريخ الميلاد : </span>
                                <?php
                                if (isset($_GET['dat_uesr']))
                                    echo "<span class='info'>" . $_GET['dat_uesr'] . "</span>";


                                ?>
                            </div>
                            <div>
                                <span> الرتبة :</span>
                                <?php
                                if (isset($_GET['class']))
                                    if ($_GET['class'] == "teacher") {
                                        echo "<span class='info'> استاذ </span>";
                                    } else {
                                        echo "<span class='info'> طالب  </span>";
                                    }
                                ?>
                            </div>
                            <div>
                                <?php
                                if (isset($_GET['class'])) {
                                    if ($_GET['class'] == "teacher") {
                                        echo "<span> استاذ في القسم : </span>";
                                    } else {
                                        echo "<span> يدرس  في القسم : </span>";
                                    }
                                }
                                ?>
                                <?php
                                if (isset($_GET['class']))
                                    if ($_GET['class'] == "teacher1") {
                                        echo "<span class='info'> الأول </span>";
                                    } else if ($_GET['class'] == "teacher2") {
                                        echo "<span class='info'> الثاني  </span>";
                                    } else if ($_GET['class'] == "teacher3") {
                                        echo "<span class='info'> الثالث  </span>";
                                    } else if ($_GET['class'] == "teacher4") {
                                        echo "<span class='info'> الرابع  </span>";
                                    } else if ($_GET['class'] == "teacher") {
                                        if ($_GET['id'] == "1") {
                                            echo "<span class='info'> الأول </span>";
                                        } else if ($_GET['id'] == "2") {
                                            echo "<span class='info'> الثاني  </span>";
                                        } else if ($_GET['id'] == "3") {
                                            echo "<span class='info'> الثالث  </span>";
                                        } else if ($_GET['id'] == "4") {
                                            echo "<span class='info'> الرابع  </span>";
                                        }
                                    }

                                ?>
                            </div>
                        </div>

                    </div>
                    <div class="teachers">
                        <div class="teacher"> الأساتذة </div>
                        <div class="numberTeacher"> عددالأساتذة :
                            <span> <?php echo number_column("teacher");
                                    ?> </span>
                        </div>
                        <a class="chang" href="list-teacher.php"> قائمة الأساتذة </a>
                    </div>
                </div>
        </main>
    </header>
    <footer>
        <div class="links">
            <div class="links-container">
                <h3>معلومات الإتصال </h3>
                <a href="">QuranicSchool@gmail.com</a>
                <a href="">+213687654321</a>
                <a href="">+213756781234</a>
            </div>
            <div class="links-container">
                <h3> مواقع التواصل </h3>
                <a href="">Facebook</a>
                <a href="">Instagram</a>
                <a href="">YouTube</a>
            </div>
            <div class="links-container">
                <h3>العنوان </h3>
                <a href="https://goo.gl/maps/QGHyfpjcP72wm6Di6">M7F2+XP الجلفة</a>
            </div>
        </div>

        <div class="info">
            Copyright &#169; 2021-2022 focus Technology <br />
            All Rights Reserved
        </div>
    </footer>
</body>

</html>
<?php }?>