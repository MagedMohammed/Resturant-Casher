<?php ?><?php session_start(); 
include_once("include.inc");
include_once("template/header.php");

?>
	<div class="row container">
        <div class="col-md-4" >
		<form class="form" action="addite.php"  method="post">

		<div class="form-group">
			<lable for="">اسم المنتج
				<input class="form-control" type="text" placeholder="اسم المنتج" name="itemName" required />
			</lable></div>

			<div class="form-group">
			<lable>صورة المنتج
				<input class="form-control" type="text" placeholder="رابط الصورة" name="itemImg" />
			</lable></div>
			<div class="form-group">
			<lable>مجموعه العناصر
				<select name="group_id" class="form-control" required>
				<option disabled selected>اختر المجموعه</option>
					<?php 
					$query = $conction->prepare("SELECT * FROM itemsgroup");
    				$query -> execute();
    				$option = $query-> fetchAll();
    				foreach ($option as $options): ?>
    				<option  value='<?php  echo $options["id"]; ?>'><?php echo $options["groupName"]; ?></option>
    				<?php
    				endforeach;
					 ?>
				</select>
			</lable></div>

			<div class="form-inlin">
			<lable>اسم الحجم الاول 
				<input class="form-control" type="text" placeholder="اسم الحجم الاول " name="itemSize1" required/></lable>
				<lable>سعر حجم المنتج الاول 
				<input class="form-control" type="text" placeholder="سعرحجم المنتج الاول " name="itemPrice1" required />
			</lable></div>
            
            <div class="form-inlin">
			<lable>اسم الحجم الثاني 
				<input class="form-control" type="text" placeholder="اسم الحجم الثاني" name="itemSize2" /></lable>
				<lable>سعر حجم المنتج التاني 
				<input class="form-control" type="text" placeholder="سعرحجم المنتج الثاني " name="itemPrice2" />
			</lable></div>
          
            <div class="form-inlin">
			<lable>اسم الحجم الثالث 
				<input class="form-control" type="text" placeholder="اسم الحجم الثالث" name="itemSize3" /></lable>
				<lable>سعر حجم المنتج الثالث 
				<input class="form-control" type="text" placeholder="سعرحجم المنتج الثالث " name="itemPrice3" />
			</lable></div>
            <div class="form-group">
                <input class="btn btn-success" type="submit" value="submit"/>
            </div>
                </form>
        </div>
	</div>

<?php include_once("template/footer.php");?>
