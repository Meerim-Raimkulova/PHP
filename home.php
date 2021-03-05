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

		<div class="navbar">
		<a href="index.php?achkych=Home" class="active">Home</a>
		<a href="index.php?achkych=First">First</a>
		<a href="index.php?achkych=Second">Second</a>
		<a href="index.php?achkych=Third">Third</a>
		<a href="index.php?achkych=Error">Error</a>
		<a href="index.php?achkych=Read">Read</a>
		
	</div>
	</div>
	<div>
		<p align = "center"  style="color:#ff0099; font-size:50px"> "Welcome to home.php"</p>
		</div>
	<form  action="index.php?achkych=First" method="post" align = "center" >
		<br><br><br>
		<input type="text" name="name" placeholder = "name" ><br><br>
		<input type="text" name="surname" placeholder = "surname" ><br><br>
		<?php echo " Tuulgan jylynyz:  " ; ?>
		<select name = "year" form = "form"> 
			<?php for ($year=2019; $year>1949; $year--)
			{ echo '<option>' .$year. '</option>'; } ?> 
		</select><br><br>
		
		<?php echo " Tuulgan aiynyz:  " ; ?>
		<select name = "month" > 
			<?php for ($month=1; $month<13; $month++)
			{ echo '<option>' .$month. '</option>'; } ?> 
		</select><br><br>
		
		<?php echo " Tuulgan kununuz:  " ; ?>
		<select name = "day"> 
			<?php for ($day=1; $day<32; $day++)
			{ echo '<option>' .$day. '</option>'; } ?> 
		</select><br><br>
		
		<input type="email" name="email" placeholder = "email"><br><br>
		<input type="password" name="password" placeholder = "password"><br><br>
		<input type="checkbox" name="checkbox">
		
		<?php echo " remember me  " ; ?><br><br>
		<input type="text" name="exit" placeholder = "exit" value = "" ><br><br>
		<input type="submit" value = "submit" name = "submit" ><br><br>
	
		<textarea name="comment" rows="4" cols="22" >
		</textarea>
		
		
	</form>
</body>
</html>