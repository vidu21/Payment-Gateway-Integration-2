<?php
if(isset($_POST['submit'])){
    $to = "officialpurposeforproject@gmail.com";
    $name = $_POST['name'];
    $from = $_POST['Email'];
    $message = $_POST['Message'];
    
    if (empty($name) || empty($from) || empty($message))
    {
        echo "Please Fill all the details";
    }
    else
    {
        mail("officialpurposeforproject@gmail.com", "PTE NGO MESSAGE", $message, "From: $name < $email > ");
        echo "<script type='text/javascript'>alert('Message sent Successfully');window.history.go(-1);
        </script>";
    }
}
?>
