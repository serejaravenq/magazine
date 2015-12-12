
<?php
	//setcookie("username", 'Mohn');
	//echo $_COOKIE["username"];
$user = ['name'=>'john','login'=>'root','password'=>'1234'] ;
$str = serialize($user);
echo $base64_encode($str);
?>