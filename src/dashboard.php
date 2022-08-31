<!--session_start-->
<?php
  session_start();
?>
<!--include_once-->
<?php
    include_once 'utils/config.php';
?>
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
    <link rel="stylesheet" type="text/css" href="css/dashboard.css">
    <script src="javaScript/dashboard.js"></script>
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

    <!--DASHBOARD content-->

    <div class="div3">
      <div class="bcontent">
        <?php echo "<H1 class='pageTitle'>Welcome to Dashboard " . $fname . " " . $lname . "</h1>"; ?>
        <ul id="pageNav">
          <li>Dashboard</li>
        </ul>
        <div id="quicklink">
          <fieldset>
            <legend>Quick Link</legend>
              <ul id="bodyul">
                <li>
                    <div class="d1" onclick="window.location.href='profile.php';">
                      <p class="quickbox">Profile</p>

                    </div>
                </li>
                <li>
                    <div class="d2" onclick="window.location.href='attendance.php';">
                      <p class="quickbox">Attendance</p>

                    </div>
                </li>
                <li>
                    <div class="d3" onclick="window.location.href='leave.php';">
                      <p class="quickbox">Leave</p>

                    </div>
                </li>
                <li>
                    <div class="d4" onclick="window.location.href='empsalary.php';">
                      <p class="quickbox">Payroll</p>

                    </div>
                </li>
                <li>
                    <div class="d5" onclick="window.location.href='reproblem.php';">
                      <p class="quickbox">Report</p>

                    </div>
                </li>
              </ul>
          </fieldset>
        </div>
        <div id="boxbox">
          <ul>
            <li>
              <div class="attendancebox">
                <fieldset class="boxboxclass">
                  <legend>Employee Attendance</legend>

                </fieldset>
              </div>
            </li>
            <li>
              <div class="leavebox">
                <fieldset class="boxboxclass">
                  <legend>Employee Leave</legend>

                </fieldset>
              </div>
            </li>
          </ul>
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
