<?php

$error="";

$formdata = array(

    'delivery' => $_POST["delivery"],
    'choose' => $_POST["choose"],
    'pay' => $_POST["pay"],
    'email' => $_POST["email"]

);

$existingdata = file_get_contents('mydata.json');
$tempJSONdata = json_decode($existingdata);
$tempJSONdata[] =$formdata;
$jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);

if(file_put_contents("mydata.json", $jsondata)) {
    $error = "<h3>Order confirmed!</h3>";
 }
else 
    $error = "<h3>No data saved!</h3>";

$data = file_get_contents("mydata.json");
$mydata = json_decode($data);
?>

<html>
    <head>
        <title>Order</title>
        <link rel="stylesheet" href="process.css">
    </head>
    <body>
        <div class="container">
            <table>
                <tr>
                    <td><?php echo $error; ?></td>
                </tr>
            </table>
            <h4>Clicl here to see the Products<a href="../view/pageone.php">Pageone</a></h4>
            <h4>Clicl here to logout<a href="logout.php">Logout</a></h4><br>
        </div>
    </body>
</html>