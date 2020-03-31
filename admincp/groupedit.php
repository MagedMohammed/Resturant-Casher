<?php session_start(); 
include_once("include.inc");
include_once("template/header.php");


// Code for delete items 
    if(isset($_GET["id"])){
    $id=$_GET["id"];
    $query = $GLOBALS['conction']->prepare("DELETE FROM `itemsgroup` WHERE id=?");
        $query -> bindValue(1,$id);
        $query -> execute();
        header("location:groupedit.php");
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

</tr>
        <?php
                    $i=1;
                    $query = $conction->prepare("SELECT * FROM itemsgroup");
                    $query -> execute();
                    $groupsedit = $query-> fetchAll();
                    foreach ($groupsedit as $groupedit): ?>

                <tr>
                    <td><?php echo $i++ ?></td>
                    <td><?php echo $groupedit["groupName"];?></td>
                        <form action="groupedit.php" method="get">
                    <td><input type="checkbox" name="id" value=<?php echo $groupedit["id"];?>/></td>
                    <td><input class="btn btn-info" type="submit" value="حذف المجموعه"/></td> </form>
                </tr>
        <?php endforeach;?>


</table>
</div><div class="col-md-2"></div>

</div>
<?php include_once("template/footer.php");
?>
