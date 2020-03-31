<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
      <title>Resturant Casher</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link  type="text/css" rel="stylesheet" href="css/style.css" >

  </head>
  <body>
      <header>
          <div><center><img src="images/banner.png" /></div>
          </center>
                <div class="navb">
                <ul><div class="container">
                    <li class="icon-bar"><a href="index.php">الرئيسية</a></li>      
                    <li><a href="admincp/index.php">لوحة التحكم</a></li>  
                    <?php if (isset($_SESSION["userName"])) :?>              
                    <li><a href="admincp/logout.php">تسجيل خروج</a></li>  
                    <?php endif;?> </div>             
                </ul></div>
      </header>