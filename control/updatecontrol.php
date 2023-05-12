<?php

$error="";
$errorE="";

if (isset($_POST['update'])) {
if (empty($_POST['password'])) {
$error = "Input given is invalid";
}
else
{
$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->UpdateUser($conobj,"registration",$_SESSION["email"],$_POST["fname"],$_POST['lname'],$_POST['password']);
if($userQuery==TRUE)
{
    $errorE = "<h3>Update successful!</h3>"; 
}
else
{
    $errorE = "<h3>Could not update</h3>";    
}
$connection->CloseCon($conobj);

}
}

?>
