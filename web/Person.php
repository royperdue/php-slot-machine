<?
class Person
{
     public $id = -1;
	public $last= "";
	public $first = "";
     public $email = "";
     public $username = "";
     public $password = "";
     
     public function __construct($i, $l, $f, $e, $u, $p)
	{
		$id = $i;
		$last = $l;
		$first = $f;
		$email = $e;
		$username = $u;
		$password = $p;
	}
	function getId()
	{
		return $id;
	}
	function getLast()
	{
		return $last;
	}
	function getFirst()
	{
		return $first;
	}
	function getEmail()
	{
		return $email;
	}
	function getUsername()
	{
		return $username;
	}
	function getPassword()
	{
		return $password;
	}
}
?>
