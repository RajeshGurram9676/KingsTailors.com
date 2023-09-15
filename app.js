function validate()
{
   isfnameValid = true;
   islnameValid = true;
   isemailValid = true;
   ispasswordValid = true;
   iscfmpasswordValid = true;
/*..........For First Name...........*/
   if (document.getElementById("fname").value == "")
   {
    isfnameValid = false;
    document.getElementById("isfnameValid").innerHTML = "&#x2716; Pease Enter Your First Name";
    document.getElementById("isfnameValid").style.color = "red";
   }
   else
   {
    isfnameValid = true;
    document.getElementById("isfnameValid").innerHTML = "";
    document.getElementById("isfnameValid").style.color = "";
   }
/*..........For Last Name...........*/
   if (document.getElementById("lname").value == "")
   {
    islnameValid = false;
    document.getElementById("islnameValid").innerHTML = "&#x2716; Pease Enter Your Last Name";
    document.getElementById("islnameValid").style.color = "red";
   }
   else
   {
    islnameValid = true;
    document.getElementById("islnameValid").innerHTML = "";
    document.getElementById("islnameValid").style.color = "";
   }
   /*..........For Email...........*/
   if (document.getElementById("email").value == "")
   {
    isemailValid = false;
    document.getElementById("isemailValid").innerHTML = "&#x2716; Pease Enter Your Email";
    document.getElementById("isemailValid").style.color = "red";
   }
   else
   {
    islemailValid = true;
    document.getElementById("isemailValid").innerHTML = "";
    document.getElementById("isemailValid").style.color = "";
   }
   /*..........For Password...........*/
   if (document.getElementById("password").value == "")
   {
    ispasswordValid = false;
    document.getElementById("ispasswordValid").innerHTML = "&#x2716; Pease Enter Your Password";
    document.getElementById("ispasswordValid").style.color = "red";
   }
   else
   {
    ispasswordValid = true;
    document.getElementById("ispasswordValid").innerHTML = "";
    document.getElementById("ispasswordValid").style.color = "";
   }  
      /*..........For confirm Password...........*/
      if (document.getElementById("cfmpassword").value == "")
      {
        iscfmpasswordValue = false;
        document.getElementById("iscfmpasswordValid").innerHTML = "&#x2716; Confirm Your Password";
      }
   if (isfnameValid == false || islnameValid == false || isemailValid == false || ispasswordValid == false)
   {
    return false;
   }
   else{
    return true;
   }
}
function login(){
    isemailValid = true;
   ispasswordValid = true;
   /*..........For Email...........*/
   if (document.getElementById("email").value == "")
   {
    isemailValid = false;
    document.getElementById("isemailValid").innerHTML = "&#x2716; Pease Enter Your Email";
    document.getElementById("isemailValid").style.color = "red";
   }
   else
   {
    islemailValid = true;
    document.getElementById("isemailValid").innerHTML = "";
    document.getElementById("isemailValid").style.color = "";
   }
   /*..........For Password...........*/
   if (document.getElementById("password").value == "")
   {
    ispasswordValid = false;
    document.getElementById("ispasswordValid").innerHTML = "&#x2716; Pease Enter Your Password";
    document.getElementById("ispasswordValid").style.color = "red";
   }
   else
   {
    ispasswordValid = true;
    document.getElementById("ispasswordValid").innerHTML = "";
    document.getElementById("ispasswordValid").style.color = "";
   }  
   if (isemailValid == false || ispasswordValid == false)
   {
    return false;
   }
   else{
    return true;
   }
}
