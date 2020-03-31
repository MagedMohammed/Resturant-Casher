<?php session_start();
require_once("include.inc");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		if ($_POST["userName"]=="" || $_POST["userPassword"]=="")
		{
			echo "خانه الاسم او كلمه المرور فارغة ";
			die();
			 }
		
		$userName=$_POST["userName"];
		$userPassword=$_POST["userPassword"];


		$query = $conction -> prepare("SELECT * FROM user WHERE name= ? AND password= ?");
		$query -> bindValue(1,$userName);
		$query -> bindValue(2,$userPassword);
		$query -> execute();
		$rowCount = $query -> rowCount();

		if ($rowCount == 1){
			$_SESSION["userName"] = $userName;
			$_SESSION["userPassword"] = $userPassword;
			echo"<p class='bg-success' align='center'>تم تسجيل دخول بنجاح <br/>اهلا ومرحبا بك </P>";
			header("refresh: 1;url=index.php");
		}else{

			echo '<p class="bg-danger" align="center">اسم المستخدم او كلمه المرور غير صحيحة</P>';
			header("refresh: 1;url=index.php");

		}

	 

}else{
	header("location: index.php");
};

?>
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>