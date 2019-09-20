<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/profileconfig.css">
    <script src="javaScript/profileconfig.js"></script>
    <title>ABC Company</title>
  </head>
  <body>
    <div class="div1">
      <div class="header">
        <table class="table1">
          <tr>
            <td width="150px"><img src="image/logo.jpg" class="mainlogo"></td>
            <td width="750px"><h1>CEMEX Pro<br>Human Resourse Management System</h1></td>
            <td width="100px"><img src="image/user.png" class="userlogo"></td>
            <td width="92px">
              <div class="profileimg">
                <a class="pidropbtn a" href="#">Username</a>
                <div class="pidropcon">
                  <a class="a" href="profile.php">Profile</a>
                  <a class="a" href="#">Setting</a>
                  <a class="a" href="#">Logout</a>
                </div>
              </div>
            </td>
          </tr>
        </table>
      </div>
      <div class="div2">
        <ul>
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
              <a href="#">Company</a>
              <a href="#">Employer</a>
              <a href="#">Employee</a>
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
              <a href="#">Candidates</a>
              <a href="#">Vacancies</a>
            </div>
          </li>
        </ul>
    </div>

    <H1>profile config</H1>
    <div>
      <form method="post">
      <h2>Change Password</H2>
      Username<input type="text" name="username" placeholder="Username" class="textbox" required>
      <br>
      <br>
      <p>Current Password</p><input type="password" name="Password" placeholder="Password" class="textbox" required>
      <br>
      <br>
      <p>New Password</p><input type="password" name="newpassword" placeholder="Password" class="textbox" required>
      <br>
      <br>
      <p>Confirm New Password</p><input type="password" name="confnewpassword" placeholder="Password" class="textbox" required>
      <br>
      <br>
      <button type="submit">Save</button>
      <br>
      </form>
    </div>







    </div>
  </body>
</html>
