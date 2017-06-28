<?php 

$db['db_host'] = "localhost";
$db['db_user'] = "root";
$db['db_pass'] = "8apo1103";
$db['db_name'] = "cms";

foreach($db as $key => $value){
	define(strtoupper($key),$value);
}




$connect = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

/*if($connect){
	echo "DB connected";
}else{
	die("Not connected");
}
*/	


 ?>