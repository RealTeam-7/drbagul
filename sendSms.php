<?php 
/* Send SMS  */

/* function sendSMS($number,$remark)
{
	$usernameSmsApi = 'pravin.ktclear@gmail.com';
	$hashSmsApi = '444235d50a199cde62cc0097b56bd320ca34c54a5cd798c054a93cbe733845f5';
	$numbersSmsApi = $number;
	$senderSmsApi = urlencode('TXTLCL');
	$messageSmsApi = rawurlencode($remark);
	
	$data = array('username' => $usernameSmsApi, 'hash' => $hashSmsApi, 'numbers' => $numbersSmsApi, "sender" => $senderSmsApi, "message" => $messageSmsApi);
	
	$ch = curl_init('http://api.textlocal.in/send/');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($ch);
	curl_close($ch);
	return $response;
} */
 $number = $_POST['mobileNumber'];
 $name = $_POST['name'];
 
  /* $number = '9821785726';
 $name = 'PRAVIN'; */
  $remark = ucfirst($name). " (".$number.") has enquired about your services";
/* echo 'https://alerts.solutionsinfini.com/api/v4/?api_key=Ac797fa388xxxxxxxxxxxxxxxxxxxxxxxxx&method=sms&sender=SUPERD&message=hi&to';
$ample = 'http://alerts.solutionsinfini.com/api/v3/index.php?method=sms&api_key=Ac797fa388f3d813c7590337ebacec9a1&to=9623909989&sender=SUPERD&message=Hello, You have an Appointment for Hospital Suchak Hospital for Patient aatish g rathod on 2018-06-19 and 13:00:00 PM&unicode=1'; */

function sendSMS($number,$remark)
{
	$usernameSmsApi = 'superdoctor';
	$passwordSmsApi = '2009@Shinchan';
	
	$numbersSmsApi = '9820144713';
	$apiKey = 'Ac797fa388f3d813c7590337ebacec9a1';
	$method = 'sms';
	
	//$senderId = 'BLKSMS';
	$messageSmsApi = rawurlencode($remark);
	
	$senderId = 'SUPERD';
	//$data = array('user' => $usernameSmsApi, 'password' => $passwordSmsApi, 'msisdn' => $numbersSmsApi, "sid" => $senderId, "msg" => $remark, "fl" => 0,"gwid"=>2);
	
	$data = array('method'=>$method,'api_key'=>$apiKey, 'to'=>$numbersSmsApi, 'sender'=>$senderId, 'message'=>$messageSmsApi,'unicode'=>'1');
	
	//$senderId = 'BLKSMS';
	//$data = array('user' => $usernameSmsApi, 'password' => $passwordSmsApi, 'msisdn' => $numbersSmsApi, "sid" => $senderId, "msg" => $remark, "fl" => 1); 
	
	$ch = curl_init('http://alerts.solutionsinfini.com/api/v3/index.php?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($ch);
	curl_close($ch);
	return $response;
} 
if(isset( $_POST['mobileNumber']) &&  $_POST['mobileNumber'] !='')
{
	$resposne = sendSMS($number,$remark);
}
 /* echo "<PRE>";
	print_r($resposne);
	echo "111";
echo "</PRE>"; */
?>