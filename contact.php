<?php 
if (isset($_POST['submit'] && $_POST['email']!='')&& filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){

    $name= $_POST['name'];
    $subject= $_POST['subject'];
    $mailFrom= $_POST['email'];
    $message= $_POST['message'];

    require_once 'dbh.php';
    require_once 'insert.php';

    $mailTo= "dbaibolatova@na.edu";
    $headers= "From: ".$mailFrom;
    $txt= "You have received an email from ".$name.".\n\n".$message;

    //mail($mailTo,$subject,$txt,$headers); 
    header("location: index.php");
    }


