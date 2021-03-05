<?php
	class View {
		function Home(){
			include("index.html");
		}
		function About(){
			include("about.php");
		}
		function setTableData($result){
			?>
			<table align='center' border='4' cellpadding='3' cellspacing='0' style = "100%" >
			<?php
			for ($j=1;$j<=4;$j++)
					{
						if($j==1)
						{
							echo "<td>Title</td>";
						}
						else if($j==2)
						{
							echo "<td>Distance</td>";
						}
						else if($j==3)
						{
							echo "<td>Dl</td>";
						}
						else 
						{
							echo "<td>Price</td>";
						}
					}
			if($result->num_rows>0)
					{
			while($row = $result->fetch_assoc()) 
			{				
				echo "<tr>";
				
				foreach($row as $x => $x_value)
				{
					echo "<td>".$x_value."</td>";
					//echo "<td></td>";
				}
				echo "</tr>";
			}
		}
			?>
	</table>
	<?php
		}
	}
	?>
