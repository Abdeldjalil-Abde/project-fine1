<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>مدرسة قرأنية</title>
  <link rel="stylesheet" href="css/style-home.css" />
  <link rel="stylesheet" href="css/style-waiting.css" />
  <script type="text/javascript" src="js/jquery-3.6.0.min.js"> </script>
</head>

<body>
  <header>
    <div class="logo">
      <img src="imaj/logo.png" alt="" />
    </div>
    <div class="list">
      <?php
      if (isset($_SESSION['first_name'])) {
        echo "
        <a href='index.php'>الصفحة الرئيسية</a>
        <a href='logout.php'>تسجيل الخروج </a>
        <a href='function/profile.php'>" . $_SESSION['first_name'] . "</a>
        <img src='imaj/images.png' >";
      } else {
        echo
        "
        <a href='index.php'>الصفحة الرئيسية</a>
        <a href='signin.php'>تسجيل الدخول</a>
        <a href='signup.php'>تسجيل حساب جديد</a> ";
      }
      ?>
    </div>
  </header>
  <section>
    <div class=" text"> مدرسة الفرقان لتعليم القراني </div>
    <div class="text2 text"> { خَيْرُكُمْ مَنْ تَعَلَمَ القُرآن وَ عَلَمَهُ } </div>
    <?php
    if (isset($_GET['ok'])){
        echo " <div class='ok'>
        <h2> يرجى الإنتظار او التقرب من المركز لتفعيل حسابك</h2>
        <button class='active'> موافق </button>
      </div>
      <div class='background'></div>";
      }
    ?>
    <div  class="content">
       <div class="Accessories Register">
        <a href="signup.php">التسجيل في الدورة</a>
      </div>
      <div class="Accessories">
        <a href="" > تفسير القران </a>
        <a href="Accessories/supplement1.php"> حصن المسلم</a>
      </div>
      <div class="Accessories">
        <a href=""> احكام التجويد</a>
        <a href="">الفقه</a>
      </div>
    </div>
  </section>
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
  <script src="js/confirm.js"> </script>

</body>

</html>