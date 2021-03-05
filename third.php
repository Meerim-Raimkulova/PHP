<!DOCTYPE html>
<html>
<body>
<div>
<form  action="index.php?achkych=First" method="post" align = "center" >
		<br><br><br>
		<select name = "title" form = "form"> 
			<?php echo '<option> bir</option>';  ?> 
			<?php echo '<option> eki</option>';  ?> 
		</select><br><br>
		
		<?php echo " distance:  " ; ?>
		<select name = "dis" > 
			<?php for ($month=1; $month<13; $month++)
			{ echo '<option>' .$month. '</option>'; } ?> 
		</select><br><br>
		
		<?php echo " dl:  " ; ?>
		<select name = "dl"> 
			<?php for ($day=1; $day<32; $day++)
			{ echo '<option>' .$day. '</option>'; } ?> 
		</select><br><br>
		
		<?php echo " price:  " ; ?>
		<select name = "price"> 
			<?php for ($day=1; $day<32; $day++)
			{ echo '<option>' .$day. '</option>'; } ?> 
		</select><br><br>
		
	</form>
		<div>
		<p align = "center"  style="color:#ff0099; font-size:50px"> "Welcome to third.php"</p>
		</div>
		
</body>
</html>