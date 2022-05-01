
<?php session_start();
if(!isset($_SESSION['first_name'])){
  header('location:../sigin.php');
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
  <link rel="stylesheet" href="../css/style-profile-teacher.css">
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
        <a href="profile-teacher.php" > <?php echo $_SESSION['first_name'];  ?> </a>
        <img src="../imaj/images.png" alt="">
      </div>
    </div>
    <?php
    function number_column()
    {
      require '../function/databaes-connect.php';

      $id = $_SESSION['id_class'];
      $sql = "SELECT s.* FROM student s WHERE  s.id_class = $id ";

      $stmt = mysqli_stmt_init($conn);
      if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);
        mysqli_stmt_store_result($stmt);

        $number_rows = mysqli_num_rows($result);
        return $number_rows;
      } else {
        header("Location: ../sigin.php?error=sql1&way=" . $submit);
        exit();
      }
    }
    ?>
    <div class="overflow">
      <div class="cercle"></div>
    </div>
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
          <a class="chang" href="change-mot-de-passe.php"> تغير كلمة السر </a>
        </div>
      </form>
      <div class="students">
        <div class="student"> الطلاب </div>
        <div class="numberStudent"> عدد الطلاب في المادة :
          <span> <?php echo number_column(); ?> </span>
        </div>
        <a class="chang" href="list-student.php?id=<?php echo $_SESSION['id_class'] ?> "> قائمة الطلاب </a>
      </div>

      <div class="searchs">
        <div class="search"> البحث </div>
        <div class="f">
          <form class="form" action="../function/information.php" method="POST">

            <div>
              <input class="input" type="mail" name="mail" required autocomplete="off" value="" />
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
            <?php
      
              echo ' <button class="submit" type="submit" name="submit"  >بحث</button>';
            ?>
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
            if (isset($_GET['dat_student']))
              echo "<span class='info'>" .$_GET['dat_student'] . "</span>";
            ?>
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