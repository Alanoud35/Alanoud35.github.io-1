<?php 
  session_start();
  include("connection.php");
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="/img/Screenshot.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="../style/donthelp.css">
  <title>بحث الدكاتره </title>
</head>
<body>
  <section>
    <div class="img">
      <img src="../img/undraw_search_engines_ij7q.svg" alt="" width="300px">
    </div>
    <div class="option">
      <select name="choose-teacher" id="">
        <option value="">اختر القسم</option>
        <option value="علوم الحاسب">علوم الحاسب</option>
        <option value="تقنية المعلومات">تقنية المعلومات</option>
        <option value="نظم المعلومات">نظم المعلومات</option>
      </select>
    </div>
    <div class="input-text">
      
      <input class="search" type="text" name="search" id="" placeholder="أدخل أسم الدكتور">
      <?php

if($_SERVER['REQUEST_METHOD'] == "POST")
{
  
             // Someone logged in
             $searched_name = $_POST['search'];
             // Read from database
             $query_staff_name = "SELECT * FROM teachers WHERE Staff_Name LIKE '%{$searched_name}%'";
             $result_staff_name = mysqli_query($con, $query_staff_name);
             if($searched_name == '')
                {

                  echo "<script> alert('!!!!الحقل فارغ'); window.location.href='index.php'; </script>";
                //  header("Location: index.php");
                  die; 

                } 
                    ?>
                
                 <?php
            if( mysqli_num_rows($result_staff_name) > 0) // check if applicable
            { 
              while($row = mysqli_fetch_assoc($result_staff_name)){
              ?>
          


            <p  class="img-fluid" style="text-align: right; font-size: 40px";>
            <br><?php echo"اسم العضو :"; echo $row['Staff_Name']; ?> 
            <br><?php echo $row['Office_Number'];  echo"  :رقم المكتب";?>
            <br>
            <br>
            <br>
            
            <?php  } 
          }  ?></p>

      
    </div>
    <div class="btn">
      <a href="">! أبحث </a>
    </div>
  </section>
</body>
</html>