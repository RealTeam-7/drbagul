<?php 
if(isset($_POST['sendmessage']))
{
	session_start();
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$number = $_POST['number'];
	$doa = $_POST['doa'];
	
	
	$Subject = "Appointment request on ".date("d-M-Y");
	$ToEmail = 'info@drbagul.in';
	$ToEmail1 = '';
	$frromail = 'donotreplay@drbagul.in';
	$recipients = array('info@drbagul.in','pravin.ktclear@gmail.com');

	 $body.='<div style="width:600px; border: 1px solid #d1d1d1; min-height:125px; height:auto; margin:0 auto; position:relative;font-size:12px;font-family:Segoe UI,Arial,Helvetica,sans-serif;">
					<table width="100%" style="border-bottom:5px solid #9e1935;">
						<tr>
							<td><img src="http://www.drbagul.in/images/logo.png" width="240px;"/ ></td>
							<td style="font-size: 13px;color: #14130e;padding: 5px;vertical-align: top;text-align: right;font-family: Segoe UI,Arial,Helvetica,sans-serif;">
							</td>
						</tr>
					</table>
					<table width="100%">
						<tr>
							<td style="padding: 10px; font-size: 15px;color: #333333;font-weight: bold;font-family: Segoe UI,Arial,Helvetica,sans-serif;">
							Hello, Dr. ABHIJIT BAGUL You have new appointment request from,
							<br/>
							Name : '.$name.'<br/>
							Email : '.$email.' <br/>
							Contact  : '.$number.' <br/>
						
							Appointment date  : '.$doa.' <br/>
							Message : '.$message.'<br/>
						</tr>
					</table>
					
				
					<table width="600" align="center">
						<tr>
						  <td style="font-weight:100;color:414141;padding:10px;font-size:14px;font-family: Segoe UI,Arial,Helvetica,sans-serif;">Regards,<br>
							<span style="font-weight:bold;font-size:14px;color:#202022;font-family: Segoe UI,Arial,Helvetica,sans-serif;">SUPERDR TEAM</span></td>
						</tr>
					</table>
				</div>';
				
				/* $Headers  = "MIME-Version: 1.0\n";
				$Headers .= "Content-type: text/html; charset=iso-8859-1\n";
				$Headers .= "From: ".$company_name." <".$donotreply.">\n";
				$Headers .= "Reply-To: ".$donotreply."\n";
				$Headers .= "Reply-To: ".$ToEmail1."\n";
				$Headers .= "X-Sender: <".$donotreply.">\n";
				$Headers .= "X-Mailer: PHP\n"; 
				$Headers .= "X-Priority: 1\n"; 
				$Headers .= "Return-Path: <".$donotreply.">\n";		 */	
				//echo $body;
					include('mail.php');
					$_SESSION['msg' ] = 'Thank You for sending Message. Our consultant will get back with you.';
					echo "<script>window.location='thankyou.php';</script>";
					exit;
	
}
?>