<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <script src="javaScript/login.js"></script>
    <title>Login - HRM</title>
  </head>
  <body>
    <center>
    <div>
      <form method="post">
        <img src="image/logo.jpg">
        <H1>Login</h1>
        <h3>Access to Dashboard</h3>
        <input type="text" name="username" placeholder="Username" class="textbox" required>
        <br>
        <br>
        <input type="password" name="Password" placeholder="Password" class="textbox" required>
        <br>
        <a href="fpassword.php"><p class="lp">Forgot password?</p></a>
        <br>
        <button type="submit">Login</button>
        <br>
        <p class="lp">Don't have an account yet?<a href="lregister.php">Register</a></p>
      </form>
      <a href="terms.php">Terms and Conditions</a> | <a href="privacy.php">Privacy Policies</a>
    </div>
  </center>
  </body>
</html>
