<?php

include('../model/insert.php');

$error="";

if ($_SERVER['REQUEST_METHOD'] == "POST"){
if(isset($_POST['submit'])){
    if (empty($_POST['fname']) || empty($_POST['lname']) || empty($_POST['email']) || empty($_POST['gender']) || empty($_POST['password'])){
    $error = "Input given is invalid";
    }{
    $connection = new db();
    $conobj=$connection->OpenCon();

    $userQuery=$connection->insert($conobj,"registration",$_POST['fname'],$_POST['lname'],$_POST['email'],$_POST['gender'],$_POST['password']);
    if($userQuery==TRUE){
        echo "<h1>Registration successful!</h1>";
    }else{
        echo "Could not register!";
    }

    $connection->CloseCon($conobj);
}
}
}
?>