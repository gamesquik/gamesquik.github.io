<?php
    error_reporting(-1);
    ini_set('display_errors', 'On');
    set_error_handler("var_dump");
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if(!empty($email) && !empty($message)){ // if email and message field is not empty
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){ // if user entered email valid
            $reciever = "gamesquikdev@gmail.com"; // email reciever address
            $subject = "From: $name <$email>"; // subject of the email. Will look like: Name <abc@gmail.com>
            $body = "Name: $name\nEmail: $email\nEmail: $email\n\nMessage: $message\n\nRegards, \n$name";
            $sender = "From: $email"; // sender email
            if(mail($reciever, $subject, $body, $sender)){ // mail() is inbuilt php function to send mail
                echo "Your message has been sent";
            } else {
                echo "Sorry, failed to send your message!";
            }
        } else {
            echo "Enter a valid email address!";
        }
    } else {
        echo "Name and email field is required!";
    }
?>