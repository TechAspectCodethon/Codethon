<?php
/*This is used to add the plans using the variables passed by the operator*/
	$name=$_POST['pn'];
	$mr=$_POST['mr'];
	$fi=$_POST['fi'];
	$fc=$_POST['fc'];
	$fs=$_POST['fs'];
	$sc=$_POST['sc'];
	$cc=$_POST['cc'];
	$dc=$_POST['dc'];
	$rc=$_POST['rc'];
	$tablename='plans';
	$db=new mysqli("localhost","root","","opertor");
	if($db->query("INSERT INTO $tablename (PlanName, MonthlyRent, FreeCalls, FreeSMS, CallCharges, SmsCharges, DataCharges, FreeInternet, Roaming) VALUES ('$name','$mr','$fc','$fs','$cc','$sc','$dc','$fi','$rc')"))
		{
			echo "Data Entered Successfully!";
		}
	else
		{
	echo $db->error;
		}

?>