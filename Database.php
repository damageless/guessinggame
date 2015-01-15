<?php
class Database
{
	private $try = $_GET[‘try’];
	private $mysqli = new mysqli(‘localhost’, ‘kraczekn_game’, ‘testing1234’, ‘kraczekn_game’);

	public function storeTries()
	{
		if (mysqli_connect_errno()) {
	    		printf("Connect failed: %s\n", mysqli_connect_error());
	    		exit();
		}
		$sql = ‘INSERT INTO Table (Try) VALUES (?)’;
		$stmt->bind_param(“sss”, $try);
		$stmt = $mysqli->prepare($sql);

		$stmt->execute();

		$stmt->close();
	}
	public function getHighScore()
	{		
		$query = “SELECT MIN(Try) FROM Table”;
		if(!$result = $mysqli->query($query))
		{
			die(“db error fool!”);
		}
		return $result
	}
}