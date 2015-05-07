<?php
class AddMoney
{
	public function __construct($money)
	{
		require_once 'DB_Connect.php';
	     $this->connection = new DB_Connect();
	     $update = "UPDATE PERSON SET PER_INITIALDOLLARS = PER_INITIALDOLLARS +'$money'";
	     
          $result = mysql_query($update); 
          if ($result == FALSE)
          {
                 echo '<script type="text/javascript">alert("AddMoney ERROR");</script>';
          }
	}
}
?>
