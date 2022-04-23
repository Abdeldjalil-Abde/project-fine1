<?php session_start();
if(!isset($_SESSION['first_name'])){
  header('location:jju.php');
}else{
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>تغيير البريد الإلكتروني </title>
  <link rel="stylesheet" href="../css/style-sigin.css" />
</head>

<body>
  <header>
    <div class="container">
      <div class="logo">
        <img src="../imaj/logo.png" alt="" />
        <div class="list">
          <?php
          if (isset($_SESSION['first_name']))
            echo "
            <a href='../index.php'>الصفحة الرئيسية</a>
            <a href='../logout.php'>تسجيل الخروج </a>
            <a href='../function/profile.php'>" . $_SESSION['first_name'] . "</a>
            <img src='../imaj/images.png' >";
          ?>
        </div>
      </div>
    </div>
    <main dir="rtl">

      <form method="POST" action="../function/changemet.php">
        <p class="msg">يرجى ملئ المعلومات لتغيير البريد الإلكتروني </p>
        <?php
        if (isset($_GET['error'])) {
          if ($_GET['error'] == "mail") {
            echo '<p class="error">البريد الإلكتروني غير صالح اعد كتابته</p>';
          } else if ($_GET['error'] == "not") {
            echo '<p class="error"> البريد الإلكتروني غير مسجل </p>';
          } else if ($_GET['error'] == "sql1") {
            echo '<p class="error">SQL ERROR 1</p>';
          } else if ($_GET['error'] == "sql2") {
            echo '<p class="error">SQL ERROR 2</p>';
          }
        } else {
          echo '<p class="error"></p>';
        }
        ?>
        <div>
          <?php
          if (isset($_GET['mail'])) {
            $mail = $_GET['mail'];
          } else {
            $mail = "";
          }
          echo '<input type="mail" name="mail" required autocomplete="off" value="' . $mail . '">';
          ?>

          <label class="lable" for="">
            <span class="txt">البريد الألكتروني الحالي </span>
          </label>
        </div>
        <div>
          <?php
          if (isset($_GET['nuoveau_mail'])) {
            $nuoveau_mail = $_GET['nuoveau_mail'];
          } else {
            $nuoveau_mail = "";
          }
          echo '<input type="mail" name="nouveau_mail" required autocomplete="off" value="' . $nuoveau_mail . '">';
          ?>
          <label class="lable" for="">
            <span class="txt">البريد الإلكتروني الجديد </span>
          </label>
        </div>
        <div>
          <input type="password" name="pwd" required autocomplete="off" />
          <label class="lable" for="">
            <span class="txt">كلمة السر </span>
          </label>
        </div>
        <button class="submit" name="change-mail" type="submit">
          تأكيد
        </button>
      </form>
    </main>
  </header>
</body>

</html>
<?php  }?>