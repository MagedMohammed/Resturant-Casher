<?php session_start(); 
include_once("include.inc");
include_once("template/header.php");

    

if ($_SERVER['REQUEST_METHOD'] == 'GET'){
     
        @$group_id       = $_GET["group_id"];
        @$itemName       = $_GET["itemName"];
        @$itemImg        = $_GET["itemImg"];
        @$itemSize1      = $_GET["itemSize1"];
        @$itemPrice1     = $_GET["itemPrice1"];
        @$itemSize2      = $_GET["itemSize2"];
        @$itemPrice2     = $_GET["itemPrice2"];
        @$itemSize3      = $_GET["itemSize3"];
        @$itemPrice3     = $_GET["itemPrice3"];
        @$id             = $_GET["id"];

        $query = $conction->prepare("UPDATE `items` SET `group_id`=?,`item_name`=?,`item_img`=?,`item_size_1`=?,`item_price_1`=?,`item_size_2`=?,`item_price_2`=?,`item_size_3`=?,`item_price_3`=? WHERE id=?");

        $query -> bindValue(1,$group_id);
        $query -> bindValue(2,$itemName);
        $query -> bindValue(3,$itemImg);
        $query -> bindValue(4,$itemSize1);
        $query -> bindValue(5,$itemPrice1);
        $query -> bindValue(6,$itemSize2);
        $query -> bindValue(7,$itemPrice2);
        $query -> bindValue(8,$itemSize3);
        $query -> bindValue(9,$itemPrice3);
        $query -> bindValue(10,$id);
        $query -> execute();
        $rowCount = $query ->rowCount();
        if( $rowCount == 1){
            echo "تم التعديل بنجاح";
            header("refresh: 2; url=edit.php");
            die();
        }else{
            $message = "هناك خطا راجع موضوع العنصر مرة اخرى ";
        };
};

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $id     =    $_POST["id"]; };
        $query = $GLOBALS['conction']->prepare("SELECT * FROM `items` WHERE id=?");
        $query -> bindValue(1,$id);
        $query -> execute();
        $edits = $query->fetchAll();
        foreach($edits as $editItem);
?>
    <div class="row container">
        <div class="col-md-4" >
        <form class="form" action="editite.php"  method="get">
            <input type="hidden" name="id" value="<?php echo $id;?>"/>

            <div class="form-group">
            <lable for="">اسم المنتج
                <input class="form-control" type="text" name="itemName" value="<?php echo $editItem["item_name"]; ?>"/>
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

            <div class="form-group">
            <lable>صورة المنتج
                <input class="form-control" type="text" value=<?php echo $editItem["item_img"]; ?> name="itemImg" />
            </lable></div>

            <div class="form-inlin">
            <lable>اسم الحجم الاول 
                <input class="form-control" type="text" value=<?php echo $editItem["item_size_1"]; ?> name="itemSize1" required/></lable>
                <lable>سعر حجم المنتج الاول 
                <input class="form-control" type="text" value=<?php echo $editItem["item_price_1"]; ?> name="itemPrice1" required />
            </lable></div>
            
            <div class="form-inlin">
            <lable>اسم الحجم الثاني 
                <input class="form-control" type="text" name="itemSize2" value='<?php echo $editItem["item_size_2"]; ?>' /></lable>
                <lable>سعر حجم المنتج التاني 
                <input class="form-control" type="text" value=<?php echo $editItem["item_price_2"]; ?> name="itemPrice2" />
            </lable></div>
          
            <div class="form-inlin">
            <lable>اسم الحجم الثالث 
                <input class="form-control" type="text" value="<?php echo $editItem["item_size_3"]; ?>" name="itemSize3" /></lable>
                <lable>سعر حجم المنتج الثالث 
                <input class="form-control" type="text" value=<?php echo $editItem["item_price_3"]; ?> name="itemPrice3" />
            </lable></div>
            <div class="form-group">
                <input class="btn btn-success" type="submit" value="submit"/>
            </div>
                </form>
        </div>
    </div>

<?php include_once("template/footer.php");?>
