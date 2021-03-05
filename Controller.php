<?php
	require_once("View.php");
	require_once("Model.php");
	require_once("Conf.php");
	class Controller {
		public $achkych;
		public $model;
		public $view ;
		function __construct($serverName,$userName,$password,$dbName){
			$this->achkych = "Home";
			$this->view = new View();
			$this->model = new Model($serverName,$userName,$password,$dbName);
		}
		
		function set($newAchkych){
			$this->achkych = $newAchkych;
		}
		
		function setView($newView){
			$this->view = $newView;
		}
		
		function getView(){
			return $this->view;
		}
		
		function setModel($newModel){
			$this->model = $newModel;
		}
		
		function getModel(){
			return $this->model;
		}
		
		
		function Marshrut(){
			switch($this->achkych)
			{
				//include<"third.php");
				case "Home": $this->view->Home();
				break;
				case "About": $this->view->About();
				break;
				case "Table": 
				$this->view->setTableData($this->model->readFromDBT());
				break;
				case "Title": 
				$this->view->setTableData($this->model->readFromDBFT());
				break;
				case "Distance": 
				$this->view->setTableData($this->model->readFromDBFD());
				break;
				case "DL": 
				$this->view->setTableData($this->model->readFromDBFDL());
				break;
				case "Price": 
				$this->view->setTableData($this->model->readFromDBFP());
				break;
				default : $this->view->Home();
			}
		}
	}
?>