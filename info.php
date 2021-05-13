<?php
if(isset($_POST['submit'])){
    $to = "officialpurposeforproject@gmail.com";
    $name = $_POST['name'];
    $from = $_POST['Email'];
    $subject = "Form submission";
    $message = $_POST['Message'];
    $headers = "From:" . $from;
    
    if (empty($name) || empty($from) || empty($message))
    {
        echo "Please Fill all the details";
    }
    else
    {
        mail($to,$subject,$message,$headers);
        echo "<script type='text/javascript'>alert('Message sent Successfully');window.history.go(-1);
        </script>";
    }
}
?>
