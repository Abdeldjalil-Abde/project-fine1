<?php
session_start();
if(isset($_SESSION['first_name'])){
   if($_SESSION['status'] == 2){
   header("Location: ../html/profile-admin.php");
   exit();
   }else if($_SESSION['status'] == 1 ){
   header("Location: ../html/profile-teacher.php");
   exit();
   } else{
   header("Location: ../html/profile-student.php");
   exit();
   }
}
