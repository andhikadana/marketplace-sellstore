<?php
$name = $_POST['nama'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$telephone = $_POST['telephone'];
$message = $_POST['message'];

$email_message = "

Name: ".$name."
Email: ".$email."
Subject: ".$subject."
Telephone: ".$telephone."
Message: ".$message."

";

mail ("sellstore@gmail.com" , "New Message", $email_message);
?>