<?php
if(isset($_POST['submit'])) {
$to = "operations@chromaticsdata.com";
$subject = "Enquiry by Client";
$name_field = $_POST['name'];
$email_field = $_POST['email'];
$companyname = $_POST['companyname'];
$contact = $_POST['num'];
$message = $_POST['text'];
$body = "From: $name_field\n E-Mail: $email_field\n Message:\n $message\n Number: $contact\n Company: $companyname";
 
echo "Data has been submitted to $to!";
mail($to, $subject, $body);
} else {
echo "blarg!";
}
?>