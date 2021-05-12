<?php
$name = $_REQUEST['name'];
$email = $_REQUEST['Email'];
$message = $_REQUEST['Message'];

if (empty($name) || empty($email) || empty($message))
{
    echo "Please Fill all the details";
}
else
{
    mail("varunrana8@gmail.com", "PTE NGO MESSAGE", $message, "From: $name < $email > ");
    echo "<script type='text/javascript'>alert('Message sent Successfully');
    window.history.go(-1);
    </script>";
}
?>