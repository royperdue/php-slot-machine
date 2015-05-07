<?php
	
class StoreGame
{
	private $connection;
	
	public function __construct($o, $tw, $thr, $fo, $fi)
	{
		require_once 'DB_Connect.php';
	     $this->connection = new DB_Connect();
		$this->retrieveRound($o, $tw, $thr, $fo, $fi);
	}
	function retrieveRound($one, $two, $three, $four, $five)
	{	
		$wheel1 = "";
		$wheel2 = "";
		$wheel3 = "";
		$wheel4 = "";
		$wheel5 = "";
		$amountBet = 2;
		$amountWon = 000;
		$amountLost = 000;
		$amountRemaining = 000;
		
		if($one == 0)
		{
			$wheel1 = "SMILE";
		}
		if($one == 1)
		{
			$wheel1 = "SEVEN";
		}
		if($one == 2)
		{
			$wheel1 = "COIN";
		}
		if($one == 3)
		{
			$wheel1 = "CHERRY";
		}
		if($one == 4)
		{
			$wheel1 = "STAR";
		}
		/****************/
		if($two == 0)
		{
			$wheel2 = "SMILE";
		}
		if($two == 1)
		{
			$wheel2 = "SEVEN";
		}
		if($two == 2)
		{
			$wheel2 = "COIN";
		}
		if($two == 3)
		{
			$wheel1 = "CHERRY";
		}
		if($two == 4)
		{
			$wheel1 = "STAR";
		}
		/****************/
		if($three == 0)
		{
			$wheel3 = "SMILE";
		}
		if($three == 1)
		{
			$wheel3 = "SEVEN";
		}
		if($three == 2)
		{
			$wheel3 = "COIN";
		}
		if($three == 3)
		{
			$wheel1 = "CHERRY";
		}
		if($three == 4)
		{
			$wheel1 = "STAR";
		}
		/****************/
		if($four == 0)
		{
			$wheel4 = "SMILE";
		}
		if($four == 1)
		{
			$wheel4 = "SEVEN";
		}
		if($four == 2)
		{
			$wheel4 = "COIN";
		}
		if($four == 3)
		{
			$wheel1 = "CHERRY";
		}
		if($four == 4)
		{
			$wheel1 = "STAR";
		}
		/****************/
		if($five == 0)
		{
			$wheel5 = "SMILE";
		}
		if($five == 1)
		{
			$wheel5 = "SEVEN";
		}
		if($five == 2)
		{
			$wheel5 = "COIN";
		}
		if($five == 3)
		{
			$wheel1 = "CHERRY";
		}
		if($five == 4)
		{
			$wheel1 = "STAR";
		}
		$this->saveRound($wheel1,
				$wheel2,
				$wheel3,
				$wheel4,
				$wheel5,
				$amountBet,
				$amountWon,
				$amountLost,
				$amountRemaining);
	}
	function saveRound($w1,
				    $w2,
				    $w3,
				    $w4,
				    $w5,
				    $ab,
				    $aw,
				    $al,
				    $ar)
	{	
		 
		$insert = "INSERT INTO GAME". 
			    "(GAME_USERNAME, GAME_WHEEL1, GAME_WHEEL2, GAME_WHEEL3, GAME_WHEEL4, GAME_WHEEL5,GAME_AMOUNTBET, GAME_AMOUNTWON, GAME_AMOUNTLOST, GAME_AMOUNTREMAINING)". 
                   "VALUES('".$_SESSION['username']."','".$w1."','".$w2."','".$w3."','".$w4."','".$w5."','".$ab."','".$aw."','".$al."','".$ar."')";
          $result = pg_query($insert);     
          if ($result == FALSE)
          {
               echo '<script type="text/javascript">alert("StoreGame! ERROR");</script>';
          }
     }
}
?>

