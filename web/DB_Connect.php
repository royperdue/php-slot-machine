<?php
class DB_Connect
{
	public function __construct()
	{
		$conn = "pgsql:"
    		. "host=ec2-184-73-165-195.compute-1.amazonaws.com;"
    		. "dbname=d6bkcb9sfqhi44;"
    		. "user=ptfcmkmdexdnzk;"
    		. "port=5432;"
    		. "sslmode=require;"
    		. "password=dHqiWWZgdW5j49pHJad76px4e4";
 
		return $connection = new PDO($conn);
	}
}
?>
