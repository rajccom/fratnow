<?php
require("../ajax/src/PHPMailer.php");
require("../ajax/src/SMTP.php");
require("../ajax/src/Exception.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$userIP = $_SERVER["REMOTE_ADDR"];
$recaptchaResponse = $_POST['g-recaptcha-response'];
$secretKey = "6LdvJ8soAAAAACshBK0JgBs02VaiP9huqhQpuAba";
$request = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$recaptchaResponse&remoteip=$userIP");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  if(isset($_POST['submit']))
  {
     //include "database.php";
    //  $conn = mysqli_connect("localhost:3306", "incomrut_root", "9oMF5TnbxYzvtOVL", "incomrut_ivas");
    // $conn = mysqli_connect("localhost", "ivas_homes_uat", "6rl9d3zxwuqb", "ivas_homes_uat");

     $first_name = strip_tags(addslashes($_POST['first_name']));
     $last_name = strip_tags(addslashes($_POST['last_name']));
     $email = strip_tags(addslashes($_POST['email']));
     $company = strip_tags(addslashes($_POST['company']));
     $inquiry = strip_tags(addslashes($_POST['inquiry']));
     $country = strip_tags(addslashes($_POST['country']));
     $msg = strip_tags(addslashes($_POST['msg']));
     
    //  // Set a cookie with the timestamp of the contact event
    //  setcookie('contact_timestamp', time(), time()+3600); // expire in 1 hour

    //  // Get UTM parameters from referring URL
    //  $ref_url = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
    //  $ref_parts = parse_url($ref_url);
    //  parse_str($ref_parts['query'], $ref_query);
     
    //  $utm_source = isset($ref_query['utm_source']) ? strip_tags(addslashes($ref_query['utm_source'])) : '';
    //  $utm_medium = isset($ref_query['utm_medium']) ? strip_tags(addslashes($ref_query['utm_medium'])) : '';
    //  $utm_campaign = isset($ref_query['utm_campaign']) ? strip_tags(addslashes($ref_query['utm_campaign'])) : '';
    //  $utm_term = isset($ref_query['utm_term']) ? strip_tags(addslashes($ref_query['utm_term'])) : '';
    //  $utm_content = isset($ref_query['utm_content']) ? strip_tags(addslashes($ref_query['utm_content'])) : '';
             
    // mysqli_query($conn, "INSERT INTO contact_us (first_name, last_name, email, company, inquiry, country, msg)
    //          VALUES ('$first_name', '$last_name', '$email', '$company', '$inquiry', '$country', '$msg')");
	  
    // mysqli_query($conn, "INSERT INTO leads (sname, phone, email, city, utm_source, utm_medium, utm_campaign, utm_term, utm_content, timestamp) VALUES('" . $_POST['sname'] . "','" . $_POST['phone'] . "','" . $_POST['email'] . "','" . $_POST['city'] . "','" . $_GET['utm_source'] . "','" . $_GET['utm_medium'] . "','" . $_GET['utm_campaign'] . "','" . $_GET['utm_term'] . "','" . $_GET['utm_content'] . "')");

     //echo "hello";exit;

     try {

		    $ntoken = time();
		    $mail = new PHPMailer(true);
            $mail->isSMTP();
            //Enable SMTP debugging
            // 0 = off (for production use)
            // 1 = client messages
            // 2 = client and server messages
            $mail->SMTPDebug = 2;
            //Ask for HTML-friendly debug output
            $mail->Debugoutput = 'html';
            //Set the hostname of the mail server
            $mail->Host = 'smtp.office365.com';
            // use
            // $mail->Host = gethostbyname('smtp.gmail.com');
            // if your network does not support SMTP over IPv6
            //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
            $mail->Port = 587;
            //Set the encryption system to use - ssl (deprecated) or tls
            $mail->SMTPSecure = 'tls';
            //Whether to use SMTP authentication
            $mail->SMTPAuth = true;
            //Username to use for SMTP authentication - use full email address for gmail
            $mail->Username = 'FratnowWebsite@religendx.com';
            //Password to use for SMTP authentication
            $mail->Password = 'e$g<$032Rm@U';

        $mail->smtpConnect(
            array(
                "tls" => array(
                    "verify_peer" => false,
                    "verify_peer_name" => false,
                    "allow_self_signed" => true
                )
            )
        );



        /*
        ########################################
        ╔═╗┌┬┐┌─┐┬┬
        ║╣ │││├─┤││  - Settings  Ends here
        ╚═╝┴ ┴┴ ┴┴┴─┘
        ########################################
        */
        //$getemail = $to;$getname=$name;$message = $mge;
        //Set who the message is to be sent from

        $mail->setFrom("contact@fratnow.com", "Contact | Fratnow ");
        //Set an alternative reply-to address
        //$mail->addBCC("raj.ccomdigital@gmail.com","raj");

        //$mail->addAddress("raj.ccomdigital@gmail.com", "raj");
		//$mail->addAddress("neha.ccomdigital@gmail.com", "neha");
	    //$mail->addAddress("admin@rahejaparkwest.com", "Contact | raheja");
      $mail->addAddress($email, $first_name . ' ' . $last_name);

        //Set the subject line
        $mail->Subject = 'Thank You for Contacting us | '.$first_name.' '.$last_name;
        //Read an HTML message body from an external file, convert referenced images to embedded,
        //convert HTML into a basic plain-text alternative body


        $mail->Body    = '<div style=" width:94%; max-width:800px; margin:0 auto; border:1px solid #efefef;">
        <div style=" width:90%; padding:10px 5%; background:#fff; text-align:left;"><img src="https://staging.ccomdigital.in/client/fratnow/staging/assets/img/logo.png" style="width: "></div>
        <div style="font-size:13px; color:#000; text-align:left; line-height:20px; background:#fff; width: 90%; padding:5%; font-family:Arial, Helvetica, sans-serif;">
          <p>Dear '.$first_name.' '.$last_name.',</p>
        <p>Thank you for taking the time to fill out the form. We value your interest in our products. Our team will get in touch with you shortly to understand your requirements.</p>
        <br />
      <p>Regards,<br />Fratnow/p>
     </div>
   </div>';
					
        //Replace the plain text body with one created manually
        $mail->AltBody = 'To view the message, please use an HTML compatible email viewer!';
        //Attach an image file
        //$mail->addAttachment('images/phpmailer_mini.png');
		//$mail->addAttachment('../staging/images/Raheja_Brochure.pdf');
		//echo '<pre>';print_r($mail);exit;
        //send the message, check for errors
		
	   
        if ($mail->send()) {
          $send = new PHPMailer(true);
          $send->isSMTP();
          //Enable SMTP debugging
          // 0 = off (for production use)
          // 1 = client messages
          // 2 = client and server messages
          $send->SMTPDebug = 2;
          //Ask for HTML-friendly debug output
          $send->Debugoutput = 'html';
          //Set the hostname of the mail server
          $send->Host = 'smtp.office365.com';
          // use
          // $mail->Host = gethostbyname('smtp.gmail.com');
          // if your network does not support SMTP over IPv6
          //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
          $send->Port = 587;
          //Set the encryption system to use - ssl (deprecated) or tls
          $send->SMTPSecure = 'tls';
          //Whether to use SMTP authentication
          $send->SMTPAuth = true;
          //Username to use for SMTP authentication - use full email address for gmail
          $send->Username = 'FratnowWebsite@religendx.com';
          //Password to use for SMTP authentication
          $send->Password = 'e$g<$032Rm@U';
  
          $send->smtpConnect(
              array(
                  "tls" => array(
                      "verify_peer" => false,
                      "verify_peer_name" => false,
                      "allow_self_signed" => true
                  )
              )
          );



        /*
        ########################################
        ╔═╗┌┬┐┌─┐┬┬
        ║╣ │││├─┤││  - Settings  Ends here
        ╚═╝┴ ┴┴ ┴┴┴─┘
        ########################################
        */
        //$getemail = $to;$getname=$name;$message = $mge;
        //Set who the message is to be sent from

        $send->setFrom("contact@fratnow.com", "Contact | Fratnow");
        //Set an alternative reply-to address
        //$mail->addBCC("raj.ccomdigital@gmail.com","raj");

        $send->addAddress("raj.ccomdigital@gmail.com", "raj");
		//$send->addAddress("kartik.ccomdigital@gmail.com", "kartik");
	    //$mail->addAddress("admin@rahejaparkwest.com", "Contact | raheja");
		//$mail->addAddress($email, $name);

        //Set the subject line
        $send->Subject = 'New Lead from Contact Us Enquiry Form | Admin ' ;
        //Read an HTML message body from an external file, convert referenced images to embedded,
        //convert HTML into a basic plain-text alternative body


        $send->Body    = '<div style=" width:94%; max-width:800px; margin:0 auto; border:1px solid #efefef;">
        <div style=" width:90%; padding:10px 5%; background:#000; text-align:left;"><img src="https://staging.ccomdigital.in/client/fratnow/staging/assets/img/logo.png" style="width: "></div>
        <div style="font-size:13px; color:#000; text-align:left; line-height:20px; background:#fff; width: 90%; padding:5%; font-family:Arial, Helvetica, sans-serif;">
        <h2>Contact Us Enquiry</h2>
        <br />
        <table width="100%" border="1" cellspacing="0" cellpadding="5">
          <tbody>
            <tr>
              <td width="300">First name</td>
              <td>'.$first_name.'</td>
            </tr>
        <tr>
              <td width="300">Last name </td>
              <td>'.$last_name.'</td>
            </tr>
            <tr>
              <td width="300">Email id</td>
              <td>'.$email.'</td>
            </tr>
            <tr>
              <td width="300">Company</td>
              <td>'.$company.'</td>
            </tr>
            <tr>
              <td width="300">Types of inquiry</td>
              <td>'.$inquiry.'</td>
            </tr>
            <tr>
              <td width="300">Country</td>
              <td>'.$country.'</td>
            </tr>
            <tr>
              <td width="300">Message</td>
              <td>'.$msg.'</td>
            </tr>
            
          </tbody>
        </table>
  
        </div>
        <div style="font-size:10px; color:#fff; text-align:left; line-height:20px; background:#1c1c1c; width: 90%; padding: 5px 5%; font-family:Arial, Helvetica, sans-serif;">&copy; Fratnow. All rights reserved.</div>
        </div>';
					
        //Replace the plain text body with one created manually
        $send->AltBody = 'To view the message, please use an HTML compatible email viewer!';
        //Attach an image file
        //$mail->addAttachment('images/phpmailer_mini.png');
		//$mail->addAttachment('../staging/images/Raheja_Brochure.pdf');
		//echo '<pre>';print_r($mail);exit;
        //send the message, check for errors

         if (!$send->send()) {

            //echo "Mailer Error: " . $mail->ErrorInfo;
            $data = array('logged'=>false,'mg'=>'Not sent','othermg'=>"Mailer Error: " . $send->ErrorInfo,'token' => $ntoken);
        } else {
            header("Location:thank-you.php");
			 //$data = array('logged'=>true,'mg'=>'Sent','token' => $ntoken);
        }
        } else {
			echo "Mailer Error: " . $send->ErrorInfo;
		}
        
    }
    catch (Exception $e) {
        //$data = array("logged" => false, 'message' => $e,);
    }
	//echo '<pre>';print_r($data);exit;
    //echo json_encode($data,true);exit;
	}
}
?>