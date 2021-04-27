<?php

if (isset($_POST['Send Message'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];

    $mailTo = "wubenhy@outlook.com";
    $headers = "From: ".$mailFrom;
    $txt = "you have recieved an email from ".$name.".\n\n".$message;


    mail($mailTo, $subject, $txt, $headers);
    header("location: index.php?mailsend");
}