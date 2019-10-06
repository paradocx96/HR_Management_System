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
//submit data
if(isset($_POST['submit'])) {
  // Escape user inputs for security
  $_POST["id"] = $_GET['uid'];
  $id          = $_POST["id"];

  $query ="DELETE FROM user WHERE id = {$id} LIMIT 1";
  $result = $conn->query($query);
    if($result) {
      echo "<script>
              alert('Your Profile Delete successfully!!!');
              window.location.href='login.php';
            </script>";
    }
    else{
      echo "<script>
              alert('System Failed!!!');
              window.location.href='profileconfig3.php';
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
          <H1>Profile Setting</h1>
            <form action="profileconfig3.php" method="post" class="form">
              <p>
                <label for="">Delete Account</label>
                <button type="submit" name="submit" value="Delete Account">Delete</button>
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
