<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/lregister.css">
    <script src="javaScript/lregister.js"></script>
    <title>Register - HRM</title>
  </head>
  <body>
    <center>
    <div>
      <form method="post">
        <img src="image/logo.jpg">
        <H1>Register</h1>
        <h3>Access to Dashboard</h3>
        <input type="text" name="username" placeholder="Username" class="textbox" required>
        <br>
        <br>
        <input type="password" name="Password1" placeholder="Password" class="textbox" required>
        <br>
        <br>
        <input type="password" name="Password2" placeholder="Repeat Password" class="textbox" required>
        <br>
        <br>
        <button type="submit">Register</button>
        <br>
        <p class="lp">Already have an account?<a href="login.php">Login</a></p>
      </form>
    </div>
  </center>
  </body>
</html>
