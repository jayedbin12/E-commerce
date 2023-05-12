<?php
class db{
 
function OpenCon()
{
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "retailprojectdb";
 
 $conn = new mysqli($dbhost, $dbuser, $dbpass, $db);
 
 return $conn;
}

function Logincheck($conn,$table,$email,$password){
    $result = $conn->query("select * from $table where email = '".$email."' AND password = '".$password."' limit 1");
    return $result;
}

function Search($conn,$table,$search){
$result = $conn->query("SELECT * FROM $table WHERE fname='$search' OR email='$search' OR lname='$search'");
return $result;
}

function ShowAll($conn,$table)
{
$result = $conn->query("SELECT * FROM  $table");
return $result;
}

function UpdateUser($conn,$table,$email,$fname,$lname,$password)
{
    $sql = "UPDATE $table SET fname='$fname', lname='$lname', password='$password' WHERE email='$email'";

   if ($conn->query($sql) === TRUE) {
       $result= TRUE;
   } else {
       $result= FALSE ;
   }
   return  $result;
}

function DeleteUser($conn,$table,$fname){
    $sql = "DELETE FROM $table WHERE fname=$fname";

    if ($conn->query($sql) === TRUE) {
        $result= TRUE;
    } else {
        $result= FALSE ;
    }
    return  $result;
}

function CloseCon($conn){
$conn->close();
}
}
?>