<?php 

    if(isset($_POST['btn-send']))
    {
       $name = $_POST['name'];
       $email = $_POST['email'];
       $subject = $_POST['subject'];
       $phone= $_POST['phone'];
       $message=$_POST['message']

       if(empty(name) || empty($email) || empty($subject) || empty(phone) ||empty($message) )
       {
           header('location:index.php?error');
       }
       else
       {
           $to = "rmnadaf2017@gmail.com";

           if(mail($to,$subject,$message,$email,$phone))
           {
               header("location:contact.php?success");
           }
       }
    }
    else
    {
        header("location:contact.php");
    }
?>