<?php 
if(isset($_POST['submit'])){
    $to = "suvosree5@gmail.com"; // this is james's Email address
    $from = $_POST['Email']; // this is the sender's Email address
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $fname. " " . $lname . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $fname . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $fname . ", we will contact you shortly.";
    
    }
?>