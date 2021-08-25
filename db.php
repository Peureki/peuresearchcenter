
<?php
/*
$dbServerName = "localhost";
$dbUserName = "root";
$dbPassword = "";

try{
	$conn = new PDO("mysql:host=$dbServerName;dbname=myDB", $dbUserName, $dbPassword);
	// set the PDO error mode to exception
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo "Connected successfully";
} catch (PDOException $e){
	echo "Connection failed: " . $e->getMessage();
}

$conn = null;
*/
?>

<?php 

class Dbh{
	private $host = "localhost";
	private $user = "root";
	private $pwd = "";
	private $dbName = "benchmarks";

	protected function connect(){
		$dns = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
		$pdo = new PDO($dsn, $this->user, $this->pwd);
		$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
		return $pdo; 
	}
}


?>