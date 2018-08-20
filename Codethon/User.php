<html>
<!--The following form is used by user to check various plans and retrieve the required plans  -->
	<head>
		<title>User Filter Search</title>
	</head>
	<body>
		<form method="POST" action="filter.php">
			<table>
				<tr>
					<td style="color:red;"> *Please fill NA if not applicable</td>
				</tr>
				<tr>
					<td>Filter:</td>
				</tr>
				<tr>
					<td>Monthly Rental:<input type="text" name="mr"></td>
				</tr>
				<tr>
					<td>Free Internet:<input type="radio" value="Yes" name="fi">Yes<input type="radio" value="No" name="fi">No <input type="text" name="fi"></td>
				</tr>
				<tr>
					<td>Free Calls:<input type="radio" value="Yes" name="fc">Yes<input type="radio" value="No" name="fc">No <input type="text" name="fc"></td>
				</tr>
				<tr>
					<td>Free SMS:<input type="radio" value="Yes" name="fs">Yes<input type="radio" value="No" name="fs">No <input type="text" name="fs"></td>
				</tr>
				<tr>
					<td><input type="submit"></td>
				</tr>
			</table>
		</form>
		<?php
		$db=new mysqli("localhost","root","","opertor");
		$result=$db->query("SELECT * FROM plans;");
		echo "<h3>Following are the plans available</h3><br>";
		if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
        echo "Plan Name: " . $row["PlanName"]. " - Monthly Rental: " . $row["MonthlyRent"]. " - Free Internet " . $row["FreeInternet"]. " - Free Calls" . $row["FreeCalls"]. " - Free SMS's " . $row["FreeSMS"]. " - Call Charges " . $row["CallCharges"]."/1min". " - SMS Charges " . $row["SmsCharges"]."/SMS". " - Data Charges " . $row["DataCharges"]."/1K.b"." - Roaming Charges " . $row["Roaming"]. "<br>";
		}
		}
		?>
	</body>
</html>