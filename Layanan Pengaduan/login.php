<?php
	session_start();
	include "koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
    <link rel="stylesheet" href="Design.css">
</head>
</head>
<body>
		<h2>Login here</h2>
<form action="cek_login.php" method="post">
    <div class="container-al46">
        <label for="username"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="username" required>

        <label for="password"><b>Password</b></label>
        <input type="password" name="password" value="Enter Password" required>

        <input type="checkbox" checked="checked"><span>Remember Me</span>
        <button type="submit" name="fmasuk">Login</button>

        <span class="fpw"><a href="#">Forgot Password</a></span>
    </div>
</form>
</body>
</html>