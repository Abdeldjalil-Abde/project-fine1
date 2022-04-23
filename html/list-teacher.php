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
    <title>قائمة الطلبة </title>
    <link rel="stylesheet" href="../css/style-header.css">
    <link rel="stylesheet" href="../css/style-liste-student.css">
</head>

<body>
    <header>
        <div class="container">
            <div class="logo">
                <img src="../imaj/logo.png" alt="" />
            </div>
            <div class="list">
                <a href="../index.php">الصفحة الرئيسية</a>
                <a href="profile-admin.php"><?php echo  $_SESSION['first_name'] ;  ?></a>
                <img src="../imaj/images.png" alt="">
            </div>
        </div>
        <div class="listStudent">
           <span > قائمة الأساتذة </span>
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
                </div>
                <?php
                require "../function/databaes-connect.php";

                $sql = "";

                $sql = "SELECT * FROM teacher;";


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
                    </div>  ";
                        $n = $n + 1;
                    }
                }
                ?>

            </div>
        </center>
    </header>
    
</body>

</html>
<?php }?>