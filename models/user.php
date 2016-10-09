<?php
require('Database.php');

class User extends Database
{
	public $success = false;
	public $arrlist = array();

	/**
	* This function inserts data in the database
	* @param $firstname and $lastname(string)
	* @return
	*
	*/
	public function insert($firstname, $lastname){

		$sql = "INSERT INTO student(firstname, lastname) Values('$firstname', '$lastname')";

		if ($this->conn->query($sql) === TRUE) {
			$this->success = true;
		}
	
	}

	

	/**
	* This function fetch all existing data in an specific table in the database
	* @param $firstname and $lastname(string)
	* @return
	*
	*/

	
	public function index()
	{
		$sql = "SELECT * FROM `student` WHERE 1";
		$result = $this->conn->query($sql);

		if ($result->num_rows > 0) {
		// output data of each row
		$count =1;
			while($row = $result->fetch_assoc()){
				array_push($this->arrlist, $row);
			}
		}
		return $this->arrlist;
	}

	/**
	* This function select data in the database
	* to be updated
	* @param $firstname and $lastname(string)
	* @return
	*
	*/

	public function update($id){

		$sql = "SELECT * FROM `student` WHERE `id` LIKE '$id'";

		$result = $this->conn->query($sql);

			while($row = $result->fetch_assoc()){
				array_push($this->arrlist, $row);
			}
		return $this->arrlist;
	
	}

	/**
	* This function update/edit data in the database
	* @param $firstname and $lastname(string)
	* @return
	*
	*/


	public function edit($firstname, $lastname,$id){
		$sql = "UPDATE `student` SET `firstname`='$firstname',`lastname`='$lastname' WHERE id LIKE '$id'";

		if ($this->conn->query($sql) === TRUE) {
			$this->success = true;
		}
	}

	
	/**
	* This function Delete data in the database
	* @param $firstname and $lastname(string)
	* @return
	*
	*/

	public function delete($id){
		$sql = "DELETE FROM `student` WHERE `id` LIKE '$id'";

		if ($this->conn->query($sql) === TRUE) {
			$this->success = true;
		} 
	}


	/**
	* This function check if email and password exist data in the database
	* @param $firstname and $lastname(string)
	* @return
	*
	*/

	public function loginuser(){

	}


}