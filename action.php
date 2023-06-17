<?php
include "functions.php";
#$conn = db_conn();

if(isset($_POST['submit'])){
	$phone = $_POST['phone'];
	$amount = $_POST['amount'];
	$invoice = date('YmdHis');
	$status = "Unpaid";
	
	#Call mpesa stkpush function_exists
	$response = mpesa($phone, $amount, $invoice);

	
	if($response == 0){
		//insert to transaction to the invoice table
		header("Location: index.php?error= Please enter your mpesa Pin to complete payment");
	}
	else{
		header("Location: index.php?error= an error has occured");
	}
	
}

?>