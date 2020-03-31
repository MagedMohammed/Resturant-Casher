<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
      <title>Admin Control Panal :: لوحة تحكم المدير</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link  type="text/css" rel="stylesheet" href="template/style.css" >
  </head>
  <body dir="rtl">
<div class="container">
      <header>
          <div><center><img src="images/banner.png" /></div></center>
          <div class="row">
           <div class="col-md-4"></div><div class="col-md-4">
    <?php 
if (!isset($_SESSION["userName"]) && !isset($_SESSION["userPassword"])){
   echo '
<form action="login.php" method="post" class="form form-group">
     <lable for="userName">اسم المستخدم</lable>
     <input  id="userName" class="form-control" type="text" name="userName" placeholder="User Name" />
     <label for="userPassword">كلمة المرور</label>
     <input id="userPassword" class="form-control" type="password" name="userPassword" placeholder="User Password" />
     <br>
     <input  class="btn btn-primary" type="submit" name="submit" value="تسجيل دخول">
   </form>
   ';
die();
}
   ?></div><div class="col-md-4">
     
</div>
</div>
</div>
                <div class="navb">
                <div class="container">
                <ul>
                    <li class="icon-bar"><a href="index.php">الرئيسية</a></li>
                    <li><a href="add.php">اضافة عناصر</a></li>
                    <li><a href="edit.php"> عرض العناصر</a></li>
                    <li><a href="group.php">اضافة مجموعة</a></li>                
                    <li><a href="groupedit.php">عرض المجموعات</a></li>  
                    <?php if (isset($_SESSION["userName"])) :?>              
                    <li><a href="logout.php">تسجيل خروج</a></li>  
                    <?php endif;?>              
                </ul>
                </div>
                </div>
      </header>