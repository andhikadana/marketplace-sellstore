<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_message = "

Name: ".$name."
Email: ".$email."
Subject: ".$subject."
Message: ".$message."

";

mail ("sellstore@gmail.com" , "New Message", $email_message);
header("location: mailto:sellstore777@gmail.com?subject=Ini%20adalah%20judul%20email%20default&body=Pesan%20ini%20akan%20secara%20otomatis%20muncul%20lho%21");
?>