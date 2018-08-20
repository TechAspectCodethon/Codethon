<?php
		/*This is used to filter the plans using the variables passed by the user*/
		$db=new mysqli("localhost","root","","opertor");
		$mr=$_POST['mr'];
		$fi=$_POST['fi'];
		$fc=$_POST['fc'];
		$fs=$_POST['fs'];
		$result=$db->query("SELECT * FROM plans WHERE FreeCalls==$fc or FreeSMS==$fs or FreeInternet==$fi or MonthlyRent<=$mr;");
		echo "<h3>Following are the plans available</h3><br>";
		if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
        echo "Plan Name: " . $row["PlanName"]. " - Monthly Rental: " . $row["MonthlyRent"]. " - Free Internet " . $row["FreeInternet"]. " - Free Calls" . $row["FreeCalls"]. " - Free SMS's " . $row["FreeSMS"]. " - Call Charges " . $row["CallCharges"]."/1min". " - SMS Charges " . $row["SmsCharges"]."/SMS". " - Data Charges " . $row["DataCharges"]."/1K.b"." - Roaming Charges " . $row["Roaming"]. "<br>";
		}
		}
		else{
		 echo "Zero Results";
		}
?>