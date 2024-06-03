<?
$name = $_POST{'name'};
$email = $_POST{'email'};
$subject = $_POST{'subject'};
$message = $_POST['message'];

$email_message = "

Name: ".$name."
Email: ".$email."
subject: ".$subject."
Message: ".$message."
";

mail ("visiondotcom.com@gmail.com" , "Inquiry Message", $email_message);
header("location: ../index.html");
?>


