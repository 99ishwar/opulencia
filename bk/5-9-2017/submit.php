<?php

			$ip = $_SERVER["REMOTE_ADDR"];
			if(isset($_POST['submit']))
{
	 
$useragent = $_SERVER ['HTTP_USER_AGENT'];
   



//get pg referer if there is one
    if (isset($_SERVER['HTTP_REFERER'])) {
    $ref_url = $_SERVER['HTTP_REFERER']; //get referrer
    }else{
    $ref_url = 'No referrer set'; // show failure message
    }//end else no referer set






	    $rel                = $_REQUEST['referring'];
        $ip                 = $_REQUEST['useragent'];
		$name				= $_REQUEST['name'];
		$email				= $_REQUEST['email'];
		$phone				= $_REQUEST['phone'];
		$purpose			= $_REQUEST['purpose'];
		$message			= $_REQUEST['message'];
		$apartments			= $_REQUEST['apartments'];
		$city			    = $_REQUEST['city'];
		$occupation			= $_REQUEST['occupation'];
		$to     	        = "info@propertyatdoorstep.com"; // mail id to send information
		$from               = "info@propertyatdoorstep.com"; 
		$subject  	        = "Prospective Leads From Sandwoods Opulencia";
		$msg = $name.".".$email.".".$purpose;
		//$msg ="withoutfieldmessag";
/***************************************** Message goes in the Mail **************************************/
   
	
	
	
	$message="
	
Here is the query information submitted by user:


Name   		         : $name
Message              : $message
Phone                : $phone
Email                : $email
IP                   : $useragent
Referring            : $ref_url



";

	
	$header="From:$email";
	$mail=@mail($to,$subject,$message,$header);


	
		//redirect to the 'thank you' page
	header('Location: contact-form-thank-you.html');
	
	
	
	/***************************************** Message goes in the Mail **************************************/

	
	
	/********************* Client Message ***************************************/
	
	/* Prepare autoresponder subject */
$respond_subject = "Message from Sandwoods Opulencia";

/* Prepare autoresponder message */
$respond_message = "


Dear $name , 

Thanks for being our awesome $name! We have received your message and would like to thank you for writing to us. If your inquiry is urgent, please use the telephone number listed below, or +91- 99151 44888 to talk to one of our staff members. 

Otherwise, we will reply by email shortly. Talk to you soon. 

Amith Goyal

Address :- 

# 723/6 , SBP South City ,VIP Road Zirakpur -140603 ( Punjab ) 

# 501/ N , Amarpali Zodica , Sector-120,Noida -201307 ( Uttar Pradesh ) 


Email Id    - info@propertyatdoorstep.com 

Mobile      - 9915144888  // 9888661319

Website   - www.propertyatdoorstep.com
Disclaimer: The Information contained and transmitted by this E-mail along with attachments, if any, may contain privileged, proprietary, and confidential material and is intended solely for the use of the individual or entity to which it is addressed. If you have erroneously received this message, please delete it immediately and notify the sender. If you are not the intended recipient, you are further notified that any use, distribution, transmission, printing, copying or dissemination of this information in any manner is strictly prohibited. The opinion expressed in this mail are those of the sender, and not necessarily reflect those of Propertyatdoorstep.com brand of Online media business solutions.



";

$header="From:$from"; 

	$mail=@mail($email,$respond_subject, $respond_message,$header );
	
	
	$header="From:$from";

	
	/*************************** client Message ********************************/
	
	
	
	
	

/*-------------------------------------------- TO USER ---------------------------------------------------*/

//echo $url;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$curl_scraped_page = curl_exec($ch);
curl_close($ch);
/*---------------------------------------------------------------------------------------------------------*/
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Contact form handler</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<!-- This page is displayed only if there is some error -->
<?php
echo nl2br($errors);
?>

</body>
</html>