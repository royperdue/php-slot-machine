<?php
class DB_Connect
{
	public function __construct()
	{
		$dbopts = parse_url(getenv('DATABASE_URL'));
		$app->register(new Herrera\Pdo\PdoServiceProvider(),
  		array(
    		'pdo.dsn' => 'pgsql:dbname='.ltrim($dbopts["path"],'/').';host='.$dbopts["host"],
    		'pdo.port' => $dbopts["port"],
    		'pdo.username' => $dbopts["user"],
    		'pdo.password' => $dbopts["pass"]
  			)
		);
	}
}
?>
