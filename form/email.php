<?php $name = $_POST['contactName'];
$email = $_POST['contactEmail'];
$contact = $_POST['contactSubject'];
$message = $_POST['contactMessage'];
$formcontent=" From: $name \n Contact: $contact \n Message: $message ";
$recipient = "kiang.ng@hotmail.com,info@tenocian.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";

?>

<html>
<head>
<meta http-equiv="refresh" content="0;url=http://www.tenocian.com/" />
<title>Thanks you! We will contact you soon.</title>
</head>
<body>
</body>
</html>