<?php
    session_start();
	function db_conn(){

		#zssdjnid_shopAdmin  b1qJk6^l(#*I  zssdjnid_shopzilla
		$db_username = 'root';
		$db_password = '';
		#$db_username = 'codesta1_shopkeeper';
		#$db_password = 'b1qJk6^l(#*I';
		$conn = new PDO( 'mysql:host=localhost;dbname=codestar_patreon', $db_username, $db_password );
		if(!$conn){
			die("Fatal Error: Connection Failed!");
		}
		return $conn;

	}
	
	function mpesa($phone, $amount, $ordernum){
	  #Callback url
	  define('CALLBACK_URL', 'https://example.co.ke/include/callback_url.php?orderid=');

	  # access token
	  $consumerKey = ''; //Fill with your app Consumer Key
	  $consumerSecret = ''; // Fill with your app Secret

	  # provide the following details, this part is found on your test credentials on the developer account
	  $BusinessShortCode = ''; //business short code
	  $Passkey = ''; //live passkey
	  $phone = preg_replace('/^0/', '254', str_replace("+", "", $phone));
	  $PartyA = $phone; // This is your phone number,
	  $PartyB = '';
	  $TransactionDesc = 'Pay Order'; //Insert your own description
	  # Get the timestamp, format YYYYmmddhms -> 20181004151020
	  $Timestamp = date('YmdHis');    
	  # Get the base64 encoded string -> $password. The passkey is the M-PESA Public Key
	  $Password = base64_encode($BusinessShortCode.$Passkey.$Timestamp);
	  # header for access token
	  $headers = ['Content-Type:application/json; charset=utf8'];

	  # M-PESA endpoint urls
	  $access_token_url = 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';
	  $initiate_url = 'https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest';  

	  $curl = curl_init($access_token_url);
	  curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
	  curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
	  curl_setopt($curl, CURLOPT_HEADER, FALSE);
	  curl_setopt($curl, CURLOPT_USERPWD, $consumerKey.':'.$consumerSecret);
	  $result = curl_exec($curl);
	  $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
	  $result = json_decode($result);
	  $access_token = $result->access_token;  

	  curl_close($curl);

	  # header for stk push
	  $stkheader = ['Content-Type:application/json','Authorization:Bearer '.$access_token];
	  # initiating the transaction

	  $curl = curl_init();
	  curl_setopt($curl, CURLOPT_URL, $initiate_url);
	  curl_setopt($curl, CURLOPT_HTTPHEADER, $stkheader); //setting custom header
	  
	  $curl_post_data = array(

		//Fill in the request parameters with valid values
		'BusinessShortCode' => $BusinessShortCode,
		'Password' => $Password,
		'Timestamp' => $Timestamp,
		'TransactionType' => 'CustomerPayBillOnline', // CustomerBuyGoodsOnline
		'Amount' => $amount,
		'PartyA' => $PartyA,
		'PartyB' => $PartyB,
		'PhoneNumber' => $PartyA,
		'CallBackURL' => CALLBACK_URL . $ordernum,
		'AccountReference' => $ordernum,
		'TransactionDesc' => $TransactionDesc
	  );

	  $data_string = json_encode($curl_post_data);
	  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	  curl_setopt($curl, CURLOPT_POST, true);
	  curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
	  $curl_response = curl_exec($curl);

	  $res = (array)(json_decode($curl_response));
	  $ResponseCode = $res['ResponseCode'];
	  return $ResponseCode;
	}

	

	function sendSms($phoneNumber,$message){

		$apiKey="YOUR API_KEY";
		$sendeName="YOUR ASSIGNED SENDER NAME";

		$bodyRequest =array(
			"mobile" =>$phoneNumber,
			"response_type"=>"json",
			"sender_name"=>$sendeName,
			"service_id"=>0,
			"message"=>$message
		);

		$payload = json_encode($bodyRequest);
		$curl = curl_init();
		curl_setopt_array($curl, array(
		CURLOPT_URL => 'https://api.mobitechtechnologies.com/sms/sendsms',
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => '',
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 15,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => 'POST',
		CURLOPT_POSTFIELDS =>$payload,
		CURLOPT_HTTPHEADER => array(

			'h_api_key: '.$apiKey,

			'Content-Type: application/json'

		),

		));



		$response = curl_exec($curl);
		curl_close($curl);
		//echo $response;
	}

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
	
	function resetpd($n) {
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$randomString = '';
	  
		for ($i = 0; $i < $n; $i++) {
			$index = rand(0, strlen($characters) - 1);
			$randomString .= $characters[$index];
		}
	  
		return $randomString;
	}

	

	function logout(){
		session_start();
		session_unset();
		session_destroy();
		header("Location: ../index.php");

	}

	if (isset($_GET['logout'])){
		logout();
	}

?>