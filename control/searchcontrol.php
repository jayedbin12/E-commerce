<?php
include('../model/db.php');

$fname=$email=$lname=$password="";

$error="";

if (isset($_POST['submit'])) {

$email=$_POST['email'];
$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->Search($conobj,"registration",$email);

if ($userQuery->num_rows > 0) {

    // output data of each row
    while($row = $userQuery->fetch_assoc()){
      $fname=$row["fname"];
      $lname=$row["lname"];
      $password=$row["password"];
    
  } 
}
  else {
    echo "No results found";
  }
  $connection->CloseCon($conobj);
}

?>