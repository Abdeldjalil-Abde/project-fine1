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
    <title>الملف الشخصي </title>
    <link rel="stylesheet" href="../css/verable.css">
    <link rel="stylesheet" href="../css/style-header.css">
    <link rel="stylesheet" href="../css/style-profile-Student.css">
  </head>

  <body>
      <header>
        <div class="logo">
          <img src="../imaj/logo.png" alt="" />
        </div>
        <div class="list">
          <a href="../index.php">الصفحة الرئيسية</a>
          <a href="../logout.php"> تسجيل الخروج </a>
          <a href="profile-student.php"><?php echo  $_SESSION['first_name'];  ?></a>
          <img src="../imaj/images.png" alt="">
        </div>
      </header>

      <div class="information"></div>

      <main dir="rtl">

        <img class="img" src="../imaj/images.png" alt="">
        <form action="">
          <div>
            <span> الإسم :</span>
            <?php echo "<span class='info'>" . $_SESSION['first_name'] . "</span>"; ?>
            <span> القب :</span>
            <?php echo "<span class='info'>" . $_SESSION['last_name'] . "</span>"; ?>

          </div>
          <div>
            <span>تاريخ الميلاد : </span>
            <?php echo "<span class='info'>" . $_SESSION['dat'] . "</span>"; ?>
          </div>
          <div>
            <span> العنوان : </span>
            <?php echo "<span class='info'>" . $_SESSION['location'] . "</span>"; ?>
          </div>
          <div>
            <span> الجنس : </span>
            <?php echo "<span class='info'>" . $_SESSION['gender'] . "</span>"; ?>
          </div>
          <div>
            <span>رقم الهاتف (المعني /الولي) : </span>
            <?php echo "<span class='info'>" . $_SESSION['tel'] . "</span>"; ?>
          </div>
          <div>
          </div>
          <div>
            <span>البريد الإلكتروني : </span>
            <?php echo "<span class='info'>" . $_SESSION['mail'] . "</span>"; ?>
          </div>
          <div>
            <span>كلمة السر : </span>
            <?php echo "<span class='info'>" . $_SESSION['pwd'] . "</span>"; ?>
            <a class="chang" href="change_password.php"> تغير كلمة السر </a>
          </div>
        </form>

        <div class="hezb">
          <div class=" rejcter">الأمحفوظات </div>
          <div class="sub"> حزب </div>
          <span> <?php echo $_SESSION['hizb']; ?> </span>
        </div>
      </main>
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
<?php } ?>