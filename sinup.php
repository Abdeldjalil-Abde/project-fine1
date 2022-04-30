<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>تسجيل حساب جديد</title>
  <link rel="stylesheet" href="css/style-signup.css" />
</head>

<body>
  <header>
    <div class="container">
      <div class="logo">
        <img src="imaj/logo.png" alt="" />
        <div class="list">
          <a href="sigin.php">تسجيل الدخول</a>
          <a href="index.php">الصفحة الرئيسية</a>
        </div>
      </div>
    </div>
    <main dir="rtl">

      <form method="POST" action="function/sign-up.php">
        <div class="center">
          <p class="p1"> يرجى ملئ معلومات استمارة لنخراط في المدرسة</p>
          <?php
          if (isset($_GET['error'])) {
            if ($_GET['error'] == "first") {
              echo '<p class="error">اسم غير صالح اعد كتابته </p>';
            } else if ($_GET['error'] == "last") {
              echo '<p class="error">القب  غير صالح اعد كتابته</p>';
            } else if ($_GET['error'] == "mail") {
              echo '<p class="error"البريد الإلكتروني غير صالح اعد كتابته</p>';
            } else if ($_GET['error'] == "pwd") {
              echo '<p class="error">اعد كتابة كلمة المرور </p>';
            } else if ($_GET['error'] == "mail_exist") {
              echo '<p class="error">هذا البريد الإلكتروني مستعمل </p>';
            } else if ($_GET['error'] == "sql1") {
              echo '<p class="error">SQL ERROR 1</p>';
            } else if ($_GET['error'] == "sql2") {
              echo '<p class="error">SQL ERROR 2</p>';
            }else if ($_GET['error'] == "none") {
              echo '<p class="error">يرجى اختيار استاذ في حقل الإختيار </p>';
            }else if ($_GET['error'] == "gender") {
              echo '<p class="error">يرجى اختيار الجنس </p>';
            }
        }
          ?>
          <div>
            <?php
            if (isset($_GET['first_name'])) {
              $first_name = $_GET['first_name'];
            } else {
              $first_name = "";
            }
            echo '<input type="text" name="first_name" required autocomplete="off" value="' . $first_name . '"/>';
            ?>

            <label class="lable" for="">
              <span class="txt">الإسم</span>
            </label>
          </div>

          <div>
            <?php
            if (isset($_GET['last_name'])) {
              $last_name = $_GET['last_name'];
            } else {
              $last_name = "";
            }
            echo '<input type="text" name="last_name" required autocomplete="off" value="' . $last_name . '"/>';
            ?>

            <label class="lable" for="">
              <span class="txt">القب</span>
            </label>
          </div>
        </div>
        <div class="gender">
          <p class="p2"> الجنس :</p>
          <input type="radio" id="male" name="gender" value="ذكر">
          <label for="male">ذكر</label>
          <input type="radio" id="female" name="gender" value="انثى">
          <label for="female">انثى</label>
        </div>
        <div class="center">
          <div>
            <?php
            if (isset($_GET['adrass'])) {
              $adrass = $_GET['adrass'];
            } else {
              $adrass = "";
            }
            echo '<input type="text" name="adrass" required autocomplete="off" value="' . $adrass . '" />';
            ?>

            <label class="lable" for="">
              <span class="txt">العنوان</span>
            </label>
          </div>
          <div>
            <?php
            if (isset($_GET['dat'])) {
              $dat = $_GET['dat'];
            } else {
              $dat = "";
            }
            echo '<input  type="date" name="date" required autocomplete="off" value="' . $dat . '" />';
            ?>

            <label class="lable" for="">
              <span class="txt">تاريخ الميلاد</span>
            </label>
          </div>
          <div>
            <?php
            if (isset($_GET['tel'])) {
              $tel = $_GET['tel'];
            } else {
              $tel = "";
            }
            echo '<input  type="text" name="tel" required autocomplete="off" value="' . $tel . '" />';
            ?>
            <label class="lable" for="">
              <span class="txt">رقم الهاتف</span>
            </label>
          </div>
          <div>
            <?php
            if (isset($_GET['mail'])) {
              $mail = $_GET['mail'];
            } else {
              $mail = "";
            }
            echo '<input type="mail" name="mail" required autocomplete="off" value="' . $mail . '"/>';
            ?>
            
            <label class="lable" for="">
              <span class="txt">البريد الإلكتروني</span>
            </label>
          </div>

          <div>
            <input type="password" name="pwd" required autocomplete="off" />
            <label class="lable">
              <span class="txt">كلمة السر</span>
            </label>
          </div>
          <div>
            <input type="password" name="pwd-repeat" required autocomplete="off" />
            <label class="lable">
              <span class="txt">إعادة كتابة كلمة السر</span>
            </label>
          </div>
        </div>
        <p class="p2"> يرجى تحديد المواد التي ترغب في دراستها</p><br>

        <div>
          <select class="model" name="class" placeholder="enter text" id="">
            <option value="none"></option>
            <option value="1"> الشيخ محمد الأزهر</option>
            <option value="2">الشيخ حسن رحموني  </option>
            <option value="3"> الأستاذ مراد الفقي</option>
            <option value="4"> المعلمة مريم قدوري </option>
          </select>
        </div>
        <button class="submit" type="submit" name="submit">تسجيل </button>

      </form>
    </main>
  </header>
  <footer>
  </footer>
</body>

</html>