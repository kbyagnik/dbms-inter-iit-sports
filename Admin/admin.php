<?php
	function getiitnames()
	{
		return execute_query("Select name from iit");

	}
	if (isset($_GET['tournament_details_form_submit']))
	{
//		echo $_GET['year'];
		$yr=$_GET['year'];
		$host=$_GET['host'];
		$foot=$_GET['footfall'];
		$st_date=$_GET['startdate'];
		$en_date=$_GET['enddate'];
		$chief=$_GET['chiefg'];
		echo "INSERT INTO tournament(year, host,footfall, start_date,end_date,chief_guest) VALUES ($yr,'$host',$foot,'$st_date','$en_date','$chief')";
		return execute_query("INSERT INTO tournament(year, host,footfall, start_date,end_date,chief_guest) VALUES ($yr,'$host',$foot,'$st_date','$en_date','$chief')");

	}

	else if (isset($_GET['iit_participation_form_submit']))
	{
//		echo $_GET['year'];
		$yr=$_GET['year'];
		$nm=$_GET['name'];
		$conti=$_GET['contingent'];
		$scr=$_GET['score'];
		$sprto=$_GET['sporto'];
		$sprts=$_GET['sports'];
	//	echo "INSERT INTO iit_participation(year, name,contingent_size, score_total,sports_officer,sports_secretary) VALUES ($yr,'$nm',$conti,$scr,'$sprto','$sprts')";
		return execute_query("INSERT INTO iit_participation(year, name,contingent_size, score_total,sports_officer,sports_secretary) VALUES ($yr,'$nm',$conti,$scr,'$sprto','$sprts')");

	}
	else if (isset($_GET['player_form_submit']))
	{
//		echo $_GET['year'];
		$nm=$_GET['name'];
		$dobirth=$_GET['dob'];
		$gnd=$_GET['gender'];
		$mailid=$_GET['email'];
		$add=$_GET['address'];
		$iit_name=$_GET['iitname'];
		//echo "INSERT INTO player(name,date_of_birth,gender, email_id,address,iit) VALUES ('$nm','$dobirth','$gnd','$mailid','$add','$iit_name')";
		return execute_query("INSERT INTO player(name,date_of_birth,gender, email_id,address,iit) VALUES ('$nm','$dobirth','$gnd','$mailid','$add','$iit_name')");

	}

	function execute_query($query)
	{
		include('config.php');
		$con=mysqli_connect($host,$user,$password,$dbname) or die(mysqli_error($con));
		$result = mysqli_query($con,$query) or die ("Error  = ".mysqli_error($con));
		while ($row = mysqli_fetch_assoc($result)) {
			$output[]=$row;
		}
		mysqli_close($con);
		
		return $output;
	}

?>