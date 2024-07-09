<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<center><body>
<?php 
			$con = mysqli_connect("localhost","root","") or die(mysql_error());

			mysqli_select_db($con,"events") or die(mysql_error());

	$result = mysqli_query($con,"SELECT * FROM reg where  SEM = '$_POST[abc]' and SEC = '$_POST[abd]'");			
			if(!$result)
			{
				echo "There is no records";
			}
			echo "<table border='1'>
			<tr>
			<th>Name</th>
			<th>Mail</th>
			<th>SRN</th>
			<th>Semester </th>
            <th>Section </th>
			<th>Event </th>
 		 </tr>";
			while($row = mysqli_fetch_array($result))
			{
				  echo "<tr>";
				  echo "<td>" . $row['Name'] . "</td>";
				  echo "<td>" . $row['mail'] . "</td>";
				  echo "<td>" . $row['SRN'] . "</td>";
				  echo "<td>" . $row['SEM'] . "</td>";
				  echo "<td>" . $row['SEC'] . "</td>";
				  echo "<td>" . $row['Event'] . "</td>";
				  echo "</tr>";
			}
			echo "</table>";
			mysqli_close($con);
		?> 
</body></center>
</html>