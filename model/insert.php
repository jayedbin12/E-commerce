<?php
class db{
    
    function OpenCon(){
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $db= "retailprojectdb";
        
        $conn = new mysqli($dbhost, $dbuser, $dbpass, $db);
        return $conn;
}

function insert($conn,$table,$fname,$lname,$email,$gender,$password){
    $result=$conn->query("INSERT INTO $table (fname,lname,email,gender,password)VALUES('$fname','$lname','$email','$gender','$password')");   
    return $result;
}

function ShowAll($conn,$table)
{
$result = $conn->query("SELECT * FROM  $table");
return $result;
}

function CloseCon($conn){
$conn->close();
}
}
?>