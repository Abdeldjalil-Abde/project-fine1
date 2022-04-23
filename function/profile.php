<?php
session_start();
if(isset($_SESSION['first_name'])){
   if($_SESSION['class']=="admin"){
   header("Location: ../html/profile-admin.php");
   exit();
   }else if($_SESSION['class']=="teacher"){
   header("Location: ../html/profile-teacher.php");
   exit();
   } else{
   header("Location: ../html/profile-student.php");
   exit();
   }
}
