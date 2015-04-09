<?php
include 'dbc.php';
session_start();
if($_POST['Register'])
{
$fee = @$_POST['fee'];
$donate = @$_POST['donate'];
$total = $fee+$donate;

	/// Here add the user data to session ///
	$data = array();	
	foreach($_POST as $key=>$val)
	{
		foreach($_POST as $key => $value) {
			$data[$key] = filter($value);
		}
		
	}	
	$_SESSION['user_data'] = $data;	
	
	//print_r($_SESSION['user_data']);
	
}
?>
<form id="make_payment" name="make_payment" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<!--<form id="make_payment" name="make_payment" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">-->
 
    <input type="hidden" name="cmd" value="_xclick">
  <input type="hidden" name="business" value="rtp.bathukamma@gmail.com">  
     <!-- <input type="hidden" name="business" value="swamy_1258006450_biz@quadranttech.com"> -->
    <input type="hidden" name="item_name" value="Subscription">
    <input type="hidden" name="item_number" value="Subscription">
    <input type="hidden" name="amount" value="<?php echo $total ?>">
    <input type="hidden" name="no_shipping" value="0">
    <input type="hidden" name="no_note" value="1">
    <input type="hidden" name="currency_code" value="USD">
    <input type="hidden" name="lc" value="US">
    <input type="hidden" name="bn" value="PP-BuyNowBF">
	 <input type="hidden" name="return" value="http://www.triangletelangana.org/paycheck.php">
    <input type="hidden" name="cancel_return" value="http://www.triangletelangana.org/member.php?payment=cancel">
  <!-- <input type="hidden" name="return" value="http://nextgen6.com/devng6/try/paycheck.php">
    <input type="hidden" name="cancel_return" value="http://nextgen6.com/devng6/try/member.php?payment=cancel">-->
    <input type="hidden" name="rm" value="2">  
	<input type="hidden" name="first_name" value="<?php echo $data['first']; ?>"> 
	<input type="hidden" name="last_name" value="<?php echo $data['last']; ?>"> 
	<input type="hidden" name="address1" value="<?php echo $data['address1']; ?>"> 
	<input type="hidden" name="address2" value="<?php echo $data['address2']; ?>"> 
	<input type="hidden" name="city" value="<?php echo $data['city']; ?>"> 
	<input type="hidden" name="country" value="<?php echo $data['country']; ?>"> 
	<input type="hidden" name="zip" value="<?php echo $data['zip']; ?>"> 
	<input type="hidden" name="email" value="<?php echo $data['email']; ?>"> 
	
    <input type="submit" value="Pay Now" style="display:none;">
 
</form>
<div>
Please do not refresh or close the browser. We are redirecting the page to paypal to make the payment.........
</div>
<script>
document.make_payment.submit();
</script>