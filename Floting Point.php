<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h2>How to check if a number is an Integernor a float</h2>
<?php 
	$myfloat = 7.34;
	$myinteger = 20;
?>
<?php echo "Is {$myfloat} an Integer?". is_int($myfloat);?><br>
<?php echo "Is {$myinteger} an Integer?". is_int($myinteger);?><br>
<br>
<?php echo "Is {$myfloat} an float?". is_float($myfloat);?><br>
<?php echo "Is {$myinteger} an Integer?". is_float($myinteger);?><br>
<br>
<?php echo "Is {$myfloat} an Number?". is_numeric($myfloat);?><br>
<?php echo "Is {$myinteger} an Number?". is_numeric($myinteger);?><br>
</body>
</html>