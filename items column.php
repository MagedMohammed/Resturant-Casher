<?php session_start(); 
include_once("admincp/include.inc");
include_once("template/header.php");
?>

    <div class="container">
        <div class="row">
            <div class="left col-md-8">

<ul class="nav nav-tabs">
    <?php 
    $query = $conction -> prepare("SELECT * FROM itemsgroup");
    $query -> execute();
    $groups = $query -> fetchAll();
    foreach($groups as $group):?>
    <li><a data-toggle="tab" href="<?php echo'#'.$group['id']; ?>"><?php echo $group['groupName']; ?></a></li>
    <?php  endforeach; ?>
    <div class="tab-content">
    <div class="clear-fix"></div>
        <form action="index.php" method="get" class="form-group" >
            <div class="iteams row">
        <?php foreach($groups as $group):?>
        <div class="tab-pane fade" id="<?php echo $group['id']; ?>">

       <?php
            $query2 = $conction -> prepare("SELECT * FROM items WHERE group_id=?");
    $query2-> bindValue(1,$group["id"]);
    $query2 -> execute();
    $items = $query2 -> fetchAll();
    foreach($items as $item):
    ?>
                    <!-- iteam start-->
                        <div class="col-sm-4 col-md-2"  >
                            <h3 class="h3"><?php echo $item["item_name"];?></h3>
                            <img class="img iteamsimg" src="<?php echo $item['item_img'];?>"/>
                            <div class="radio">
                            <label>
                            <input type="radio" id="iteam" name="iteam" 
                            itemName="<?php echo $item['item_name']." ".$item['item_size_1'];?>" 
                            value="<?php echo $item["item_price_1"];?>"/><?php echo $item["item_size_1"];?>
                            </label></div>
<?php if ($item['item_size_2'] !=="" && $item['item_price_2'] !=="0"):;?>
                            <div class="radio">
                            <label>
                            <input type="radio" id="iteam" name="iteam" 
                            itemName="<?php echo $item['item_name']." ".$item['item_size_2'];?>" 
                            value="<?php echo $item["item_price_2"];?>"/><?php echo $item["item_size_2"];?>
                            </label></div>
<?php endif;?>
<?php if ($item['item_size_3'] !=="" && $item['item_price_3'] !=="0"):;?>

                             <div class="radio">
                            <label>
                            <input type="radio" id="iteam" name="iteam" 
                            itemName="<?php echo $item['item_name']." ".$item['item_size_3'];?>" 
                            value="<?php echo $item["item_price_3"];?>"/><?php echo $item["item_size_3"];?>
                            </label></div>
<?php endif;?>
                        </div>
                        <div class="clear-fix"></div>
             <!-- iteam end-->
                      <?php  endforeach; ?>


        </div>
    <?php  endforeach; ?>
                </div>
                    </form>
    </div>
    </ul>
    <!-- End tabs-->
        </div>
            <!-- Culceluter Start-->
        <div class="right col-md-4"><center>
            <form nama="culc" id="culc" class="form form-group">
            <input class="form-control" id="result" name="result" type="text"/><br/>
            <input class="btn btn-primary" type="button" onclick="this.form.result.value +='1'" value="1"/> 
            <input class="btn btn-primary" type="button" onclick="this.form.result.value +='2'" id="num2"  value="2"/> 
            <input class="btn btn-primary" type="button" onclick="this.form.result.value +='3'" id="num3"  value="3"/>
            <input class="btn btn-primary" type="button" onclick="this.form.result.value +='4'" id="num4"  value="4"/> 
            <input class="btn btn-primary" type="button" onclick="this.form.result.value +='5'" id="num5"  value="5"/> <br/> 
            <input class="btn btn-primary" type="button" onclick="this.form.result.value +='6'" id="num6"  value="6"/>
            <input class="btn btn-primary" type="button" onclick="this.form.result.value +='7'" id="num7"  value="7"/> 
            <input class="btn btn-primary" type="button" onclick="this.form.result.value +='8'" id="num8"  value="8"/> 
            <input class="btn btn-primary" type="button" onclick="this.form.result.value +='9'" id="num9"  value="9"/>
            <input class="btn btn-primary" type="button" onclick="this.form.result.value +='0'" id="num0"  value="0"/><br/> 
            <input class="btn btn-primary" type="button" onclick="this.form.result.value = ''"  id="reset" value="Reset"> 
                <input type="button" class="btn btn-success add" onclick="tottal(); this.form.result.value ='';" value="اضف"/>
            </form>
            <button class="btn btn-success add" onclick="sumColumn()" >اجمع</button>
            </center>
            <hr>
            <div class="prices">
                <h3 class="h3"> Resturent Cachier</h3>
                <table name="magid" id="res" class="table table-condensed">
                    <tr>
                        <th>الصنف</th>
                        <th>العدد</th>
                        <th>السعر</th>
                        <th> </th>
                    </tr>
                </table>
                <table dir="rtl" id="tottal" class="table table-condensed">
                    <tr>
                        <td> </td>
                        <td> </td>
                        <td id="sumcol-res"> </td>
                        <td>المجموع</td>
                    </tr>
                </table>

            </div>
            </center>

            
            </div>
        </div>        
           <!-- Culceluter End-->

        <script
			  src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
			  integrity="sha256-k2WSCIexGzOj3Euiig+TlR8gA0EmPjuc79OEeY5L45g="
			  crossorigin="anonymous"></script>
        <script src="js/js.js"></script>
    </body>
</html>