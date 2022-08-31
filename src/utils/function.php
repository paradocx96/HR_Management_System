<?php

//declare function
function verify_sql($result_set) {

  //connection to Database
  global $conn;

  //checking any errors in sql query
  if (!$result_set) {
    die ("Database query failed :" . mysqli_error($conn));
  }
};

 ?>
