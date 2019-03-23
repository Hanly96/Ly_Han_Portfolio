<?php
include ("/includes/connect.php");
function send_email(){
    if(empty($_POST['email'])){
        header('Location:/contact.php?status=error');
        exit();
    }
    if(!isset($_POST['message']) || !isset($_POST['email'])){
        header('Location:/contact.php');
        exit();
    }

    
    $to = 'hanly4196@gmail.com';
    $subject = 'Email: hanlydesigns.com';
    $message = 'Message Body:'.$_POST['message'];
    $headers = 'From: noreply@hanlydesigns.com'.'/r/n';
    $headers .= 'Reply-To:'.$_POST['email'];

    if(mail($to, $subject, $message, $headers)){
        header('Location:/contact.php?status=successful'); 
    }
    var_dump($_POST);
}

    send_email();

    
    
?>