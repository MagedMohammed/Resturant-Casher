<?php session_start(); 
include_once("include.inc");
include_once("template/header.php");
?>

<div><center>
<?php
    // Post Var
    @$group_id       = $_POST["group_id"];
    @$itemName	     = $_POST["itemName"];
    @$itemImg 	     = $_POST["itemImg"];
    @$itemSize1	     = $_POST["itemSize1"];
    @$itemPrice1     = $_POST["itemPrice1"];
    @$itemSize2 	 = $_POST["itemSize2"];
    @$itemPrice2     = $_POST["itemPrice2"];
    @$itemSize3 	 = $_POST["itemSize3"];
    @$itemPrice3     = $_POST["itemPrice3"];

    	$query = $conction->prepare("INSERT INTO `items`(`group_id`, `item_name`, `item_img`, `item_size_1`, `item_price_1`, `item_size_2`, `item_price_2`, `item_size_3`, `item_price_3`) VALUES (?,?,?,?,?,?,?,?,?)");
        $query -> bindValue(1,$group_id);
    	$query -> bindValue(2,$itemName);
    	$query -> bindValue(3,$itemImg);
    	$query -> bindValue(4,$itemSize1);
    	$query -> bindValue(5,$itemPrice1);
    	$query -> bindValue(6,$itemSize2);
    	$query -> bindValue(7,$itemPrice2);
    	$query -> bindValue(8,$itemSize3);
    	$query -> bindValue(9,$itemPrice3);
    	$query -> execute();
    	$rowCount = $query ->rowCount();
    	if( $rowCount == 1){
    		echo "تم اضافة العنصر بنجاح ";
            header("refresh: 2; url=add.php");
		}else{
    		$message = "هناك خطا راجع موضوع العنصر مرة اخرى ";
    	};
 ?></center></div>
 <?php include_once("template/footer.php");
?>
