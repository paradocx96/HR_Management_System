<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/adminsetting.css">
    <script src="javaScript/adminsetting.js"></script>
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
                <a class="pidropbtn a" href="#">Username</a>
                <div class="pidropcon">
                  <a class="a" href="profile.php">Profile</a>
                  <a class="a" href="adminsetting.php">Setting</a>
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
      <H1 class="pageTitle">Admin Setting</H1>
      <div class="divcp">
      <form method="post">
      <h2 align="center">Change Password</H2>
        <table>
          <tr>
            <td><p>Username</p></td>
            <td><input type="text" name="username" placeholder="Username" class="textbox" required></td>
          </tr>
          <tr>
            <td><p>Current Password</p></td>
            <td><input type="password" name="Password" placeholder="Current Password" class="textbox" required></td>
          </tr>
          <tr>
            <td><p>New Password</p></td>
            <td><input type="password" name="newpassword" placeholder="New Password" class="textbox" required></td>
          </tr>
          <tr>
            <td><p>Confirm New Password</p></td>
            <td><input type="password" name="confnewpassword" placeholder="Confirm New Password" class="textbox" required></td>
          </tr>
          <tr>
            <td><button type="submit" class="btn">Save</button></td>
          </tr>
        </table>
      </form>
    </div>


  </div>
  <!--end of body content-->
</div>
<footer>
  <a href="dashboard.php">HRMSystem</a> &copy; 2019 All Rights Reserved.<br/><a href="terms.php">Terms & Conditions</a>-<a href="privacy.php">Privacy & Policies</a><br/>Version 1.0.0.1
</footer>

</body>
</html>
