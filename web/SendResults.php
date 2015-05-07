<?php
class SendResults
{
	public function __construct()
	{ 
		require_once 'Rand1.php';
		require_once 'Rand2.php';
		require_once 'Rand3.php';
		require_once 'Rand4.php';
		require_once 'Rand5.php';
		require_once 'StoreGame.php'; 
		$one = $_SESSION['ranNum1'];
		$two = $_SESSION['ranNum2'];	
		$three = $_SESSION['ranNum3'];
		$four = $_SESSION['ranNum4'];
		$five = $_SESSION['ranNum5'];
		$gameRound = new StoreGame($one, $two, $three, $four, $five);
	}
	function __destruct()
	{
		session_destroy();
	}	
}	
?>
