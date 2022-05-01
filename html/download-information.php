<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> معلومات الشخصية</title>
    <link rel="stylesheet" href="../css/style-download-information.css">
</head>

<body>
    <form dir="rtl">
         <samp> مدرسة الفرقان لتعليم القرآن </samp>
         <img class="img" src="../imaj/images.png" alt="">

        <div>
            <span> الإسم :</span>
            <?php echo "<span class='info'>" . $_GET['first_name'] . "</span>"; ?>

        </div>
        <div>
            <span> القب :</span>
            <?php echo "<span class='info'>" . $_GET['last_name'] . "</span>"; ?>

        </div>
        <div>
            <span>تاريخ الميلاد : </span>
            <?php echo "<span class='info'>" . $_GET['date'] . "</span>"; ?>
        </div>
        <div>
            <span> العنوان : </span>
            <?php echo "<span class='info'>" . $_GET['location'] . "</span>"; ?>
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
            <span> القسم المنخرط فيه :  </span>
            <?php echo "<span class='info'>" . $_GET['class'] . "</span>"; ?>
        </div>
    </form>
</body>

</html>