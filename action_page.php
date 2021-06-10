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

# ------------------
# Create a campaign\
# ------------------
# Include the Sendinblue library\
require_once(__DIR__ . "/APIv3-php-library/autoload.php");
# Instantiate the client\
SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey("api-key", "YOUR_API_V3_KEY");
$api_instance = new SendinBlue\Client\Api\EmailCampaignsApi();
$emailCampaigns = new \SendinBlue\Client\Model\CreateEmailCampaign();
# Define the campaign settings\
$email_campaigns['name'] = "Campaign sent via the API";
$email_campaigns['subject'] = "My subject";
$email_campaigns['sender'] = array("name": "From name", "email":"suvosree5@gmail.com");
$email_campaigns['type'] = "classic";
# Content that will be sent\
"htmlContent"=> "Congratulations! You successfully sent this example campaign via the Sendinblue API.",
# Select the recipients\
"recipients"=> array("listIds"=> [2, 7]),
# Schedule the sending in one hour\
"scheduledAt"=> "2018-01-01 00:00:01"
);
# Make the call to the client\
try {
$result = $api_instance->createEmailCampaign($emailCampaigns);
print_r($result);
} catch (Exception $e) {
echo 'Exception when calling EmailCampaignsApi->createEmailCampaign: ', $e->getMessage(), PHP_EOL;
}