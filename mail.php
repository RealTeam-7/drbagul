<?php 
require_once('PHPMailer/class.phpmailer.php');
$mail = new PHPMailer(true);
$mail->IsSMTP();

try {
  $mail->Host       = "mail.drbagul.in"; // SMTP server
  $mail->SMTPDebug  = false;                     // enables SMTP debug information (for testing)
  $mail->SMTPAuth   = true;                  // enable SMTP authentication
  $mail->Host       = "mail.drbagul.in"; // sets the SMTP server
  $mail->Port       = 25;                    // set the SMTP port for the GMAIL server
  $mail->Username   = "donotreplay@drbagul.in"; // SMTP account username
  $mail->Password   = "drbagul@123";        // SMTP account password
  foreach($recipients as $recipientsVal)
  {
	$mail->AddAddress($recipientsVal);  
  }
  $mail->AddBCC("pravin.ktclear@gmail.com", "Pravin");
  $mail->AddBCC('afiaafzalshaikh@gmail.com','AFIA AFZAL SHAIKH');
   
  $mail->SetFrom($frromail, 'Dr. Bagul');
 // $mail->AddReplyTo($supportMail, 'Support Annakirana');
  $mail->Subject = $Subject;
  $mail->AltBody = 'To view the message, please use an HTML compatible email viewer!'; // optional - MsgHTML will create an alternate automatically
  $mail->MsgHTML($body);
  /* $mail->AddAttachment('images/phpmailer.gif');      // attachment
  $mail->AddAttachment('images/phpmailer_mini.gif'); // attachment */
  $mail->Send();
  // echo "Message Sent OK</p>\n";
} catch (phpmailerException $e) {
  // echo $e->errorMessage(); //Pretty error messages from PHPMailer
} catch (Exception $e) {
  // echo $e->getMessage(); //Boring error messages from anything else!
}

?>