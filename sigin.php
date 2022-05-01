<!DOCTYPE html >
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>تسجيل الدخول</title>
    <link rel="stylesheet" href="css/style-sigin.css" />
  </head>
  <body >
    <header>
      <div class="container">
        <div class="logo">
          <img src="imaj/logo.png" alt="" />
          <div class="list">
          <a href="index.php">الصفحة الرئيسية</a>
            <a href="sinup.php">تسجيل حساب جديد</a>
          
          </div>
        </div>
      </div>
      <main dir="rtl">
      
          <form method="POST" action="function/sign-in.php">
            <samp>يرجى ملئ المعلومات لتسجيل الدخول</samp>
            <?php
            if (isset($_GET['error'])) {
                    if ($_GET['error'] == "mail") {
                        echo '<p class="messageError">البريد الإلكتروني غير صالح اعد كتابته</p>';
                    } else if ($_GET['error'] == "not") {
                        echo '<p class="messageError"> البريد الإلكتروني غير مسجل </p>';
                    } else if($_GET['error'] == 'active'){
                      echo '<p class="messageError active"> البريد الإلكتروني غير مفعل يرجى التقرب من الإدارة لتفعيل حسابك  </p>';
                    }else if ($_GET['error'] == "sql1") {
                        echo '<p class="messageError">SQL ERROR 1</p>';
                    } else if ($_GET['error'] == "sql2") {
                        echo '<p class="messageError">SQL ERROR 2</p>';
                    }
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

              <label>
                <span >البريد الألكتروني</span>
              </label>
            </div>
            <div>
              <input type="password" name="pwd" required autocomplete="off" />
              <label>
                <span >كلمة السر</span>
              </label>
            </div>
             <button class="submit" type="submit" name="submit">
              تسجيل الدخول 
              </button>
          </form>
      </main>
    </header>
  </body>
</html>
