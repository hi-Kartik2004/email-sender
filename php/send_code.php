<?php
error_reporting(0);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

function sendEmail($receiver, $company)
{
    global $mail;
    // $code = rand(1000,9999);\
    $mail->SMTPDebug = false;
    $companyName = $company;
    // if (isset($_SESSION['name']) && isset($_SESSION['phone'])) {
        

    $senderName = "Kartikeya Saini";    // Your name to be displayed in the email.
    $senderPhone = "63600 06359";       // Your phone number to be displayed in the email.



    // } else {
    //     header("location: ../?login");
    // }
    $my_path = "new.pdf";
    $subject = "Request for Sponsorship towards IMPETUS 23.0";
    try {
        //Server settings
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';        //gmail             //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = '';      //Gmail userid              //SMTP username
        $mail->Password   = '';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('', 'IEEE UVCE');
        // $mail->addAddress('kud', 'Joe User');     //Add a recipient
        $mail->addAddress($receiver);               //Name is optional
        $mail->addBCC("mohithvarmavs@ieee.org", "Mohith");
        $mail->addBCC("Kruthin@ieee.org", "Kruthin");
        $mail->addBCC("kavyabhat@ieee.org", "Kavya");
        $mail->addBCC("nilkantgunjote@ieee.org", "Nilkant");
        $mail->addBCC("manjeshpatil18@ieee.org", "Manjesh Patil");
        // $mail->addBCC("bccaddress@ccdomain.com", "Some BCC Name");

        //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mail->AddAttachment($_SERVER['DOCUMENT_ROOT'] . '/email_sender/new.pdf');   //Optional name

        $mail->AddAttachment("new.pdf", "IMPETUS 23.0 Brochure");

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = "Greetings from IEEE UVCE!
        <br> <br>

    We are writing to extend an invitation for <b>" . $companyName . "</b> to sponsor the <b>23rd Annual National Level Technical Extravaganza, IMPETUS 23.0, organized by IEEE UVCE.</b> The fest is scheduled to take place in 1st week of April and is recognized for its technological innovation and improvement of technical skills among students.
    <br> <br>

    This year, <b> IMPETUS 23.0 </b> is organized with the theme of <b> GreenShift- Harnessing Sustainability, Fostering Initiatives </b> because <b> it emphasizes the importance of taking action to protect the environment, reinforces the need for increased sustainability awareness and encourages attendees to think about how they can contribute to a more sustainable future.</b>

    <br> <br>
    
    The fest will comprise a number of challenges, events and workshops centered around this theme that will challenge students to enhance their technical expertise. We are proud to announce that this iteration of the fest will be conducted in hybrid mode.

    <br> <br>
    
    <b> As a sponsor of our fest, your company will have the opportunity to bridge the gap between students and the industry. </b> You will receive benefits such as the inclusion of your <b> company's logo on T-shirts, posters, certificates, website, and other marketing materials.</b> We will also provide an opportunity for you to sponsor specific events within the fest as desired.

    <br> <br>
    
    The attached sponsorship brochure provides more details about the fest and sponsorship opportunities. If you have any questions or require further clarification, please do not hesitate to reach out to us.

    <br> <br>
    
    We look forward for a positive response and hope to collaborate with you on this exciting initiative.

    <br> <br>
    
    Best regards,

    <br> <br>
    
    " . $senderName . " <br>
    Team IEEE UVCE <br>
    +91 " . $senderPhone;
        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';


        if ($mail->send()) {
            // $mail->SMTPDebug  = 0;
            // $mail->send();
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Message has been sent!</strong> to ' . $receiver . ' of ' . $company . '
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
            // echo 'Message has been sent to' . $receiver . " of " . $company;
        }
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

    return 0;
}

// sendVerificationCode('kudlu2004@gmail.com');
