<html>
    <head>
        <title>retailproject</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div id="container">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="view/about.php" target="_blank">About Us</a></li>
                    <li>Contact Us
                        <ul>
                            <li><button onclick="email()">E-mail</button><p id="email"></p></li>
                            <li><button onclick="phone()">Mobile</button><p id="phone"></p></li>
                        </ul>
                    </li>
                    <li><a href="view/login.php" target="_blank">Log-in</a></li>
                    <li><a href="view/registration.php" target="_blank">Sign-in</a></li>
                </ul>
        </div><br><br><br>
        <aside>
            <img src="view/images/main.png" alt="clothing" width="100%" height="100%">
        </aside>
        <footer>
        <br><br><br>
<div id="media">
	<a id="fb" href="#" class="fa fa-facebook"></a>
	<a id="tw" href="#" class="fa fa-twitter"></a>
	<a id="ln" href="#" class="fa fa-linkedin"></a>
	<a id="yt" href="#" class="fa fa-youtube"></a>
	<a id="instra" href="#" class="fa fa-instagram"></a>
</div>
<div>
	<p>© 2021 E-commerce fashion house.</p>
</div>
        </footer>
    </body>
    <script>
            function email(){
                document.getElementById("email").innerHTML = "retailproject@gmail.com";
            }
            function phone(){
                document.getElementById("phone").innerHTML = "01878036286";
            };
    </script>
</html>