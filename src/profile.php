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
  $query = "SELECT * FROM user WHERE id={$uid} LIMIT 1";

  $result_set = mysqli_query($conn,$query);

  if ($result_set) {
    if (mysqli_num_rows($result_set) == 1) {
      //user info
      $result = mysqli_fetch_assoc($result_set);
      $id          = $result["id"];
      $fname       = $result["fname"];
      $lname       = $result["lname"];
      $designation = $result["designation"];
      $joindate    = $result["joindate"];
      $nic         = $result["nic"];
      $nationality = $result["nationality"];
      $religion    = $result["religion"];
      $mstatus     = $result["mstatus"];
      $gender      = $result["gender"];
      $phone       = $result["phone"];
      $email       = $result["email"];
      $birthday    = $result["birthday"];
      $address     = $result["address"];
      $nofchildren = $result["nofchildren"];
      $lastlogin   = $result["lastlogin"];
      $username    = $result["username"];
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

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/profile.css">
    <script src="javaScript/profile.js"></script>
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

    <div class="div3">

      <H1 class="pageTitle">Profile</H1>

      <div id="pageNav">
        <ul>
          <li>Dashboard</li>
          <li> / </li>
          <li>Personal</li>
          <li> / </li>
          <li>Profile</li>
        </ul>
      </div>
      <br>
      <div id="profile">
        <ul>
          <li>
            <div class="profile1">

              <?php
                echo "<H1 class='profile111'>" . $fname . " " . $lname . "</H1>";
                echo "<p class='profile11'>" . $designation . "</p>";

                echo "<table id='tableinfo'>";
                echo "<tr><td width='130px'><b>Employee ID</b></td>";
                echo "<td>" . $id . "</td></tr>";
                echo "<tr><td width='130px'><b>Username</b></td>";
                echo "<td>" . $username . "</td></tr>";
                echo "<tr><td width='130px'><b>Date of join</b></td>";
                echo "<td>" . $joindate . "</td></tr>";
                echo "<tr><td width='130px'><b>Last Login info</b></td>";
                echo "<td>" . $lastlogin . "</td></tr>";

                echo "</table>";


              ?>
              <br>
              <input type="button" class="edit" name="edit" onclick="window.location.href='profileconfig.php'" value="Edit">
            </div>
          </li>
          <li>
            <div>
            <div class="profile21">
              <?php
                echo "<H3 class='profile111'>Personal Information</H3>";

                echo "<table id='tableinfo'>";
                echo "<tr><td width='130px'><b>NIC</b></td>";
                echo "<td>" . $nic . "</td></tr>";
                echo "<tr><td width='130px'><b>Gender</b></td>";
                echo "<td>" . $gender . "</td></tr>";
                echo "<tr><td width='130px'><b>Birthday</b></td>";
                echo "<td>" . $birthday . "</td></tr>";
                echo "<tr><td width='130px'><b>Nationality</b></td>";
                echo "<td>" . $nationality . "</td></tr>";
                echo "<tr><td width='130px'><b>Religion</b></td>";
                echo "<td>" . $religion . "</td></tr>";
                echo "<tr><td width='130px'><b>Marital Status</b></td>";
                echo "<td>" . $mstatus . "</td></tr>";
                echo "<tr><td width='130px'><b>No of Children</b></td>";
                echo "<td>" . $nofchildren . "</td></tr>";
                echo "</table>";
              ?>
            </div>
            <div class="profile22">
              <?php

                echo "<H3 class='profile111'>Contact Information</H3>";

                echo "<table id='tableinfo'>";
                echo "<tr><td width='130px'><b>Phone Number</b></td>";
                echo "<td>" . $phone . "</td></tr>";
                echo "<tr><td width='130px'><b>Email</b></td>";
                echo "<td>" . $email . "</td></tr>";
                echo "<tr><td width='130px'><b>Address</b></td>";
                echo "<td>" . $address . "</td></tr>";
                echo "</table>";

              ?>
            </div>
          </div>
        </li>
        </ul>
      </div>



    </div>
    <!--end of body content-->
  </div>
  <footer>
    <a href="dashboard.php">HRMSystem</a> &copy; 2019 All Rights Reserved.<br/><a href="dterms.php">Terms & Conditions</a>-<a href="dprivacy.php">Privacy & Policies</a><br/>Version 1.0.0.1
  </footer>

  </body>
</html>
