<?php
    error_reporting(E_ALL); 
    ini_set('display_errors', 1);
    
    // include 'connection.php';
    function OpenCon()
     {
     $dbhost = "localhost";
     $dbuser = "fratnowadmin_orderform_user";
     $dbpass = "iY]_B_.@HPM@";
     $db = "fratnowadmin_oderformdetails";
     $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
     
     return $conn;
     }
     
    function CloseCon($conn)
     {
     $conn -> close();
     }
       
    
    //phpinfo();
    //if "email" variable is filled out, send email
    
    //Email information
    //$admin_email = "info@iliadneuro.com";
    $admin_email = "fratkit@iliadneuro.com";
    $token_key = "CSJN4OH0JRR7R";
    //$admin_email = "ranjith.shankar@kosoft.co";
    //$subject = $_POST['subject'];
    // $comment = $_POST['comment'];
    $result="";
  
    // $author = trim($_POST['author']);
    $author = trim($_POST['author']);
    $firstname = trim($_POST['firstname']);
    $lastname = trim($_POST['lastname']);
    $organization = trim($_POST['organization']);
    $address = trim($_POST['address']);
    $email = trim($_POST['email']);
    $city = trim($_POST['city']);
    $state = trim($_POST['state']);
    $zipcode = trim($_POST['zipcode']);
    $country = trim($_POST['country']);
    $telephone = trim($_POST['telephone']);
    $testkits = trim($_POST['testkits']);
    // $message = trim($_POST['message']);
    $channel = "Fratnow";

    $data = array("FirstName" => $firstname,
          "LastName" => $lastname,
          "OrgName" => $organization,
          "Address" => $address,
          "City" => $city,
          "State" => $state,
          "Zip" => $zipcode,
          "Email" => $email,
          "NoOfKits" => $testkits,
          "RequesterType" => $author,
          "Country" => $country,
          "Telephone" => $telephone,
          "RequestChannel" => $channel,
          "AuthenticateToken" => $token_key);

    $data_string = json_encode($data);
    //print_r($data);
    //print_r($data_string);
    //exit();
    
    if (!empty($firstname) && !empty($lastname)){
        $ch = curl_init('https://api.kolims.com/api/Kitorder/');
        // $ch = curl_init('https://api-v1.kolims.com/api/Kitorder/');
    
        // if (!$ch) {
        //   die("Couldn't initialize a cURL handle");
        //           }
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'Content-Length: '.strlen($data_string)));
        curl_setopt($ch, CURLOPT_TIMEOUT, 50);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 50);
        $result = curl_exec($ch);
        $http = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        //  if (!curl_errno($ch)) {
        //  $info = curl_getinfo($ch);
        //  echo $info['http_code'];
        // } 
        curl_close($ch);
    }
    

    $conn = OpenCon();
    
    $sql = "INSERT INTO order_details_new(author, firstname, lastname, organization, address, city, state, zipcode, country, telephone, email, testkits) VALUES ('$author','$firstname','$lastname','$organization','$address','$city','$state','$zipcode','$country','$telephone','$email','$testkits')";
    $conn->query($sql);
    
    CloseCon($conn);

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require 'vendor/autoload.php';
    $mail = new PHPMailer(true);
    $dtnow = date("l jS \of F Y h:i:s A");
    if(!empty($author) && !empty($firstname) && !empty($lastname) && !empty($organization) && !empty($address) && !empty($email) && !empty($city) && !empty($state) && !empty($zipcode) && !empty($country) && !empty($telephone) && !empty($testkits))
    {
   
        $msg = '<div style="margin:0;padding:0;background-color:#cccccc" bgcolor="#CCCCCC" marginwidth="0" marginheight="0">
        <table border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC">
            <tbody>
                <tr>
                    <td
                        style="margin-top:10px;padding-top:10px;padding-left:10px;padding-right:10px;text-align:center;font-family:Helvetica,sans-serif">
                        <table border="0" width="600" cellpadding="0" cellspacing="0" align="center">
                            <tbody>
                                <tr>
                                    <td
                                        style="padding-left:30px;padding-right:30px;font-family:Helvetica,sans-serif;text-align:left;background-color:#ffffff;border-top-left-radius:10px;border-top-right-radius:10px">
                                        <table border="0" cellspacing="0" cellpadding="0" align="center">
                                            <tbody>
                                                <tr>
                                                    <td
                                                        style="border-collapse:collapse;padding-top:30px;padding-bottom:10px">
                                                        <br><br> You have received a kit order .<br><br>
                                                        Mr./Mrs.<b>'. $firstname .' '. $lastname .'</b> has ordered <b>'. $testkits .'</b> test kits from <b>'. $channel .'</b> website on <b>'. $dtnow .'</b>. <br> <br>
                                                        <b>Contact Details:</b> <br> <br>Author&nbsp;&nbsp;: <b>'. $author .'</b><br> Name&nbsp;&nbsp;: <b>'. $firstname .' '. $lastname .'</b> <br> Email&nbsp;&nbsp;: <b>'. $email .'</b>
                                                        <br> Physicians Office/Organization&nbsp;: <b>'. $organization .'</b>
                                                        <br> Phone&nbsp;: <b>'. $telephone .'</b> <br> Address&nbsp;:
                                                        <b>'. $address .',</br>'. $city .',</br>'. $state .',</br>'. $zipcode .',</br>'. $country .'.</b> 
                                                        .
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-collapse:collapse;padding-top:30px;padding-bottom:10px">
                                                        <b>Order Details</b><br /><br />
                                                        No. Of Kits: <b>'. $testkits .'</b> <br> <br>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <table border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC">
            <tbody>
                <tr>
                    <td align="center" style="padding-bottom:10px;padding-left:10px;padding-right:10px">
                        <table border="0" width="600" cellpadding="0" cellspacing="0">
                            <tbody>
                                <tr>
                                    <td style="padding-left:30px;padding-right:30px;padding-top:20px;padding-bottom:20px;font-family:Helvetica,sans-serif;color:#f1f1f1;background-color:#efefef;border-bottom-left-radius:10px;border-bottom-right-radius:10px"
                                        bgcolor="#efefef">
                                        <table border="0" cellpadding="0" cellspacing="0">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div
                                                            style="font-family:Helvetica,Arial,sans-serif;font-size:11px;color:#555555">
                                                            If you have questions, visit <a
                                                                href="https://www.kolims.com/support/"
                                                                target="_blank">kolims.com/support</a>. </div>
                                                    </td>
                                                    <td> <img src="http://v1.kolims.com/eres/KoLIMSlogo.png" class="CToWUd">
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>';
        // $msg = wordwrap($msg);
        // $msg=$firstname;

        $mail->SMTPDebug = 0;
        $mail->isSMTP();   
        $mail->Host = 'smtp.office365.com';
        $mail->SMTPAuth = true; 
        $mail->Username = 'No-ReplyFratnow@religendx.com';
        $mail->Password = '@!ztC0448L&w';
        $mail->SMTPSecure = 'STARTTLS / TLS';
        $mail->Port = '587'; 
        $mail->setFrom('no-reply@fratnow.com', 'Fratnow');
        
        $mail->addAddress('info@fratnow.com');
        $mail->addCC('dschrader@vascularstrategy.com');
        $mail->addCC('vijayprabhakar.s@kosoft.co');
        //$mail->addCC('raj.ccomdigital@gmail.com');

        $mail->isHTML(true);
        $mail->Subject = 'Order a Kit';
        $mail->Body    = $msg;
        if($mail->send())
        {
            $mail->ClearAllRecipients();
            $mail->isSMTP();   
            $mail->Host = 'smtp.office365.com';
            $mail->SMTPAuth = true; 
            $mail->Username = 'No-ReplyFratnow@religendx.com';
            $mail->Password = '@!ztC0448L&w';
            $mail->SMTPSecure = 'STARTTLS / TLS';
            $mail->Port = '587'; 
            $mail->setFrom('no-reply@fratnow.com', 'Fratnow');
            
            $mail->addAddress($email);
                       
            $mail->addCC('vijayprabhakar.s@kosoft.co');
            $mail->isHTML(true);
            $mail->Subject = 'Order Confirmation';
            $msg1 = '<div style="margin:0;padding:0;background-color:#cccccc" bgcolor="#CCCCCC" marginwidth="0" marginheight="0">
        <table border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC">
            <tbody>
                <tr>
                    <td
                        style="margin-top:10px;padding-top:10px;padding-left:10px;padding-right:10px;text-align:center;font-family:Helvetica,sans-serif">
                        <table border="0" width="600" cellpadding="0" cellspacing="0" align="center">
                            <tbody>
                                <tr>
                                    <td
                                        style="padding-left:30px;padding-right:30px;font-family:Helvetica,sans-serif;text-align:left;background-color:#ffffff;border-top-left-radius:10px;border-top-right-radius:10px">
                                        <table border="0" cellspacing="0" cellpadding="0" align="center">
                                            <tbody>
                                                <tr>
                                                    <td
                                                        style="border-collapse:collapse;padding-top:30px;padding-bottom:10px">
                                                        Hi <b>'. $firstname .' '. $lastname .'</b>, <br> <br> Your Order for the kit has been
                                                        placed successfully.<br /><br /> <b>Order Details</b><br /><br />
                                                        No. Of Kits: <b>'. $testkits .'</b> <br> <br>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="border-collapse:collapse;padding-top:10px;padding-bottom:30px">
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <table border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC">
            <tbody>
                <tr>
                    <td align="center" style="padding-bottom:10px;padding-left:10px;padding-right:10px">
                        <table border="0" width="600" cellpadding="0" cellspacing="0">
                            <tbody>
                                <tr>
                                    <td style="padding-left:30px;padding-right:30px;padding-top:20px;padding-bottom:20px;font-family:Helvetica,sans-serif;color:#f1f1f1;background-color:#efefef;border-bottom-left-radius:10px;border-bottom-right-radius:10px"
                                        bgcolor="#efefef">
                                        <table border="0" cellpadding="0" cellspacing="0">
                                            <tbody>
                                                <tr> </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>';
            $mail->Body    = $msg1;
            $mail->send();
            
            $result1 ="Email is Sent. order process is completed";
        }
        else
        {
            $result1 = "Email is not sent. order process is not completed";
        }

    }
    else
    {
        $result1 ="Incorrect Data. order process is not completed ";
    }
    echo json_encode( $result1 );