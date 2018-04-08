<?php
/**
* DBConnection Class
*/
class DBConnection 
{
	protected $db;
	
	/*
	const USERNAME = "root";
	const DBNAME = "meghlabproject";
	const PASS = "";
	const HOST = "localhost";*/
	
	
	const USERNAME = "madventu_user";
	const DBNAME = "madventu_DB";
	const PASS = "0987654321";
	const HOST = "localhost";
	
	
	
	function __construct(){
		$this->Connection();
	}

	private function Connection(){
		try{
			$this->db = new PDO("mysql:dbname=".Self::DBNAME.";host=".self::HOST,self::USERNAME,self::PASS);
		}
		catch(PDOException $ex){
			echo $ex->getMessage();
		}
	}
}



?>