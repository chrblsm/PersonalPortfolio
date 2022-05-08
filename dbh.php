<?php 

$serverName="localhost";
$dbUser="root";
$dbPassword="";
$dbName="mails";

$conn=mysqli_connect($serverName,$dbUser,$dbPassword,$dbName);
if (!$conn){
    die("Connection Failed: ".mysqli_connect_error());
}