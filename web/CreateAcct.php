<?php
	
class CreateAcct
{
	private $connection;
	
	public function __construct()
	{
		require_once 'DB_Connect.php';
		$this->connection = new DB_Connect();

			$last;
    		$first;
    		$email;
    		$username;
    		$password;
    		$initialdeposit;
    		
		if (isset($_POST["last"]) && isset($_POST["first"]) && isset($_POST["email"]) 
		&& isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST["initialdollars"])) 
		{
	    		$last = $_POST["last"];
	    		$first = $_POST["first"];
	    		$email = $_POST["email"];
	    		$username = $_POST["username"];
	    		$password = $_POST["password"];
	    		$initialdeposit = $_POST["initialdollars"];
	    		
	    		$select = "SELECT PER_USERNAME, PER_PASSWORD 
		    	FROM PERSON WHERE PER_USERNAME ='$username' AND PER_PASSWORD = '$password'";
			$result = pg_query($select);

			if(pg_num_rows($result) == 0)
			{
				$insert = "INSERT INTO PERSON " . 
		                    "(PER_LAST, PER_FIRST, PER_EMAIL, PER_USERNAME, PER_PASSWORD, PER_INITIALDOLLARS) " . 
		                    "VALUES('" . $last . "', '" . $first . "', '" . $email . "', 
		                    '" . $username . "','" . $password . "','" . $initialdeposit ."')";
		                    
				$result = pg_query($insert); 
				if ($result == FALSE)
				{
  					  echo pg_result_error($result);
				} 
			}
		    	else
		    	{
		    		echo '<script type="text/javascript">alert("ERROR you already have an account.");</script>';
		    	}	
	    }
	}	
}
?>


