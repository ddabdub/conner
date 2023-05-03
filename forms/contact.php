<?php
require("../djd_functions.php");

// Replace ddabdub@uci.edu with your real receiving email address
$receiving_email_address = 'dahmc@uci.edu';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  if (isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message']) && isset($_POST['name'])) {

    $subject = "CD webpage: " . $_POST['subject'];
    $msg = $_POST['message'] . "\n\n" . $_POST['name'];
    $headers = "From: " . $_POST['email'];

    send_email($receiving_email_address, $subject, $msg, $headers);
  }
}

header("Location: ../sent-email.html");
