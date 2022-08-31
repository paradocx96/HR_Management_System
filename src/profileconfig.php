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

  $_GET['uid'] = $_SESSION['uid'];
  $errors = array();

  if (isset($_GET['uid'])) {
    //getting information
    $uid = mysqli_real_escape_string($conn,$_GET['uid']);
    $query = "SELECT * FROM user WHERE id='{$uid}' LIMIT 1";

    $result_set = $conn->query($query);

    if ($result_set) {
      if ($result_set->num_rows == 1) {
        //user info
        $result = $result_set->fetch_assoc();
        $fname       = $result["fname"];
        $lname       = $result["lname"];
        $designation = $result["designation"];
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


  //submit data
  if(isset($_POST['submit'])) {
    // Escape user inputs for security
    $_POST["id"] = $_GET['uid'];
    $id          = $_POST["id"];
    $fname       = $_POST["fname"];
    $lname       = $_POST["lname"];
    $designation = $_POST["designation"];
    $nic         = $_POST["nic"];
    $nationality = $_POST["nationality"];
    $religion    = $_POST["religion"];
    $mstatus     = $_POST["mstatus"];
    $gender      = $_POST["gender"];
    $phone       = $_POST["phone"];
    $email       = $_POST["email"];
    $birthday    = $_POST["birthday"];
    $address     = $_POST["address"];
    $nofchildren = $_POST["nofchildren"];
    $username    = $_POST["username"];

    $query ="UPDATE user SET fname='$fname',lname='$lname',designation='{$designation}',nic = '{$nic}',nationality = '{$nationality}',religion = '{$religion}',mstatus = '{$mstatus}',gender = '{$gender}',phone = {$phone},email = '{$email}',birthday = {$birthday},address = '{$address}', nofchildren = {$nofchildren},username = '{$username}' WHERE id = {$id} LIMIT 1";
    $result = $conn->query($query);
    if($result) {
      header('Location:profile.php?user_updated=true');
    }
    else{
      $errors[] = 'Failed to modify';
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

    <div class="div3">

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
          <H1>Edit Profile</h1>
            <form action="profileconfig.php" method="post" class="form">
              <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
              <p>
                <label for="">First Name</label>
                <input type="text" name="fname" value="<?php echo $fname ?>">
              </p>
              <p>
                <label for="">Last Name</label>
                <input type="text" name="lname" value="<?php echo $lname ?>">
              </p>
              <p>
                <label for="">Username</label>
                <input type="text" name="username" value="<?php echo $username ?>">
              </p>
              <p>
                <label for="">Designation</label>
                <input type="text" name="designation" value="<?php echo $designation ?>">
              </p>
              <p>
                <label for="">NIC</label>
                <input type="text" name="nic" value="<?php echo $nic ?>">
              </p>
              <p>
                <label for="">Gender</label>
                <input type="text" name="gender" value="<?php echo $gender ?>">
              </p>
              <p>
                <label for="">Birthday</label>
                <input type="date" name="birthday" value="<?php echo $birthday ?>">
              </p>
              <p>
                <label for="">Nationality</label>
                <input type="text" name="nationality" value="<?php echo $nationality ?>">
              </p>
              <p>
                <label for="">Religion</label>
                <input type="text" name="religion" value="<?php echo $religion ?>">
              </p>
              <p>
                <label for="">Marital Status</label>
                <input type="text" name="mstatus" value="<?php echo $mstatus ?>">
              </p>
              <p>
                <label for="">No of Children</label>
                <input type="number" name="nofchildren" value="<?php echo $nofchildren ?>">
              </p>
              <p>
                <label for="">Phone Number</label>
                <input type="number" name="phone" value="<?php echo $phone ?>">
              </p>
              <p>
                <label for="">Email</label>
                <input type="email" name="email" value="<?php echo $email ?>">
              </p>
              <p>
                <label for="">Address</label>
                <input type="text" name="address" value="<?php echo $address ?>">
              </p>
              <br>
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
  </body>
  <footer>
    <a href="dashboard.php">HRMSystem</a> &copy; 2019 All Rights Reserved.<br/><a href="dterms.php">Terms & Conditions</a>-<a href="dprivacy.php">Privacy & Policies</a><br/>Version 1.0.0.1
  </footer>
  </html>

  <?php
    // Close connection
    mysqli_close($conn);
  ?>
