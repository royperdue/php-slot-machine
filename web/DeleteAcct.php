<?php
class Delete
{
	private $connection;
	
	public function __construct($email, $password)
	{
		require_once 'DB_Connect.php';
	     $this->connection = new DB_Connect();
	     $delete = "DELETE FROM PERSON WHERE PER_EMAIL='$email'AND PER_PASSWORD = '$password'";
		$result = mysql_query($delete); 
	     if ($result == FALSE)
	     {
	    		 echo '<script type="text/javascript">alert("ERROR could not run DELETE in DeleteAcct.php.");</script>';
	     }
	}
}
?>
