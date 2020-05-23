<?php include('../private/server.php') ?>
<!DOCTYPE html>
<html>
<head>
<h1>Get Started with your account</h1>
<p>Find your people. Engage your customers. Build your brand. Do it all with Mailchimp’s Marketing Platform. Already ha$<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/application.css">
<link rel="stylesheet" type="text/css" href="css/typefaces.css">
</head>

<body style="background-color:yellow;">
<fieldset>
<form action="register.php" method = "post">
<?php include('errors.php'); ?>
<p>
Email:
<input type="email" name="email" size="30" maxlength="30"/>
</p>
<p>
Username:
<input type="text" name="username" size="30" maxlength="30"/>
</p>
<p>Choose a username that contains only letters and numbers, or use your email address.</p>
<p>
Password:
<input type="password" name="password_1" size="30" maxlength="30">
</p>
<p>
retype password:
<input type="password" name="password_2" size="30" maxlength="30">
</p>
<p>

<ul>
<li>One lowercase character</li>
<li>One uppercase character</li>
<li>One number</li>
<p> </p>
<li>One special character</li>
<li>8 characters minimum</li>
</p>
<h5>Your password is secure and you're all set!</h5>

<input type="submit" value="Get Started!" name = "reg_user" />
<p> </p>
<input type="checkbox" />
<p>I don't want to receive emails about new Mailchimp products, best practices, or special offers.</p>
<p>By clicking the "Get Started!" button, you are creating a Mailchimp account, and you agree to Mailchimp's <a href="t$
</form>
</fieldset>
<p>©2001–2020 All Rights Reserved. Mailchimp® is a registered trademark of The Rocket Science Group.
        <a href="cookies.html"> Cookie Preferences,</a><a href="Privacy.html"> Privacy,</a> and <a href="terms.html"> T$</p>
</body>

<!--credit to https://codewithawa.com/posts/admin-and-user-login-in-php-and-mysql-database --> 
</html>
