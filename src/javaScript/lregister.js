function checkpassword(){
  var password1 = register.password1.value;
  var password2 = register.password2.value;

  if (password1 == password2)
    Location('utils/signup.php');

  else
    alert("Password does not match!!!");

}
