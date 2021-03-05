<?php
	class Model {
		public $myconn;
		public $serverName;
		public $userName;
		public $dbName;
		public $password;
		public $title;
		public $dis;
		public $dl;
		public $price;
		function __construct($serverName,$userName,$password,$dbname)
		{
			$this->serverName = $serverName;
			$this->userName = $userName;
			$this->password = $password;
			$this->dbName = $dbname;
		}
		
		function isConnected(){
			$this->myconn = new mysqli(
				$this->serverName, 
				$this->userName, 
				$this->password,
				$this->dbName
				);
			if($this->myconn->connect_error) {
				//echo "Connection failed: " . $this->myconn->connect_error;
				return false;
				//return "Connection failed: " . $this->myconn->connect_error;
			}
			else {
				//echo "Connected successfully";
				return true;
				//return "Connected successfully";
			}
		}
		
		function readFromDBT(){
			if($this->isConnected() == true){
				$sql = "SELECT * FROM `trekkingroutes`";
				$result = $this->myconn->query($sql);
				return $result;
			}
		}
		function title(){
		if(isset($_POST["title"])){
		$this->title = $_POST["title"];
	}
	if(isset($_POST["dis"])){
		$this->dis = $_POST["dis"];
	}
	if(isset($_POST["dl"])){
		$this->dl = $_POST["dl"];
	}
	if(isset($_POST["price"])){
		$this->price = $_POST["price"];
	}
		}
		
		function readFromDBFT(){
			if($this->isConnected() == true){
				$sql = "SELECT * FROM `trekkingroutes` WHERE `Title` LIKE " .$this->title;
				$result = $this->myconn->query($sql);
				return $result;
			}
		}
		function readFromDBFD(){
			if($this->isConnected() == true){
				$sql = "SELECT * FROM `trekkingroutes` WHERE `Distance` =" .$this->dis;
				$result = $this->myconn->query($sql);
				return $result;
			}
		}
		function readFromDBFDL(){
			if($this->isConnected() == true){
				$sql = "SELECT * FROM `trekkingroutes` WHERE `DifficultyLevel` = " .$this->dl;
				$result = $this->myconn->query($sql);
				return $result;
			}
		}
		function readFromDBFP(){
			if($this->isConnected() == true){
				$sql = "SELECT * FROM `trekkingroutes` WHERE `Price` = " .$this->price;
				$result = $this->myconn->query($sql);
				return $result;
			}
		}
	}
?>