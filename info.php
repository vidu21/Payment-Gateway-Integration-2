<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['Email'];
    $message = $_POST['Message'];
    
    if (empty($name) || empty($email) || empty($message))
    {
        echo "Please Fill all the details";
    }
    else
    {
        mail("varunrana8@gmail.com", "PTE NGO MESSAGE", $message, "From: $name < $email > ");
        echo "<script type='text/javascript'>alert('Message sent Successfully')
        </script>";
    }
}
header("Location: https://varun-payment-integration.herokuapp.com/contact.html");
?>
