<?php
	session_start();
	
	$_SESSION['ranNum1'] = rand(0, 4);
	$one = $_SESSION['ranNum1'];
	echo $one;
?>	
