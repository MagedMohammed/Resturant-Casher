<?php session_start(); 
include_once("include.inc");
include_once("template/header.php");


// Code for delete items 
	if(isset($_GET["id"])){
	$id=$_GET["id"];
	$query = $GLOBALS['conction']->prepare("DELETE FROM `items` WHERE id=?");
    	$query -> bindValue(1,$id);
    	$query -> execute();
    	header("location:edit.php");
	}

?>	
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8">
<table class="table table-hover">
<tr>
	 <td>م</td>
	 <td>اسم العنصر</td>
	 <td>تحديد العنصر</td>
	 <td>حذف</td>
	 <td>تحديد العنصر</td>
	 <td>تعديل</td>
</tr>
		<?php
		$edit = $conction ->prepare("SELECT * FROM `items`");
		$edit->execute();
		$edits =$edit->fetchAll();
			$i=1;
		foreach($edits as $editItem):?>

				<tr>
					<td><?php echo $i++ ?></td>
					<td><?php  echo $editItem["item_name"];?></td>
					<!--<td><img src= <? echo "..//". $editItem["item_img"]; ?> alt= <? echo $editItem["item_name"];?> /></td>
					<td><?php echo $editItem["item_size_1"]?></td>
					<td><?php echo $editItem["item_price_1"]?></td>
					<td><?php echo $editItem["item_size_2"]?></td>
					<td><?php echo $editItem["item_price_2"]?></td>
					<td><?php echo $editItem["item_size_3"]?></td>
					<td><?php echo $editItem["item_price_3"]?></td>-->
						<form action="edit.php" method="get">
					<td><input type="checkbox" name="id" value=<?php echo $editItem["id"];?>/></td>
					<td><input class="btn btn-info" type="submit" value="حذف العنصر"/></td>	</form>
					<form action="editite.php" method="post">
					<td><input type="checkbox" name="id" value=<?php echo $editItem["id"];?>/></td>
					<td><input class="btn btn-info" type="submit" value="تعديل العنصر"/></td>	</form>
				</tr>
		<?php endforeach;?>


</table>
</div><div class="col-md-2"></div>

</div>
<?php include_once("template/footer.php");
?>
