<?php
session_start(); 

if(empty($_SESSION["email"])){
header("location: ../view/login.php");
}

$delivery=$choose=$pay=$email="";
?>
<html>
    <head>
        <title>Cart</title>
        <link rel="stylesheet" href="cart.css">
    </head>
    <body>
        <div class="container">
        <fieldset>
        <legend><h1>Delivery:</h1></legend>
        <div class="form">
        <form action="../control/process.php" method="POST">
            <table>
                <tr>
                    <td>Write your email:</td>
                    <td><input type="email" name="email"></td>
                </tr>
                <tr>
                <td>Choose where do you want your product:</td>
                <td>
                    <input type="radio" name="delivery" value="Home">Home
                    <input type="radio" name="delivery" value="office">Office
                    <input type="radio" name="delivery" value="gift">Deliver as a Gift
                </td>
                <br>
                </tr>
                <tr>
                <td>Do you want contactless delivery?</td>
                <td>
                <input type="radio" name="choose" value="Yes">Yes
                <input type="radio" name="choose" value="No">No
                </td>
                </tr>
                <tr>
                <td>How do you want to pay?</td>
                <td>
                <input type="radio" name="pay" value="CashOnDelivery">Cash on delivery
                <input type="radio" name="pay" value="Card">Credit/Debit
                <input type="radio" name="pay" value="OnlinePay">Bkash/Nagad
                </td>
                </tr>
            </table>
            <br>
            <input type="submit" name="submit" value="Confirm" id="inp">
        </form>
        </div>
    </fieldset><br>
        <div class="links">
        <h4 id="product">Go to the product page!<a href="pagetwo.php" target="_blank">Product</a></h4>
        <h4>Go to your profile!<a href="pagetwo.php" target="_blank">Profile</a></h4><br>
        <h5>Click here to logout!<a href="../control/logout.php">logout</a></h5>
        </div>
        </div>
    </body>
</html>