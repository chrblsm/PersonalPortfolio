<?php

function insertUser($conn, $name, $mailFrom){
    $sql="INSERT INTO senders(Name, Email) VALUES(?,?);";
    $stmt=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("index.php");
        exit();
    }
    
    mysqli_stmt_bind_param($stmt, "ss", $name, $mailFrom);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
}