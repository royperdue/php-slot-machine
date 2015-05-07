<?php
class DB_Connect
{
	public function __construct()
	{
		$db_hostname = 'localhost';
		$db_database = 'rperdue';
		$db_username = 'rperdue'; 
		$db_password = 'A30029858';
		
		$connection = mysql_connect($db_hostname, $db_username, $db_password); 

		if($this == FALSE) 
		{
			 echo '<script type="text/javascript">alert("Unable to connect to MySQL:");</script>';
		}
		mysql_select_db('rperdue');
		if (mysql_select_db($db_database) == FALSE)
		{
			echo '<script type="text/javascript">alert("Unable to select MySQL DB:");</script>';
		}
		return $connection;
	}
}
?>
