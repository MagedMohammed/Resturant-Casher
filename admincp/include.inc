<?php  
// conction class PDO ::
define("DSN","mysql:host=localhost;dbname=restaurant;");
define("DBUSERNAME","root");
define("DBPASSWORD","");
$options = array(
	PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES utf8',
	);
try{
	$conction = NEW PDO (DSN,DBUSERNAME,DBPASSWORD,$options);
	$conction -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	// close conction,

}catch(PDOexception $e){
	echo $e->getmessage();
};


