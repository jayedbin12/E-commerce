<?php
session_start();

$fname=$lname=$email=$gender=$password=$confirmpassword=$fnameE=$lnameE=$emailE=$genderE=$passwordE=$confirmpasswordE="";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST["fname"])){
        $fnameE="Name is requied";
    }
    else
    {
        $fname = test_input($_POST["fname"]);
        if( preg_match("/[0-9]/", $fname))
        {$fnameE="Must start with letter";}
        else if (!preg_match("/[a-zA-Z- ]{3,}/",$fname))
        {
            $fnameE = "At least three words and can only contain letters and space";}
        }

    if(empty($_POST["lname"])){
        $lnameE = "Name is requied";
    }
    else{
        $lname = test_input($_POST["lname"]);
        if(preg_match("/[0-9]/", $lname))
        {$lname="Must start with letter";}
        else if (!preg_match("/[a-zA-Z- ]{3,}/",$lname)){
            $lnameE = "At least three words and can only contain letters and space";}
        }
    
    if(empty($_POST["email"])){
        $emailE = "Email is required";
    }
    else
    {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $emailE = "Invalid email format. Format: example@gmail.com";}
        }

    if(!isset($_POST["gender"]))
        {$genderE="At least one of them must be selected";}
        
    if(empty($_POST["password"])){
        $passwordE="Enter password";
    }else{
        $password = test_input($_POST["password"]);
        if(!preg_match("/[0-9a-zA-Z@#$%]{7,}/",$password)){
            $passwordE = "At least seven letters";
        }
    }

    if(empty($_POST["confirmpassword"])){
        $passwordE="Enter Confirm-password";
    }else{
        $confirmpassword = test_input($_POST["confirmpassword"]);
        if(!preg_match("/[0-9a-zA-Z@#$%]{7,}/",$confirmpassword)){
            $confirmpasswordE = "At least seven letters";
        }
    }
}
function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<html>
    <head>
        <title>Registration</title>
        <link rel="stylesheet" href="registration.css">
    </head>
    <body>
        <div class="container">
            <?php include('../control/insertcontrol.php'); ?>
        <div class="texts">
            <h1>E-commercesite</h1>
            <h4>We deliver quality</h4>
        </div>
        <fieldset>
            <legend><h2>Registration</h2></legend>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" onsubmit="return validateForm()">
                <table>
                    <tr>
                        <td>First name:</td>
                        <td><input type="text" id="fname" name="fname" value="<?php echo $fname;?>"><span class="error">*<?php echo $fnameE;?></span></td>
                    </tr>
                    <tr>
                        <td>Last name:</td>
                        <td><input type="text" id="lname" name="lname" value="<?php echo $lname;?>"><span class="error">*<?php echo $lnameE;?></span></td>
                    </tr>
                    <tr>
                        <td>E-mail:</td>
                        <td><input type="email" id="email" name="email" value="<?php echo $email;?>"><span class="error">*<?php echo $emailE;?></span></td>
                    </tr>
                    <tr>
                        <td>Gender:</td>
                        <td>
                            <input type="radio" id="male" name="gender" value="Male" <?php if (isset($gender) && $gender == "male") echo "checked";?>>Male
                            <input type="radio" id="female" name="gender" value="Female" <?php if (isset($gender) && $gender == "female") echo "checked";?>>Female<span class="error">*<?php echo $genderE; ?></span>
                        </td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input type="password" id="password" name="password" onkeyup='check();' value="<?php echo $password;?>"><span class="error">*<?php echo $passwordE;?></span></td>
                    </tr>
                    <tr>
                        <td>Confirm password:</td>
                        <td><input type="password" id="confirm_password" name="confirm_password" onkeyup='check();' value="<?php echo $confirmpassword ;?>"><span class="error">*<?php echo $confirmpasswordE;?></span></td>
                        <td><p id="pass"></p></td>
                    </tr>
                    <tr>
                        <td><p id="message"></p></td>
                    </tr>
                </table>
                <div class="submit">
                <input type="submit" name="submit" id="submit" value="Submit">
                <input type="reset" name="reset" id="reset" value="Reset">
                </div>
                <?php echo $error; ?>
            </form>
            <h5>Already got an account!<a href="../view/login.php">Login</a></h5>
        </fieldset>
        </div>
        <script src="registration.js"></script>
    </body>
</html>