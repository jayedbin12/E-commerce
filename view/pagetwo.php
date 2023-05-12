<?php
session_start(); 

include('../control/searchcontrol.php');
include('../control/updatecontrol.php');

if(empty($_SESSION["email"])){
header("location: ../view/login.php");
}
?>
<html>
    <head>
        <title>pagetwo</title>
        <link rel="stylesheet" href="pagetwo.css">
    </head>
    <body>
        <div class="container">
        <h1>Profile Page</h1>
        <div class="search">
        <form action="" method="POST">
            Email: <input type="text" name="email" id="email">
            <input name="submit" id="srh" type="submit" value="Search">
        </form>
        
        <br>
        <?php echo $error; ?>
        </div>
        <br>

        <div class="update">
        <form method="POST" action="">
            <h1>Update Profile</h1>
            <h3>First Name: </h3><input type="text" id="inp1" name="fname" value="<?php echo $fname; ?>">
            <h3>Last Name: </h3><input type="text" id="inp2" name="lname" value="<?php echo $lname; ?>">
            <h3>Password: </h3><input type="text" id="inp3" name="password" value="<?php echo $password; ?>"><br>
            <input type="submit" id="sub" name="update" value="Update"><br>
            <?php echo $error; ?>
            <?php echo $errorE; ?>
        </form>
        </div>

        <br>
        <div class="links">
        <h4>Click to go back!<a href="pageone.php" target="_blank">Products</a></h4>
        <h5>Click here to logout!<a href="../control/logout.php"">logout</a></h5>
        </div>
        </div>
    </body>
</html>