<?php 
  session_start();
  include("connection.php");

  if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $username=$_POST['uname'];
    $pass=$_POST['password'];

    if(!empty($username) && !empty($pass)){
      $query = "SELECT * FROM log WHERE uname = '$username' limit 1";
      $result = mysqli_query($con,$query);

      if($result){
        if($result && mysqli_num_row($result)>0){
          $data = mysqli_fetsh_assoc($result);
          if($data['password']==$pass){
            header('Location: editPage.php');
            die;
          }
        }
      }
    }
  }
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl"> 
  <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="/img/Screenshot.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="../style/sign.css">
  <title>تسجيل الدخول</title>
</head>
<body>
<form action="editPage.php" method="post">
  <section class="desktop">
    <div class="img-barcode">
      <img src="img/Screenshot.png" alt="" width="200px">
    </div>
    <div class="title-desktop">
      ادخل من الجوال ياجميل
    </div>
  </section>
  <section class="login">
  <div class="page">
    <div class="img">
      <img src="../img/login.svg" alt="">
    </div>
    <div class="input">
      <div class="title">
        <i class="fa-solid fa-user"></i>
        تسجيل دخول
      </div>
      <div class="input-email">
        <input type="text" name="uname" id="name" placeholder="أسم مستخدم , رقم جوال , بريد الاكتروني">
      </div>
      <div class="input-pass">
        <input type="password" name="password" id="pass" placeholder="كلمة المرور">
      </div>
      <div class="forget">
        <a href="reset.html">نسيت كلمة المرور</a>
      </div>
      <div class="btn">
        <a href="editPage.php">تسجيل الدخول</a>
      </div>
    </div>
  </section>
    </div> </form>
  </body>
  </html>