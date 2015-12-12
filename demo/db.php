<?
$link = mysqli_connect('127.0.0.1', 'root','','web');
$res = mysqli_query($link, 'SELECT * FROM teacher' or die(mysqli_error($link)));
mysqli_close($link);
?>