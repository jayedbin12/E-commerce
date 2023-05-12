<?php
include('../control/logincheck.php');

if(isset($_SESSION['email'])){
    header("location: ../view/pageone.php");
}
?>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="login.css">
    </head>
    <body>
        <h1><u>Login</u></h1><br>
        <div class="login">
            <form action="" id="login" method="POST">
                <table>
                    <tr>
                        <td><b>E-mail:</b></td>
                        <td><input type="email" id="email" name="email" placeholder="Type Email"></td>
                    </tr>
                    <tr>
                        <td><b>Password:</b></td>
                        <td><input type="password" id="password" name="password" placeholder="Type password"></td>
                    </tr>
                </table>
                <div class="submit">
                <input type="submit" name="submit" id="submit" value="Login">
                </div>
            </form>
            <div class="register">
            <h5><b>Not yet registered?<a href="registration.php">Click here!</a></b></h5>
        </div>
        <?php echo $error; ?>
        </div>   
    </body>
</html>