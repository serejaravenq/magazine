<?php 
/*echo md5("password"); echo("<br>");
echo sha1("password");*/
//echo crypt("password");
$hash = password_hash("password",PASSWORD_BCRYPT);
//echo $hash;
$pass = "pass123word";
if(password_verify($pass, $hash))
	echo "ok";
else
	echo "Ошибочка";