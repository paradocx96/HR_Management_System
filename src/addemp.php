<!--session_start-->
<?php session_start(); ?>
<!--include_once-->
<?php include_once 'utils/config.php'; ?>
<?php include_once 'utils/function.php'; ?>
<!--checking login-->
<?php
  //checking if user is logged in
  if (!isset($_SESSION['uid'])) {
    header('Location:login.php');
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/addemp.css">
    <script src="javaScript/addemp.js"></script>
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

    <!--content-->

    <div class="div5">
    <table>
      <tr>
        <td width="900px"><H1>Add Employee</H1></td>
        <td><button onclick="location.href='allemp.php';" class="btn1" href="addemp.php">All Employee</button></td>
      </tr>
    </table>
  </div>


    <div>
      <form method="post">
        <fieldset>
          <legend>Personal Informations</legend>
          <table>
            <tr>
              <td>
                <label for="fname">First Name</label><br>
                <input type="text" id="fname" name="firstname" required>
              </td>
              <td>
                <label for="lname">Last Name</label><br>
                <input type="text" id="lname" name="lastname" required>
              </td>
            </tr>

            <tr>
              <td>
                <label for="birthday">Birthday</label><br>
                <input type="date" id="birthday" name="birthday" required>
              </td>
              <td>
                <label for="gender">Gender</label><br>
                <select id="gender" name="gender">
                  <option value="Male" required><p>Male</p></option>
                  <option value="Female" required><p>Female</p></option>
                </select>
              </td>
            </tr>

            <tr>
              <td>
                <label for="address">Address</label><br>
                <input type="text"id="address" name="address" required>
              </td>
            </tr>

























          </table>
        </fieldset>
      </form>
    </div>






    <!--end of body content-->
  </div>
  <footer>
    <a href="dashboard.php">HRMSystem</a> &copy; 2019 All Rights Reserved.<br/><a href="dterms.php">Terms & Conditions</a>-<a href="dprivacy.php">Privacy & Policies</a><br/>Version 1.0.0.1
  </footer>

  </body>
</html>
