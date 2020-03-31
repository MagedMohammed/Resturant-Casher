<?php session_start();?>
<!DOCTYPE html>
<html lang="ar">
        <head>
            <title> Resturant Cacher</title>
            <link  type="text/css" rel="stylesheet" href="css/style.css" >
            <meta charset="utf-8"/>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
        </head>
    <body>
        <header class="header">
            <div class="container">
            <h1 class="h1"> Resturant Caher </h1>
                
                <ul class="nav">
                    <li><a href="#">لوحة التحكم</a></li>
                    <li><a href="#">الرئيسية</a></li>
                </ul>
            </div>
        </header>
    <div class="container">
        <div class="row">
            <div class="right col-md-8">
                        <div class="clear-fix"></div>
                    <form action="index.php" method="get" class="form-group" >
                        <div class="iteams row">
             <!-- iteam start-->
                        <div class="col-sm-4 col-md-2"  >
                            <h2 class="h2">Chicken Fajita</h2>
                            <img class="img iteamsimg" src="images/Chicken Fajita.jpg"/>
                            <div class="radio">
                            <label>
                            <input type="radio" name="iteam" value="10"/>Smalle 
                            </label></div>
                            <div class="radio">
                            <label>
                            <input type="radio" name="iteam" value="15"/>Medium 
                            </label></div>
                            <div class="radio">
                            <label>
                            <input type="radio" name="iteam" value="20"/>Larg
                            </label></div>
                        </div>
                        <div class="clear-fix"></div>
             <!-- iteam end-->
                             <!-- iteam start-->
                        <div class="col-sm-4 col-md-2"  >
                            <h2 class="h2">Chicken Fajita</h2>
                            <img class="img iteamsimg" src="images/Chicken Fajita.jpg"/>
                            <div class="radio">
                            <label>
                            <input type="radio" name="iteam" value="8"/>Smalle 
                            </label></div>
                            <div class="radio">
                            <label>
                            <input type="radio" name="iteam" value="16"/>Medium 
                            </label></div>
                            <div class="radio">
                            <label>
                            <input type="radio" name="iteam" value="32"/>Larg
                            </label></div>
                        </div>
                        <div class="clear-fix"></div>
             <!-- iteam end-->
                        
            </div>
                    </form>
                
            
            
        </div>
            <!-- Culceluter Start-->
        <div class="left col-md-4"><center>
            <form nama="culc" id="culc" class="form form-group">
            <input class="form-control" id="result" name="result" type="text"/><br/>
            <input class="btn btn-primary" type="button" onclick="this.form.result.value +='1'" value="1"/> 
            <input class="btn btn-primary" type="button" onclick="this.form.result.value +='2'" id="num2"  value="2"/> 
            <input class="btn btn-primary" type="button" onclick="this.form.result.value +='3'" id="num3"  value="3"/><br/> 
            <input class="btn btn-primary" type="button" onclick="this.form.result.value +='4'" id="num4"  value="4"/> 
            <input class="btn btn-primary" type="button" onclick="this.form.result.value +='5'" id="num5"  value="5"/> 
            <input class="btn btn-primary" type="button" onclick="this.form.result.value +='6'" id="num6"  value="6"/><br/> 
            <input class="btn btn-primary" type="button" onclick="this.form.result.value +='7'" id="num7"  value="7"/> 
            <input class="btn btn-primary" type="button" onclick="this.form.result.value +='8'" id="num8"  value="8"/> 
            <input class="btn btn-primary" type="button" onclick="this.form.result.value +='9'" id="num9"  value="9"/><br/> 
            <input class="btn btn-primary" type="button" onclick="this.form.result.value +='0'" id="num0"  value="0"/>
            <input class="btn btn-primary" type="button" onclick="this.form.result.value = ''"  id="reset" value="Reset"> 
            </form>
            <button class="btn btn-success add" onclick="tottal()">اضف</button>
        <br/>
        <p id="results" class="h1"></p>
            </center>
            </div>
            <hr/>
        </div>        
           <!-- Culceluter End-->
        <script src="js/js.js"></script>
    </body>
</html>