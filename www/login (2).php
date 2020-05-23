<?php include('../private/server.php') ?>
<!DOCTYPE html>
<html>
        <head>
        <Title>Log In</Title>
        <h1>Log In</h1>
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet" type="text/css" href="css/application.css">
        <link rel="stylesheet" type="text/css" href="css/typefaces.css">
        </head>
        <body>
        <p>Need a Mailchimp account? <a href="register.php"> Create an account</a></p>
        <body style="background-color:yellow;">
        <fieldset>
        <form action="login.php" method="post">
        <?php include('errors.php'); ?>
        <p>Username:
        <input type="text" name="username" size="15" maxlength="30" />
        </p>
        <p>Password:
        <input type="password" name="password" size="15" maxlength="30"/>
        </p>
        <button type="submit" class= "btn" name ="login_user">Login now</button>
        </form>
        <p>Keep me logged in</p>
        <a href="Forgotpass.html">Forgot username?</a>
        <p>.</p>
        <a href="forgotpassword.html">Forgot password?</a>
        </fieldset>
        <p>
        ©2001–2020 All Rights Reserved. Mailchimp® is a registered trademark of The Rocket Science Group.
        <a href="cookies.html"> Cookie Preferences,</a><a href="Privacy.html"> Privacy,</a> and <a href="terms.html"> T$        </p>
        <h2>We've got your back and your free .com</h2>
        <p>Start with a free custom domain for up to 5 years, then build a free website to get your business online qui$        <a href="freedomain.html">Get A Free Custom Domain</a>
        </body>

<!--credit to https://codewithawa.com/posts/admin-and-user-login-in-php-and-mysql-database -->
</html>

