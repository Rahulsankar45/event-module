<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
		<style>
			table{
				color: #222222;
				margin-left: auto;
                margin-right: auto;
				margin-top: 50px;
				color: aliceblue;
				background-color: #222222;
				border-color: aliceblue;
				border-radius: 20px;
			}
			th,td{
				padding: 15px;
				border: 2px solid aliceblue;
			}
		</style>
	<body>
		<?php 
			$con = mysqli_connect("localhost","root","") or die(mysql_error());

			mysqli_select_db($con,"events") or die(mysql_error());

	$result = mysqli_query($con,"SELECT * FROM reg where SEC = '$_POST[SEC]'");			
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
	</body>
</html>