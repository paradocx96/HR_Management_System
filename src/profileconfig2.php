<!--session_start-->
<?php session_start(); ?>
<!--include_once-->
<?php include_once 'dilanga/config.php'; ?>
<?php include_once 'dilanga/function.php'; ?>
<!--checking login-->
<?php
  //checking if user is logged in
  if (!isset($_SESSION['uid'])) {
    header('Location:login.php');
  }
?>

<?php
$_GET['uid'] = $_SESSION['uid'];

if (isset($_GET['uid'])) {
  //getting information
  $uid = mysqli_real_escape_string($conn,$_GET['uid']);
  $query = "SELECT * FROM user WHERE id='{$uid}' LIMIT 1";

  $result_set = $conn->query($query);

  if ($result_set) {
    if ($result_set->num_rows == 1) {
      //user info
      $result = $result_set->fetch_assoc();
      $u_id     = $result["id"];
      $username = $result["username"];
    }
    else {
      //user not found
      header ('Location: dashboard.php?err=user_not_found');
    }
  }
  else {
    //query invalid
    header ('Location: dashboard.php?err=query_faild');
  }
}

//submit data
if(isset($_POST['submit'])) {
  // Escape user inputs for security
  $_POST["id"] = $_GET['uid'];
  $id          = $_POST["id"];
  $password    = $_POST["password1"];
  $c_password  = $_POST["password2"];

  if ($password == $c_password){
    // Attempt update query execution
    $query ="UPDATE user SET password = '{$password}' WHERE id = {$id} LIMIT 1";
    $result = $conn->query($query);
    if($result) {
      echo "<script>
              alert('Password Change successfully!!!');
              window.location.href='login.php';
            </script>";
    }
    else{
      echo "<script>
              alert('System Failed!!!');
              window.location.href='profileconfig2.php';
            </script>";
    }
  }else{
    echo "<script>
            alert('Password and Confirm password does not match!!!');
            window.location.href='profileconfig2.php';
          </script>";
  }
}

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/profileconfig.css">
    <script src="javaScript/profileconfig.js"></script>
    <title>ABC Company</title>
  </head>
  <body>
  <div class="header">
    <table>
          <tr>

            <td width="5%"><img src="image/logo.jpg" class="mainlogo"></td>
            <td width="70%">
              <center>
              <div class="searchbox">
                <form>
                  <input type="search" placeholder="Search here">
                </form>
              </div>
            </center>
            </td>
            <td width="5%"><img src="image/user.png" class="userlogo"></td>
            <td width="5%">

              <div class="profileimg">
                <a class="pidropbtn a" href="#"><?php echo $_SESSION['f_name']; ?></a>
                <div class="pidropcon">
                  <a class="a" href="profile.php">Profile</a>
                  <a class="a" href="adminsetting.php">About</a>
                  <a class="a" href="logout.php">Logout</a>
                </div>
              </div>

            </td>

          </tr>
        </table>
  </div>

    <div class="div1">
      <div class="div2">
        <ul id="mainNav">
          <li><a href="dashboard.php">Dashboard</a></li>
          <li class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">Personal</a>
            <div class="dropdown-content">
              <a href="profile.php">Profile</a>
              <a href="profileconfig.php">Configuration</a>
            </div>
          </li>
          <li class="dropdown">
            <a href="performance.php" class="dropbtn">Performance</a>
            <div class="dropdown-content">
              <a href="pfcompany.php">Company</a>
              <a href="pfemployee.php">Employee</a>
            </div>
          </li>
          <li class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">Employee</a>
            <div class="dropdown-content">
              <a href="allemp.php">All Employee</a>
              <a href="attendance.php">Attendance</a>
              <a href="leave.php">Leave</a>
            </div>
          </li>
          <li class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">Recruitment</a>
            <div class="dropdown-content">
              <a href="candidate.php">Candidates</a>
              <a href="vacancies.php">Vacancies</a>
            </div>
          </li>
          <li class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">Payroll</a>
            <div class="dropdown-content">
              <a href="empsalary.php">Employee Salary</a>
              <a href="payslip.php">Payslip</a>
              <a href="payrollitem.php">Payroll Items</a>
            </div>
          </li>
          <li class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">Report</a>
            <div class="dropdown-content">
              <a href="consulting.php">Consulting</a>
              <a href="reproblem.php">Report Problem</a>
              <a href="rereview.php">Report Review</a>
            </div>
          </li>
        </ul>
    </div>

    <!--body content-->
    <div class="div33">
      <H1 class="pageTitle">Profile Configuration</H1>
      <div id="pageNav">
        <ul>
          <li>Dashboard</li>
          <li> / </li>
          <li>Personal</li>
          <li> / </li>
          <li>Profile Configuration</li>
        </ul>
      </div>
      <br>
      <div id="sidemenu">
        <div class="menu1">
          <ul>
            <li><a href="profileconfig.php">Edit Profile</a></li>
            <li><a href="profileconfig2.php">Change Password</a></li>
            <li><a href="profileconfig3.php">Profile Setting</a></li>
          </ul>
        </div>
        <div class="menu2">
          <H1>Change Password</h1>
            <form action="profileconfig2.php" method="post" class="form">
              <p>
                <label for="">Username</label><h5><?php echo $username ?></h5>
              </p>
              <p>
                <label for="">Employee ID</label><h5><?php echo $u_id ?></h5>
              </p>
              <p>
                <label for="">New Password</label>
                <input type="password" name="password1" required>
              </p>
              <p>
                <label for="">Confirm Password</label>
                <input type="password" name="password2" required>
              </p>
              <p>
                <label for="">&nbsp;</label>
                <button type="submit" name="submit" value="Save Data">Save</button>
              </p>
            </form>
        </div>
      </div>
    </div>
    <!--end of body content-->
  </div>
  <footer>
    <a href="dashboard.php">HRMSystem</a> &copy; 2019 All Rights Reserved.<br/><a href="dterms.php">Terms & Conditions</a>-<a href="dprivacy.php">Privacy & Policies</a><br/>Version 1.0.0.1
  </footer>

  </body>
  </html>

  <?php
    // Close connection
    mysqli_close($conn);
  ?>
