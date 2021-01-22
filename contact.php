<?php
$name = $_REQUEST['name'];
$subject = $_REQUEST['subject'];
$phone = $_REQUEST['phone'];
$email= $_REQUEST['email'];

if (empty($name) || empty($subject) || empty($phone) || empty($email)) 
{
    echo "Fill all the fields";
}
else{

    mail("rmnadaf2017@gmail.com", "My Subject", "Response Submitted", "");
}

?>