<HTML>
<HEAD>
<TITLE>fopen</TITLE>
</HEAD>
<BODY>
<?php
	$f = fopen("data.txt" , "a+") or die("Не могу открыть файл!");
	 fputs($f, PHP_EOL."Line six");
	 //fread($f, 5);
	 //fread($f, 4);
	 /*$bytes = [];
	 while ( !feof($f) ){
	 	$bytes[]= fgetc($f);
	 }
	 while ( $x = fgetc($f)){
	 	$bytes[]= $x;
	 }
	 print_r ($bytes);*/
	/*$lines = [];
	while ($line = fgetss($f, 1024, "<p><br>") ){
		$lines[] = $line;
	}
	print_r($lines);*/
	//закрытие потока
	fclose($f);
	
?>
</BODY>
</HTML>