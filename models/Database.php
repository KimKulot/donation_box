<?php

class Database{
	private $servername = "localhost";
	private $username = "root";
	private $password = "";
	private $dbname = "mvc_db";

	public $conn = "";

	public function __construct(){
		//Create connection
		$conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
		//Check connection
		if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
		}

		$this->conn = $conn;
	}
	

	
//End DATABASE class
}