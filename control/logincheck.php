<?php
session_start();

$error="";

include("../model/db.php");

if(isset($_POST['submit'])){
    if(empty($_POST['email']) || empty($_POST['password'])){
        $error="Enter email & password";
    }else{
    if(isset($_POST['email']))
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $connection = new db();
        $conobj=$connection->OpenCon();

        $userQuery=$connection->Logincheck($conobj,"registration",$email,$password);

        if ($userQuery->num_rows > 0) {
            // output data of each row
            while($row = $userQuery->fetch_assoc()){
            $fname=$row["email"];
            $password=$row["password"];
          } 
        }
        else {
            echo "No results found";
          }

        if(mysqli_num_rows($userQuery)==1){
           $_SESSION['email'] = $_POST['email'];
           header("location: ../view/pageone.php");
        }
        else{
            $error = "Email or password incorrect";
        }

        $connection->CloseCon($conobj);
    }
}
}
?>