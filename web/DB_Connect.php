<?php
class DB_Connect
{
	public function __construct()
	{
		function pg_connection_string() 
		{
  			return "dbname=d6bkcb9sfqhi44 host=ec2-184-73-165-195.compute-1.amazonaws.com user=ptfcmkmdexdnzk password=dHqiWWZgdW5j49pHJad76px4e4 sslmode=require";
		}
 
		return $connection = pg_connect(pg_connection_string());
		
		if (!$connection) 
		{
    		echo "Database connection error."
    		exit;
		}
	}
}
?>
