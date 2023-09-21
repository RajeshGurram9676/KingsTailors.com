<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login </title> 
    <link rel="stylesheet" href="style1.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   </head>
<body>
  <div class="wrapper">
    <h2>Login Here</h2>
    <form name="frmRegistration" action="./login_processor.php" method="get" id="frmRegistration" onsubmit= "return login()">
      <div class="input-box">
      <input placeholder="Enter Your Email" type="text" name="email" id="email" value="" >
          <span id="isemailValid"></span>
      </div>
      <div class="input-box">
      <input type="password" placeholder="Enter Your Password" name="password" id="password" value="">
          <span id="ispasswordValid"></span>
      </div>
      <div class="input-box button">
        <input type="Submit" value="Login">
      </div>
      <div class="text">
        <h3>Don't have an account? <a href="register1.php">Register Here</a></h3>
      </div>
    </form>
  </div>
  <?php
  if (isset($_GET['login']) && !empty($_GET['login']))
{
    ?>
    <script>
        swal ( "Oops" ,  "Invalid Login Credentials!" ,  "error" )
    </script>
    <?php
}
?>
<script>
  function login(){
   var isemailValid = true;
   var ispasswordValid = true;
   /*..........For Email...........*/
   if (document.getElementById("email").value == "")
   {
    isemailValid = false;
    document.getElementById("isemailValid").innerHTML = "&#x2716; Pease Enter Your Email";
    document.getElementById("isemailValid").style.color = "red";
   }
   else if( /^\w+([\.-]?\w+)*@\w+([-]?\w+)*\.\w{2,3}([\.]?\w{2,3})*$/.test(document.getElementById("email").value) == false)
   {
      isemailValid = false;
      document.getElementById("isemailValid").innerHTML = "&#x2716; Pease Enter Valid Email";
      document.getElementById("isemailValid").style.color = "red";
   }
   else
   {
    islemailValid = true;
    document.getElementById("isemailValid").innerHTML = "";
   }
   /*..........For Password...........*/
   if (document.getElementById("password").value == "")
   {
    ispasswordValid = false;
    document.getElementById("ispasswordValid").innerHTML = "&#x2716; Pease Enter Your Password <br/> ";
    document.getElementById("ispasswordValid").style.color = "red";
   }
   else
   {
    ispasswordValid = true;
    document.getElementById("ispasswordValid").innerHTML = "";
   }  
   if (isemailValid == false || ispasswordValid == false)
   {
    return false;
   }
   else{
    return true;
   }
}
function loginpage(){
   window.location.href = "loginpage1.php";
}
</script>
</body>
</html>