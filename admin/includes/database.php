<?php
require_once("config.php");

class Database{
<<<<<<< HEAD

	public $connection;


	public function __construct(){
		$this->open_db_connection();
	}

	public function open_db_connection(){

		$this->connection = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

		if($this->connection->connect_errno){
			die("Database connection failed" . $this->connection->connect_error);
		}

	}

	public function query($sql){
		//$result = mysqli_query($this->connection, $sql);
		$result = $this->connection->query($sql);

		$this->confirm_query($result);

		return $result;
	}
	private function confirm_query($result){


=======
	
	public $connection;
	
	
	public function __construct(){
		$this->open_db_connection();
	}
	
	public function open_db_connection(){
	
		//$this->connection = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
		
		$this->connection = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
		
		if($this->connection->connect_errno){
			die("Database connection failed" . $this->connection->connect_error);
		}
		
	}
	
	public function query($sql){
		//$result = mysqli_query($this->connection, $sql);
		$result = $this->connection->query($sql);
		
		$this->confirm_query($result);
		
		return $result;
	}
	private function confirm_query($result){
		
		
>>>>>>> 866f4bb7b662bd5045c37a9f168e7cab5353c326
		if(!$result){
			die("Query failed" . $this->connection->error);
		}
	}
	public function escape_string($string){
		//$escaped_string = mysqli_real_escape_string($this->connection, $string);
		$escaped_string = $this->connection->real_escaped_string($string);
		return $escaped_string;
	}
	public function the_insert_id(){
		return $this->connection->insert_id;
	}
<<<<<<< HEAD

=======
	
>>>>>>> 866f4bb7b662bd5045c37a9f168e7cab5353c326
}


$database = new Database();




?>
<<<<<<< HEAD
=======
	
	


>>>>>>> 866f4bb7b662bd5045c37a9f168e7cab5353c326
