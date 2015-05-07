<?php
	
class SignIn
{
	private $connection;
	
	public function __construct($username, $password)
	{
		require_once 'DB_Connect.php';
	     $this->connection = new DB_Connect();
    	
	    	$select = "SELECT PER_USERNAME, PER_PASSWORD 
	    	FROM PERSON WHERE PER_USERNAME ='$username' AND PER_PASSWORD = '$password'";
		$result = pg_query($select);

		if(pg_num_rows($result) > 0)
		{
			 header("Location: Game.php"); 
		}
	    	else
	    	{
	    		echo '<script type="text/javascript">alert("ERROR you do not have an account.");</script>';
	    	}	
	}
}
?>


