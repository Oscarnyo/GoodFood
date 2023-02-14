<?php
//database connection
define('DB_SERVER','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','asg2'); ///datebase name not table 

$link=mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);

//check connection
if($link===false){
	die("ERROR: COULD NOT CONNECT. ".mysqli_connect_error());
}



?>