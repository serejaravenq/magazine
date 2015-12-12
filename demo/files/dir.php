<pre>
<?
print_r(scandir('.'));
exit;
$dir = opendir('.');
while($name = readdir($dir)){
	if($name=='.' or $name=='')
		continue;
	if(is_dir($name))
		echo '<>'.$name. '<br>';

		else
			echo $name. '<br>';

}
closedir($dir);
?>