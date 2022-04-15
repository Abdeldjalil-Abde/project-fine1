<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>قائمة الطلبة </title>
    <link rel="stylesheet" href="../css/style-liste-student.css">
</head>
<body >
    <header>
        <div class="container">
            <div class="logo">
              <img src="../imaj/logo.png" alt="" />
            </div>
              <div class="list">
                <a href="../index.php">الصفحة الرئيسية</a>
                <samp>حسنى </samp>
                <img src="../imaj/images.png" alt="">
              </div>
        </div>
        <span class="listStudent"> قائمة الطلاب </span>
       <center> <table dir="rtl">
            
            <tr>
                <th>N</th>
                <th>الإسم </th>
                <th>القب </th>
                <th>تاريخ الميلاد </th>
                <th>البريد الإلكتروني </th>
            </tr>
            <?php
            require "../function/databaes-connect.php";

            $sql = "";
            if ($_GET['id'] == "1") {
                $sql = "SELECT * FROM teacher1;";
            } else if ($_GET['id'] == "2") {
                $sql = "SELECT * FROM teacher2;";
            } else if ($_GET['id'] == "3") {
                $sql = "SELECT * FROM teacher3;";
            } else if ($_GET['id'] == "4") {
                $sql = "SELECT * FROM teacher4;";
            }

            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                $n = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                    echo " 
                    <tr>
                        <td>" . $n . "</td>
                        <td>" . $row['first_name'] . "</td>
                        <td>" . $row['last_name'] . "</td>
                        <td>" . $row['dat'] . "</td>
                        <td>" . $row['mail'] . "</td>
                    </tr> " ;
                     $n = $n + 1;
                }
            }
            ?> 
           
        </table></center>
    </header>
</body>
</html>