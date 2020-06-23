<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];


    $email_from = 'rajadaanyaal@gmail.com';

    $email_subject = "New Form Submit";

    $email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                        "User Message; $message.\n".;


    $to = "rajadaanyaal@gmail.com";

    $headers = "Form: $email_from \r\n".;
    
    $headers = "Reply-To: $visitor_emailb \r\n".;

    mail($to,email_subject,$email_body,$headers);

    header("Location: Contact.html");

?>