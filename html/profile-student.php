<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الملف الشخصي </title>
    <link rel="stylesheet" href="../css/style-profile-Student.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">
              <img src="../imaj/logo.png" alt="" />
            </div>
              <div class="list">
                <a href="../index.php">الصفحة الرئيسية</a>
                <?php echo "<samp class='info'>" . $_GET['first_name'] . "</samp>"; ?>
                <img src="../imaj/images.png" alt="">
              </div>
        </div>
        <div class="overflow">
            <div class="cercle"></div>
        </div>
        <main dir="rtl">
            
            <img class="img" src="../imaj/images.png" alt="">
            <form action="">
                <div>
                  <span>  الإسم :</span>
                  <?php echo "<span class='info'>" . $_GET['first_name'] . "</span>"; ?>
                  <span> القب :</span>
                  <?php echo "<span class='info'>" . $_GET['last_name'] . "</span>"; ?>

                </div>
                <div>
                  <span>تاريخ الميلاد : </span>
                  <?php echo "<span class='info'>" . $_GET['dat'] . "</span>"; ?>
                  </div>
                  <div>
                  <span> العنوان : </span>
                  <?php echo "<span class='info'>" . $_GET['adrass'] . "</span>"; ?>
                </div>
                <div>
                  <span> الجنس : </span>
                  <?php echo "<span class='info'>" . $_GET['gender'] . "</span>"; ?>
                </div>
                <div>
                  <span>رقم الهاتف (المعني /الولي) : </span>
                  <?php echo "<span class='info'>" . $_GET['tel'] . "</span>"; ?>
                </div>
                <div>
                </div>
                <div>
                  <span>البريد الإلكتروني : </span>
                  <?php echo "<span class='info'>" . $_GET['mail'] . "</span>"; ?>
                </div>
                <div>
                <span>كلمة السر : </span>
                <?php echo "<span class='info'>" . $_GET['pwd'] . "</span>"; ?>
                <a class="chang" href="change-mot-de-passe.php"> تغير كلمة السر </a>
                </div>
            </form>
            <div class="models">
              <div class="model"> الامواد </div>
              <div class="submodel"> حفظ القرأن الكريم </div>
              <div class="submodel"> احكام التجويد </div>
              <div class="submodel y"> السيرة النبوية </div>
              <div class="submodel y"> الفقه </div>
            </div>
            
            <div class="hezb">
              <div class=" rejcter">الأمحفوظات  </div>
              <div class="sub"> حزب  </div>
              <span> 35 </span>
            </div>
          </main>
    </header>
</body>
</html>