<?php

include 'dbc.php';

session_start();

//print_r($_REQUEST);

$err = array();

if(!isset($_REQUEST['st']) || $_REQUEST['st'] != 'Completed' || $_REQUEST['tx'] == '' || $_REQUEST['amt'] =='' || $_REQUEST['item_number']=='')

{

	$err[] = "ERROR - The payment is not success. Please try again.";

}
else
{


	$data = array();

	$data = $_SESSION['user_data'];	
	// Clear the session values here ////	
	$_SESSION['user_data'] = '';

	foreach($_REQUEST as $key=>$val)

	{

		foreach($_REQUEST as $key => $value) {

		$data[$key] = filter($value);

		}

	}	

	if(@$data['donate']!=""&&@$data['fee']!="")

	{

	$mtype = "md";

	}

	

	else if(@$data['donate']!="")

	{

	$mtype = "d";

	}

	else if(@$data['fee']!="")

	{

	$mtype = "m";

	}

	$address = $data['address1'].",".$data['address2'];

	$user_ip = $_SERVER['REMOTE_ADDR'];

	$check_user = mysql_query("SELECT * FROM tta_users where email='$data[email]'");

/*	$user_row = mysql_fetch_array($check_user);*/

	/*$user_id = $user_row['id'];*/

	$count = mysql_num_rows($check_user);

	if($count==0)

	{

	$sql_insert_user = "INSERT into `tta_users`

	(`first_name`,

	`last_name`,

	`address`,

	`city`,

	`email`,

	`country`,

	`zip`,

	`mobile`,

	`users_ip`,`create_date`,

	`prefered_by`,

	`mtype`

	)

	VALUES	('$data[first]','$data[last]','$address','$data[city]','$data[email]','$data[country]', '$data[zip]', '$data[mobile]','$user_ip', now(),'$data[prefer]','$mtype')";

	if(mysql_query($sql_insert_user,$link))
	{
	$id = mysql_insert_id($link);
	$sql_insert = "INSERT into `tta_transactions`

	(`mem_id`,

	`paypal_id`,

	`status`,

	`mc_currency`,

	`amount`,`create_date`)

	VALUES	('$id', '$data[tx]','$data[st]','$data[cc]','$data[amt]',now())";

	mysql_query($sql_insert,$link) or die("Insertion Failed:" . mysql_error());
	}

	}

	else {

$user_row = mysql_fetch_array($check_user);
$user_id = $user_row['id'];
	

	$sql_insert = mysql_query("INSERT into `tta_transactions`

	(`mem_id`,

	`paypal_id`,

	`status`,

	`mc_currency`,

	`amount`,`create_date`)

	VALUES	('$user_id', '$data[tx]','$data[st]','$data[cc]','$data[amt]',now())", $link) or die(mysql_error());
	if($sql_insert)
	{
	

	$memtype = $user_row['mtype'];

	if($memtype=='md')//check if member and donor

	{

	 $mtype_new = $memtype;

	}

	else if($memtype=='d')//check if donor

	{

		if($mtype=='d')

			{  $mtype_new='d';}

		else

			{

			  $mtype_new = 'md';

			}

	}

	else if($memtype=='m')//check if member

	{

		if($mtype=='m')

			{echo $mtype_new='m';}

		else 

			{

			echo $mtype_new = 'md';

			}

	}

	$sql_insert = mysql_query("UPDATE tta_users SET mtype='$mtype_new' where id='$user_id'", $link) or die(mysql_error());

	
	}
	


	

	}

	

	//$user_id = mysql_insert_id($link);  

	mysql_close($link);

	if($sql_insert)  

	{	

		//$_SESSION['user_data'] = '';
		
		//session_unset();

		header("Location: thankyou.php");  
		
		exit();

	}


}





?>





<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Thank you for the payment</title>

<link href="styles.css" rel="stylesheet" type="text/css">

</head>

<body>

<table width="100%" border="0" cellspacing="0" cellpadding="5" class="main">

  <tr>

    <td colspan="3">&nbsp;</td>

  </tr>

  <tr>

    <td width="160" valign="top"><p>&nbsp;</p>

      <p>&nbsp; </p>

      <p>&nbsp;</p>

      <p>&nbsp;</p>

      <p>&nbsp;</p>      

      <?php	

	 if(!empty($err))  {

	   echo "<div class=\"msg\">";

	  foreach ($err as $e) {

	    echo "* $e <br>";

	    }

	  echo "</div>";	

	   }

	 ?> 

       <br>

       </td>

  </tr>

  <tr>

    <td colspan="3">&nbsp;</td>

  </tr>

</table>

</body>

</html>

