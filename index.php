<?php
require_once('php/send_code.php');
session_start();

// Sending email
if (isset($_POST['company']) && isset($_POST['email'])  && isset($_SESSION['senderPassword'])  && isset($_SESSION['senderPhone'])  && isset($_SESSION['senderEmail'])  && isset($_SESSION['senderName'])) {
    // echo "Sent";

    $receiver = $_POST['email'];
    $company = $_POST['company'];
    // echo $receiver;
    sendEmail($receiver, $company);
}

// Customization
if (isset($_POST['senderName']) && isset($_POST['senderPassword'])) {
    $_SESSION['senderName'] = $_POST['senderName'];
    $_SESSION['senderPassword'] = $_POST['senderPassword'];
    $_SESSION['senderPhone'] = $_POST['senderPhone'];
    $_SESSION['senderEmail'] = $_POST['senderEmail'];
    // print_r($_SESSION);

    // header("location: ?auth=1");
}



//logout
if (isset($_GET['logout'])) {
    unset($_SESSION);
    session_destroy();
    header("location: ./");
}

//setting up defaults
if (isset($_GET['auth']) && $_GET['auth'] == 0) {
    $_SESSION['senderName'] =  "Kartikeya Saini";  // default name to be displayed in the email.
    $_SESSION['senderPhone'] =   "";   // default phone number to be displayed in the email.
    $_SESSION['senderPassword'] = ""; //default password
    $_SESSION['senderEmail'] = ""; // default sender email
}


// Banner
if (isset($_SESSION['senderName']) && ($_SESSION['senderName'] == "Kartikeya Saini") && $_SESSION['senderEmail'] == "hi.kartikeyasaini@gmail.com") {
    echo '<div class="alert alert-warning alert-dismissible fade show" style="text-align:center"role="alert">
            <strong>You are using Kartikeya' . "'s Email id" . '!</strong> so ' . "you will not be able to receive replies!" . '
          </div>';
} else if (isset($_SESSION['senderName'])) {
    echo '<div class="alert alert-warning alert-dismissible fade show" style="text-align:center"role="alert">
    <strong>You are using ' . $_SESSION['senderName'] . "'s Email id" . '!</strong> ' . "you will be able to receive replies in your inbox!" . '
  </div>';
}

include('pages/header.php');

if (isset($_SESSION['senderName']) && isset($_SESSION['senderPhone'])  && isset($_SESSION['senderEmail'])  && isset($_SESSION['senderPassword'])) {
    // echo $_SESSION['senderEmail'];
    include('pages/email_page.php');
} else {
    include('pages/login.php');
}

include('pages/footer.php');
