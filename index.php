<?php 
$PATH_INFO = $_SERVER['PATH_INFO'];
 // header("Access-Control-Allow-Origin: *");
   

$response =[];
switch ($PATH_INFO) {
	case '/verify/email/otp':
		$response = [
			"status"=> "Success",
			"message"=> "New OTP Successfully sent on your email"
		];
		break;
	case '/verify/email/otp':

  $response = [
			"status"=> "Success",
			"message"=> "Email Verification Successful"
		];

		break;
}

echo json_encode($response);