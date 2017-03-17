<?php

require_once("../Includes/config.php");

/**
* abstract class Model the generic to all model classes
*/
abstract class Model{
	
	//connection 
	private $conn;

	/**
	 *
	 * Constructor to open connection with the database
	 *
	 */
	
	function __construct(){
		$this->conn = mysqli_connect(HOST, USER, PASS, DB_NAME);
	}


	/**
	 *
	 * Destructor to close connection with the database
	 *
	 */
	
	function __destruct(){
		$this->conn->close();
	}
}