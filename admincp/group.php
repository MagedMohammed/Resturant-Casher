<?php session_start(); 
include_once("include.inc");
include_once("template/header.php");
?>
<div class="container">
<?php 
if (!isset($_POST["groupName"])):
 ?>
<h1 class="h1 text-center"> انشاء مجموعة جديدة </h1>
<form action="group.php" method="post">
	<div class="form-group">
		<label>اسم المجموعة
		<input class="form-contrl" type="text" name="groupName" placeholder="ادخل اسم المجموعة" />
		</label>
	</div>
	<input class="btn btn-info" type="submit" value="انشاء المجموعة">
</form>
<?php
endif;
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    	$groupName = $_POST["groupName"];
    	$query = $conction->prepare("INSERT INTO `itemsgroup`(`groupName`) VALUES (?);");
    	$query -> bindValue(1,$groupName);
    	$query -> execute();
    	$rowCount = $query -> rowCount();
    	if( $rowCount == 1){
    		echo "تم اضافة المجموعة بنجاح";
            header("refresh: 2; url=group.php");
    }else{
    	 echo "خطا يرجى ادخال اسم صحيح للمجموعة ";
    	 die();
    }}

?>
</div>

<?php include_once("template/footer.php");
?>
