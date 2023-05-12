<?php
session_start();
if(empty($_SESSION['email'])){
    header("location: ../view/pagetwo.php");
}
?>
<html>
    <head>
        <title>First-page</title>
        <link rel="stylesheet" href="pageone.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
        $(document).ready(function(){
            $("#bttn1").click(function(){
            $("#div1").fadeIn();
            $("#div2").fadeIn("slow");
            $("#div3").fadeIn(2500);
            });
        });

        $(document).ready(function(){
            $("#bttn2").click(function(){
                $("#div1").fadeOut();
                $("#div2").fadeOut("slow");
                $("#div3").fadeOut(2000);
            });
        });

        $(document).ready(function(){
            $("#bttn3").click(function(){
            $("#div4").fadeIn();
            $("#div5").fadeIn("slow");
            });
        });

        $(document).ready(function(){
            $("#bttn4").click(function(){
                $("#div4").fadeOut();
                $("#div5").fadeOut("slow");
            });
        });
        </script>
    </head>
    <body>
        <div class="container">
        <h1><em>Welcome <?php echo $_SESSION["email"]; ?></em></h1>
        <div class="pictures">
            <button id="bttn1">Click to see the Hoodies</button><br>
            <img src="images/hoodie1.jpeg" alt="hoodie1" width="80px" height="120px" style="display:none" id="div1">
            <img src="images/hoodie2.jpg" alt="hoodie2" width="80px" height="120px" style="display:none" id="div2">
            <img src="images/hoodie3.jpg" alt="hoodie3" width="80px" height="120px" style="display:none" id="div3">
            <br>
            <button id="bttn2">Click to fade out Hoodies!</button><br>
        </div>
        <div class="tshirts">
        <button id="bttn3">Click to see the T-shirts</button><br>
            <img src="images/tshirt1.jpg" alt="tshirt1" width="120px" height="120px" style="display:none" id="div4">
            <img src="images/tshirt2.jpg" alt="tshirt2" width="120px" height="120px" style="display:none" id="div5">
            <br>
            <button id="bttn4">Click to fade out T-shirts!</button><br>
        </div>
        <div class="links">
        <h4>Go to your profile!<a href="pagetwo.php" target="_blank">Profile</a></h4>
        <h5>Click here to logout!<a href="../control/logout.php">logout</a></h5><br>
        <h4 id="order">View your cart!<a href="cart.php" target="_blank">Cart</a></h4>
        </div>
        </div>
    </body>
</html>