<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الملف الشخصي </title>
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
                <?php echo "<samp>" . $_GET['first_name'] . "</samp>"; ?>
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
                    if ($i == '1') {
                        $teble = 'teacher1';
                    } else if ($i == '2') {
                        $teble = 'teacher2';
                    } else if ($i == '3') {
                        $teble = 'teacher3';
                    } else if ($i == '4') {
                        $teble = 'teacher4';
                    }
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
                        <?php echo "<span class='info'>" . $_GET['mail'] . "</span>"; ?>
                        <a class="chang" href="change-mail.php"> تغيير البريد الإلكتروني </a>
                    </div>
                    <div>
                        <span>كلمة السر : </span>
                        <?php echo "<span class='info'>" . $_GET['pwd'] . "</span>"; ?>
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
                        <a class="chang" href="liste-student-all.php?id=<?php echo $_GET['id'] ?>"> قائمة الطلاب </a>
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
                                <button class="submit" type="submit" name="information" value="444">بحث</button>
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
                        </div>

                    </div>
                    <div class="teachers">
                        <div class="teacher"> الأساتذة </div>
                        <div class="numberTeacher"> عددالأساتذة :
                            <span> <?php echo number_column("teacher");
                                    ?> </span>
                        </div>
                        <a class="chang" href="liste-teacher.php"> قائمة الأساتذة </a>
                    </div>
                </div>
        </main>
    </header>
</body>

</html>