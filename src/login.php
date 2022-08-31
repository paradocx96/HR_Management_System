<!--session_start-->
<?php session_start(); ?>
<!--include_once-->
<?php include_once 'utils/config.php'; ?>
<?php include_once 'utils/function.php'; ?>
<!--PHP here-->
<?php

  if (isset($_POST['submit'])){

    //Escape user inputs for security
  	$errors   = array();

    //checking username
    if (!isset($_POST['username']) || strlen(trim($_POST['username'])) < 1) {
      $errors[] = 'Username is Invalid';
    }

    //Checking password
    if (!isset($_POST['password']) || strlen(trim($_POST['password'])) < 1) {
      $errors[] = 'Password is Invalid';
    }

    //checking any errors fether now
    if (empty($errors)){
      $username		= mysqli_real_escape_string($conn, $_POST['username']);
			$password 	= mysqli_real_escape_string($conn, $_POST['password']);

      //sql query
      $query = "SELECT * FROM user WHERE username = '{$username}' AND password = '{$password}' LIMIT 1";
      $result_set = mysqli_query($conn, $query);

      verify_sql($result_set);

      //result succesffull
      if (mysqli_num_rows($result_set) == 1){

        //valid user found
        $user = mysqli_fetch_assoc($result_set);
        $_SESSION['uid'] = $user['id'];
        $_SESSION['f_name'] = $user['fname'];

        //isert last login details
        $query = "UPDATE user SET lastlogin=NOW() WHERE id={$_SESSION['uid']} LIMIT 1";
        $result_set = mysqli_query($conn,$query);

        verify_sql($result_set);

        //redirec to dashboard
        header('Location:dashboard.php');
      }
      else{
        //Invalid user found
        $errors[] = 'Invalid username / password';
      }
    }
  }
?>

<!---HTML here-->
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
      <form action="login.php" method="post">
        <img src="image/logo.jpg">
        <H1>Login</h1>
        <h3>Access to Dashboard</h3>

        <?php
          if (isset($errors) && !empty($errors)){
            echo '<p class="p2">Invalid Username / Password</p>';
          }
        ?>

        <?php
          if (isset($_GET['logout'])) {
            echo '<p class="p">You have succesffully logged out</p>';
          }
        ?>

        <input type="text" name="username" placeholder="Username" class="textbox" required>
        <br>
        <br>
        <input type="password" name="password" placeholder="Password" class="textbox" required>
        <br>
        <a href="fpassword.php"><p class="lp">Forgot password?</p></a>

        <button type="submit" name="submit">Login</button>
        <br>
        <p class="lp">Don't have an account yet?<a href="lregister.php">Register</a></p>
      </form>
      <a href="terms.php">Terms and Conditions</a> | <a href="privacy.php">Privacy Policies</a>
    </div>
  </center>
  </body>
</html>

<?php
  mysqli_close($conn);
?>
