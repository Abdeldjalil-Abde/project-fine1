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
        <div class="overflow">
            <div class="cercle"></div>
        </div>
        <main dir="rtl">

            <img class="img" src="../imaj/images.png" alt="">
            <div class="center">
                <form action="">
                    <div>
                        <span>البريد الإلكتروني :</span>
                        <?php echo "<span class='info'>" . $_GET['pwd'] . "</span>"; ?>
                        <a class="chang" href="change-mot-de-passe.php"> تغيير البريد الإلكتروني :</a>
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
                            <span> <?php //echo number_column($_GET['id']); 
                                    ?> </span>
                        </div>
                        <a class="chang" href="liste-student.php?id=<?php echo $_GET['id'] ?>"> قائمة الطلاب </a>
                    </div>
                    <div class="searchs">
                        <div class="search"> البحث </div>
                        <div class="f">
                            <form class="form" action="../function/information-student.php" method="POST">

                                <div>
                                    <input class="input" type="mail" name="mail" required autocomplete="off" value="" />
                                    <label class="lable" for="">
                                        <span class="txt">إدخال البريد الإلكتروني</span>
                                    </label>

                                </div>
                                <?php
                                // if (isset($_GET['error'])) {
                                //   if ($_GET['error'] == "mail") {
                                //     echo '<p class="error">البريد الإلكتروني غير صالح اعد كتابته</p>';
                                //   } else if ($_GET['error'] == "not") {
                                //     echo '<p class="error">  البريد الإلكتروني غير مسجل  </p>';
                                //   } else if ($_GET['error'] == "sql1") {
                                //     echo '<p class="error">SQL ERROR 1</p>';
                                //   }
                                // }
                                ?>
                                <?php
                                // if ($_GET['id'] == '1') {
                                //   echo ' <button class="submit" type="submit" name="submit" value="1" >بحث</button>';
                                // } else if ($_GET['id'] == '2') {
                                //   echo ' <button class="submit" type="submit" name="submit" value="2" >بحث</button>';
                                // } else if ($_GET['id'] == '3') {
                                //   echo ' <button class="submit" type="submit" name="submit" value="3" >بحث</button>';
                                // } else {
                                //   echo ' <button class="submit" type="submit" name="submit" value="4" >بحث</button>';
                                // }
                                ?>
                                <button class="submit" type="submit" name="submit" value="1" >بحث</button>
                            </form>
                        </div>
                        <div class="infStudent">
                            <span class="center">الطالب :</span>
                            <div>
                                <span> الإسم :</span>
                                <?php
                                if (isset($_GET['first_student']))
                                    echo "<span class='info'>" . $_GET['first_student'] . "</span>";
                                ?>
                                <span> القب :</span>
                                <?php
                                if (isset($_GET['last_student']))
                                    echo "<span class='info'>" . $_GET['last_student'] . "</span>";
                                ?>
                            </div>
                            <div>
                                <span>تاريخ الميلاد : </span>
                                <?php
                                if (isset($_GET['last_student']))
                                    echo "<span class='info'>" . $_GET['dat_student'] . "</span>";
                                ?>
                            </div>
                        </div>
                        <div class="teacher"></div>
                    </div>
                </div>
        </main>
    </header>
</body>

</html>