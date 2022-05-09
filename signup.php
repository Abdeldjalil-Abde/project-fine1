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
          <a href="signin.php">تسجيل الدخول</a>
          <a href="index.php">الصفحة الرئيسية</a>
        </div>
      </div>
    </div>
    <main dir="rtl">

      <form method="POST" action="function/sign-up.php">
      <p class="p1"> يرجى ملئ معلومات استمارة للإنخراط في المدرسة</p>
      <?php
          if (isset($_GET['error'])) {
            if ($_GET['error'] == "first") {
              echo '<p class="error">يجب ان يحتوي الإسم على الحروف العربية فقط يرجى ادخال اسم من جديد </p>';
            } else if ($_GET['error'] == "last") {
              echo '<p class="error">يجب ان يحتوي القب على الحروف العربية فقط يرجى ادخال اسم من جديد</p>';
            } else if ($_GET['error'] == "mail") {
              echo '<p class="error">البريد الإلكتروني غير صالح يرجى إعادة  كتابته</p>';
            } else if ($_GET['error'] == "pwd") {
              echo '<p class="error">  يرجى إعادة كتابة كلمة المرور في خانة التأكيد   </p>';
            } else if ($_GET['error'] == "mail_exist") {
              echo '<p class="error">هذا البريد الإلكتروني مستعمل يرجى التسجيل ببريد اخران أمكن </p>';
            } else if ($_GET['error'] == "sql1") {
              echo '<p class="error">SQL ERROR 1</p>';
            } else if ($_GET['error'] == "sql2") {
              echo '<p class="error">SQL ERROR 2</p>';
            } else if ($_GET['error'] == "none") {
              echo '<p class="error">يرجى اختيار استاذ في حقل الإختيار </p>';
            } else if ($_GET['error'] == "gender") {
              echo '<p class="error">يرجى اختيار الجنس </p>';
            }
          }
          ?>
      <div class="content">
        <div class="center">
          
          <div class="info">
            <?php
            if (isset($_GET['first_name'])) {
              $first_name = $_GET['first_name'];
            } else {
              $first_name = "";
            }
            echo '<input type="text" name="first_name" required autocomplete="off" value="' . $first_name . '"/>';
            ?>
            <label>
              <span>الإسم</span>
            </label>
          </div>

          <div class="info">
            <?php
            if (isset($_GET['last_name'])) {
              $last_name = $_GET['last_name'];
            } else {
              $last_name = "";
            }
            echo '<input type="text" name="last_name" required autocomplete="off" value="' . $last_name . '"/>';
            ?>
            <label>
              <span>القب</span>
            </label>
          </div>

          <div class="gender">
            <p class="p2"> الجنس :</p>
            <?php
            if (isset($_GET['gender'])) {
              if($_GET['gender'] == "ذكر"){
              echo "
                <input type='radio' id='male' name='gender' required value='ذكر' checked>
                <label for='male'>ذكر</label>
                <input type='radio' id='female' name='gender' required value='انثى'>
                <label for='female'>انثى</label>
              ";
              } else {
                echo "
                <input type='radio' id='male' name='gender' required value='ذكر' >
                <label for='male'>ذكر</label>
                <input type='radio' id='female' name='gender' required value='انثى' checked>
                <label for='female'>انثى</label>
              ";
              }
            } else {
              echo "
                <input type='radio' id='male' name='gender' required value='ذكر'>
                <label for='male'>ذكر</label>
                <input type='radio' id='female' name='gender' required value='انثى'>
                <label for='female'>انثى</label>
              ";
            }
            ?>
          </div>
            <div class="info">
               <?php
               if (isset($_GET['location'])) {
                 $location = $_GET['location'];
               } else {
                 $location = "";
               }
               echo '<input type="text" name="location" required autocomplete="off" value="' . $location . '" />';
               ?> 
               <label>
                 <span>العنوان</span>
               </label>
            </div>
            <div class="info">
               <?php
               if (isset($_GET['date'])) {
                 $date = $_GET['date'];
               } else {
                 $date = "";
               }
               echo '<input  type="date" name="date" required autocomplete="off" value="' . $date . '" />';
               ?>
               <label>
                 <span>تاريخ الميلاد</span>
               </label>
            </div>
           </div>
           
        <div class="center">
          
          <div class="info">
            <?php
            if (isset($_GET['tel'])) {
              $tel = $_GET['tel'];
            } else {
              $tel = "";
            }
            echo '<input  type="text" name="tel" required autocomplete="off" value="' . $tel . '" />';
            ?>
            <label>
              <span>رقم الهاتف</span>
            </label>
          </div>
          <div class="info">
            <?php
            if (isset($_GET['mail'])) {
              $mail = $_GET['mail'];
            } else {
              $mail = "";
            }
            echo '<input type="mail" name="mail" required autocomplete="off" value="' . $mail . '"/>';
            ?>

            <label>
              <span>البريد الإلكتروني</span>
            </label>
          </div>
          <div class="info">
            <input type="password" name="pwd" required autocomplete="off" />
            <label>
              <span>كلمة السر</span>
            </label>
          </div>
          <div class="info">
            <input type="password" name="pwd_repeat" required autocomplete="off" />
            <label>
              <span>تأكيد كلمة السر (أعد كتابة كلمة السر ) </span>
            </label>
          </div>
        </div>
      </div>
        <p class="p2"> يرجى تحديد الأستاذ الذي ترغب في الدراسة عنده</p> <br>

        <div>
          <select class="model" name="class" required>
            <option value="none"  >  </option>
            <option value="1"> الشيخ محمد الأزهر</option>
            <option value="2">الشيخ حسن رحموني </option>
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