<?php
require_once('php/send_code.php');
// echo "here";
if (isset($_POST['company']) && isset($_POST['email'])) {
    // echo "Sent";

    $receiver = $_POST['email'];
    $company = $_POST['company'];
    // echo $receiver;
    sendEmail($receiver, $company);
}

include('pages/header.php');
// include('pages/header.php');
// if (isset($_SESSION['name']) && isset($_SESSION['phone'])) {
include('pages/email_page.php');
// } else {
//     include('pages/login.php');
// }

include('pages/footer.php');
