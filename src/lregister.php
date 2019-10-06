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
      <form method="post" action="">
        <img src="image/logo.jpg">
        <H1>Register</h1>
        <input type="text" name="fname" placeholder="First Name" class="textbox" required>
        <br>
        <br>
        <input type="text" name="lname" placeholder="Last Name" class="textbox" required>
        <br>
        <br>
        <input type="text" name="username" placeholder="Username" class="textbox" required>
        <br>
        <br>
        <input type="text" name="email" placeholder="example@example.com" class="textbox" required>
        <br>
        <br>
        <input type="password" name="password1" placeholder="Password" class="textbox" required>
        <br>
        <br>
        <input type="password" name="password2" placeholder="Confirm Password" class="textbox" required>
        <br>
        <br>
        <button type="submit" name="signup">Register</button>
        <br>
        <p class="lp">Already have an account?<a href="login.php">Login</a></p>
      </form>
    </div>
  </center>
  </body>
</html>



<!--PHP-->
<?php include_once 'dilanga/config.php'; ?>

<?php

  if(isset($_POST['signup'])){

    // Escape user inputs for security
    $first_name  = $_POST["fname"];
    $last_name   = $_POST["lname"];
    $username    = $_POST["username"];
    $email       = $_POST["email"];
    $password    = $_POST["password1"];
    $c_password  = $_POST["password2"];

    if ($password == $c_password){
      // Attempt update query execution
      $sql = "INSERT INTO user (id,fname,lname,username,email,password) VALUES ('','$first_name','$last_name','$username','$email','$password')";

      if(mysqli_query($conn, $sql)){
        echo "<script>
                alert('Registration successfully!!!!');
                window.location.href='login.php';
              </script>";
      }
      else {
        echo "<script>
                alert('ERROR: Could not able to execute $sql . ');
              </script>";
      }
    }
    else{
      echo "<script>
              alert('Password and Confirm password does not match!!!');
              window.location.href='lregister.php';
            </script>" ;
    }
  }
    // Close connection
    mysqli_close($conn);
?>
