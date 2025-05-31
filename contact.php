<?php
     $_NAME = $_POST["name"];
        $_EMAIL = $_POST["reply"];
        $_PHONE = $_POST["phone"];
        $_MESSAGE = $_POST["message"];

        $_MAILTO = "booking@rchronline.com";
        $_SUBJECT = "Contact Form from Manu Maharani Website";
        $_FORMCONTENT = "From: ".$_NAME." Subject: ".$_PHONE." Message: ".$_MESSAGE;
        $_MAILHEADER = "Reply To: ".$_EMAIL;

        mail($_MAILTO, $_SUBJECT, $_FORMCONTENT, $_MAILHEADER)or die("Error!");
echo "Thank You! We will contact you shortly. Till the time please explore new things on our website";

?>