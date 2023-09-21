<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Register </title> 
    <link rel="stylesheet" href="style1.css">
   </head>
<body>
  <div class="wrapper">
    <h2>Register Here</h2>
    <form name="frmRegistration" action="./process.php" method="get" id="frmRegistration" onsubmit= "return validate()">
      <div class="input-box">
            <input placeholder="Enter Your First Name" type="text" name="fname" id="fname" value="" >
            <span id="isfnameValid"></span>
      </div>
      <div class="input-box">
      <input placeholder="Enter Your Last Name" type="text" name="lname" id="lname" value="" >
          <span id="islnameValid"></span>
      </div>
      <div class="input-box">
          <input placeholder="Enter Your Email" type="text" name="email" id="email" value="" >
          <span id="isemailValid"></span>
        </div>
      <div class="input-box">
      <input type="password" placeholder="Password" name="password" id="password" value="">
          <span id="ispasswordValid"></span>
      </div>
      <div class="input-box">
      <input type="password" placeholder="Confirm Password" name="cfmpassword" id="cfmpassword" value="">
          <span id="iscfmpasswordValid"></span>
      </div>
      <div class="input-box">
            <input type="phone" name="mobile" id="mobile" value="" placeholder="Phone">
            <span id="ismobileValid"></span>
        </div>
      <div class="policy">
        <input type="checkbox" name="checkbox" id="checkbox" value="">
        <h3>I accept all terms & condition</h3>
        <span id="ischeckboxValid"></span>
      </div>
      <div class="input-box button">
        <input type="Submit" value="Register Now">
      </div>
      <div class="text">
        <h3>Already have an account? <a href="./loginpage1">Login Here</a></h3>
      </div>
    </form>
  </div>
  <?php
if (isset($_GET['signup']) && !empty($_GET['signup']))
{
    header("Location: popup.php?");
}
else
{

}
?>
<script>
    function validate()
{
   var isfnameValid = true;
   var islnameValid = true;
   var isemailValid = true;
   var ispasswordValid = true;
   var iscfmpasswordValid = true;
   var ismobileValid = true;
   var ischeckboxValid = true;
/*..........For First Name...........*/
   if (document.getElementById("fname").value == "")
   {
    isfnameValid = false;
    document.getElementById("isfnameValid").innerHTML = "&#x2716; Pease Enter First Name";
    document.getElementById("isfnameValid").style.color = "red";
   }
   else
   {
    isfnameValid = true;
    document.getElementById("isfnameValid").innerHTML = "";
   }
/*..........For Last Name...........*/
   if (document.getElementById("lname").value == "")
   {
    islnameValid = false;
    document.getElementById("islnameValid").innerHTML = "&#x2716; Pease Enter Last Name";
    document.getElementById("islnameValid").style.color = "red";
   }
   else
   {
    islnameValid = true;
    document.getElementById("islnameValid").innerHTML = "";
   }
   /*..........For Email...........*/
   if (document.getElementById("email").value == "")
   {
    isemailValid = false;
    document.getElementById("isemailValid").innerHTML = "&#x2716; Pease Enter Email";
    document.getElementById("isemailValid").style.color = "red";
   }
   else if(/^\w+([\.-]?\w+)*@\w+([-]?\w+)*\.\w{2,3}([\.]?\w{2,3})*$/.test(document.getElementById("email").value) == false)
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
    document.getElementById("ispasswordValid").innerHTML = "&#x2716; Pease Enter Password";
    document.getElementById("ispasswordValid").style.color = "red";
   }
   else if(/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{6,}$/.test(document.getElementById("password").value) == false)
   {
      ispasswordValid = false;
      document.getElementById("ispasswordValid").innerHTML = "&#x2716;Must Have 6 letters & 1 upper,1 lower & 1 number";
      document.getElementById("ispasswordValid").style.color = "red";
   }
   else
   {
    ispasswordValid = true;
    document.getElementById("ispasswordValid").innerHTML = "";
   }  
      /*..........For Confirm Password...........*/
      if (document.getElementById("cfmpassword").value == "")
      {
       iscfmpasswordValid = false;
       document.getElementById("iscfmpasswordValid").innerHTML = "&#x2716; Please confirm Password";
       document.getElementById("iscfmpasswordValid").style.color = "red";
      }
      else if(document.getElementById("password").value != document.getElementById("cfmpassword").value)
      {
         iscfmpasswordValid = false;
         document.getElementById("iscfmpasswordValid").innerHTML = "&#x2716; Password & confirm password must be same";
         document.getElementById("iscfmpasswordValid").style.color = "red";
      }
      else
      {
       iscfmpasswordValid = true;
       document.getElementById("iscfmpasswordValid").innerHTML = "";
      } 
      /*..........For Mobile Number...........*/
      if (document.getElementById("mobile").value == "")
      {
        ismobileValid = false;
        document.getElementById("ismobileValid").innerHTML = "&#x2716; Please Enter Phone Number";
        document.getElementById("ismobileValid").style.color = "red";
      }
      else if(/\(?([0-9]{3})\)?([ .-]?)([0-9]{3})\2([0-9]{4})/.test(document.getElementById("mobile").value) == false)
      {
         ismobileValid = false;
         document.getElementById("ismobileValid").innerHTML = "&#x2716; Please Enter Valid Phone Number";
         document.getElementById("ismobileValid").style.color = "red";
      }
      else{ 
         ismobileValid = true;
         document.getElementById("ismobileValid").innerHTML = "";
      }
      /*..........For checkbox...........*/
   if (document.getElementById("checkbox").value == "")
   {
    ischeckboxValid = false;
    document.getElementById("ischeckboxValid").innerHTML = "&#x2716; Pease Accept Terms & Conditions";
    document.getElementById("ischeckboxValid").style.color = "red";
   }
   else
   {
    ischeckboxValid = true;
    document.getElementById("ischeckboxValid").innerHTML = "";
   }
   if (isfnameValid == false || islnameValid == false || isemailValid == false || ispasswordValid == false || ismobileValid == false || iscfmpasswordValid == false ischeckboxValid == false)
   {
    return false;
   }
   else{
      return true;
   }
}
</script>
</body>
</html>