<!DOCTYPE html>
<html>
	<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

	.navbar {
	overflow: hidden;
	background-color: #333;
	position: fixed;
	top:0;
	width: 100%;
	}

.navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background: #f1f1f1;
  color: black;
}

.navbar a.active {
  background-color: #4CAF50;
  color: white;
}

.main {
  padding: 16px;
  margin-bottom: 30px;
}
</style>
</head>
	<body>
	<?php
require_once("index.php");
?>
	<div class="navbar">
		<a href="index.php?achkych=Home" class="active">Home</a>
		<a href="index.php?achkych=First">First</a>
		<a href="index.php?achkych=Second">Second</a>
		<a href="index.php?achkych=Third">Third</a>
		<a href="index.php?achkych=Error">Error</a>
		
	</div>
	<div>
	<div>
		<p align = "center"  style="color:#ff0099; font-size:50px"> "Welcome to first.php"</p>
		</div>
 <?php
			if(isset($_POST["submit"]))
			{
				if(!empty($_POST["name"])){
					echo "Atynyz : " .$_POST["name"] . "<br>";
				}
				if(!empty($_POST["surname"])){
					echo "Familiyanyz : " .$_POST["surname"] . "<br>";
				}
			if(!empty($_POST["year"])){
				echo "Tuulgan jylynyz : " .$_POST["year"] . "<br>";
			}
			
			if(!empty($_POST["month"])){
				echo "Tuulgan aiynyz : " .$_POST["month"] . "<br>";
			}
			
			if(!empty($_POST["day"])){
				echo "Tuulgan kununuz : " .$_POST["day"] . "<br>";
			}
			
			if(!empty($_POST["email"])){
				echo " email :  " . $_POST["email"] . "<br>";
			}
		
			if(!empty($_POST["password"])){
				echo "Parol :  " . $_POST["password"] . "<br>";
			}
				
			$_SESSION["exit"] = $_POST["exit"];
			
		}
	?> 
	</div>
	</body>
</html>