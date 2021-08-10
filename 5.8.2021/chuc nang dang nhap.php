<html>
    <style type="text/css">
    login {
        height: 180px; width: 230px;
        margin: 0;
        padding: 10px;
        border: 1px #CCC solid;
    }
    .login input {
        padding: 5px; margin: 5px;
    }
    </style>
    <body>
        <form>
            <div class="login">
                <h2>Login</h2>
                <input type="text" name="username" size="30" placeholder="username"/><br>
                <input type="text" name="password" size="30" placeholder="password" /><br>
                <input type="submit" value="Sign in"/>
            </div>
        </form>
    </body>
</html>

<<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
   $username = $_GET["username"]; 
   $password = $_GET["password"];
	
   if ($username === "doanduc" && $password === "doanminhduc") {	 
        echo "<h2>Welcome <span style='color:red'>" .$username. "</span> to website</h2>";
   } else{
        echo "<h2><span style='color:red'>Login Error</span></h2>";
   }
}
?>