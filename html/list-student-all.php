<?php session_start();
if (!isset($_SESSION['first_name'])) {
    header('location:../sigin.php');
} else {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>قائمة الطلبة </title>
        <link rel="stylesheet" href="../css/style-list-student.css">
        <link rel="stylesheet" href="../css/style-header.css">
        <script type="text/javascript" src="../js/jquery-3.6.0.min.js"> </script>

    </head>

    <body>
            <header>
                <div class="logo">
                    <img src="../imaj/logo.png" alt="" />
                </div>
                <div class="list">
                    <a href="../index.php">الصفحة الرئيسية</a>
                    <a href="profile-admin.php"><?php echo  $_SESSION['first_name'];  ?></a>
                    <img src="../imaj/images.png" alt="">
                </div>
            </header>
            <div class="listStudent">
                <span> قائمة الطلاب </span>
                <a href="profile-admin.php"> رجوع </a>
            </div>
            <center>
                <div dir="rtl">

                    <div class="tr">
                        <div class="th">N</div>
                        <div class="th">الإسم </div>
                        <div class="th">القب </div>
                        <div class="th">تاريخ الميلاد </div>
                        <div class="th long">البريد الإلكتروني </div>
                        <div class="th "> عدد الأحزاب </div>

                    </div>


                    <?php
                    require "../function/databaes-connect.php";
                    for ($i = 1; $i < 5; $i++) {
                        $sql = "";
                        $sql = "SELECT * FROM student  WHERE  id_class = $i ";

                        echo "<div class='tr'> <div class='classe'> القسم : " . $i . "</div> </div>";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            $n = 1;
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo " 
                                   <div class='tr'>
                                           <div class='td'>" . $n . "</div>
                                           <div class='td'>" . $row['first_name'] . "</div>
                                           <div class='td'>" . $row['last_name'] . "</div>
                                           <div class='td'>" . $row['dat'] . "</div>
                                           <div class='td long'>" . $row['mail'] . "</div>
                                           <div class='td '>" . $row['hizb'] . "</div>
                                           
                                           <a class='delate'  href='../function/delate-student.php?mail=" . $row['mail'] . "&id_class=" . $i .  "' > حذف  </a>
                                       </div>
                                 ";

                                $n = $n + 1;
                            }
                        } else {
                            echo "<div class='tr'> <div class='classe color'>فارغ  </div> </div>";
                        }
                    }
                    ?>
                    <!-- <div class="confirm">
                        <p> هل انت متأكد من الحذف </p>
                        <div>
                            <span class="test" confirm="yes"> نعم</span>
                            <span class="test" confirm="no"> لا </span>
                        </div>
                        <p class='background'></p>
                    </div> -->
                    <div class="confirm">
                        <p> هل انت متأكد من الحذف </p>
                        <div>
                            <span class="test" confirm="yes"> نعم</span>
                            <span class="test" confirm="no"> لا </span>
                        </div>
                    </div>
                    <div class='background'></div>
                    
                </div>
            </center>
    </body>
    <script src="../js/confirm.js"> </script>

    </html>
<?php } ?>