<?php
session_start();
if (!isset($_SESSION['first_name'])) {
    header('location:../signin.php');
} else {
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>قائمة الطلبة </title>
        <link rel="stylesheet" href="../css/style-header.css">
        <link rel="stylesheet" href="../css/style-list-student.css">
    </head>

    <body>
        <div class="continue">
            <header>
                <div class="logo">
                    <img src="../imaj/logo.png" alt="" />
                </div>
                <div class="list">
                    <a href="../index.php">الصفحة الرئيسية</a>
                    <a href="profile-teacher.php"> <?php echo $_SESSION['first_name'];  ?> </a>
                    <img src="../imaj/images.png" alt="">
                </div>
            </header>
            <div class="listStudent">
                <span> قائمة الطلاب </span>
                <a href="profile-teacher.php"> رجوع </a>
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
                    <form method='POST' action='../function/save.php'>

                        <?php
                        require "../function/databaes-connect.php";

                        $sql = "";
                        $id = $_SESSION['id_class'];
                        $sql = "SELECT s.* FROM student s WHERE  s.id_class = $id ";

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
                        
                        <input type='hidden' name='mail" . $n . "' required autocomplete='off' value='" . $row['mail'] . "' />
                        <div class='td '>
                             <input type='number' name='hizb" . $n . "' required autocomplete='off' value='" . $row['hizb'] . "' />
                       </div>
                    </div>  ";
                                $n = $n + 1;
                            }
                        }
                        echo " <input type='hidden' name='number_student' required autocomplete='off' value='" . $n - 1 . "' />";
                        echo " <input type='hidden' name='id_class' required autocomplete='off' value='" . $_SESSION['id_class'] . "' />";

                        ?>
                        <button class="submit" type="submit" name="submit">حفظ </button>

                    </form>
                </div>
            </center>
        </div>
    </body>

    </html>
<?php } ?>