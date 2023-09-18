function validate()
{
   var isfnameValid = true;
   var islnameValid = true;
   var isemailValid = true;
   var ispasswordValid = true;
   var iscfmpasswordValid = true;
   var ismobileValid = true;
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
   }
   /*..........For Email...........*/
   if (document.getElementById("email").value == "")
   {
    isemailValid = false;
    document.getElementById("isemailValid").innerHTML = "&#x2716; Pease Enter Your Email";
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
    document.getElementById("ispasswordValid").innerHTML = "&#x2716; Pease Enter Your Password";
    document.getElementById("ispasswordValid").style.color = "red";
   }
   else if(/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{6,}$/.test(document.getElementById("password").value) == false)
   {
      ispasswordValid = false;
      document.getElementById("ispasswordValid").innerHTML = "&#x2716; The password contains at least 6 characters, one lower case, one upper case letter, and one digit.";
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
       document.getElementById("iscfmpasswordValid").innerHTML = "&#x2716; Pease confirm Your Password";
       document.getElementById("iscfmpasswordValid").style.color = "red";
      }
      else if(document.getElementById("password").value != document.getElementById("cfmpassword").value)
      {
         iscfmpasswordValid = false;
         document.getElementById("iscfmpasswordValid").innerHTML = "&#x2716; Password and confirm password should be same";
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
        document.getElementById("ismobileValid").innerHTML = "&#x2716; Please Enter Your Phone Number";
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
   if (isfnameValid == false || islnameValid == false || isemailValid == false || ispasswordValid == false || ismobileValid == false || iscfmpasswordValid == false)
   {
    return false;
   }
   else{
      return true;
   }
}
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
    document.getElementById("ispasswordValid").innerHTML = "&#x2716; Pease Enter Your Password";
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
function openpopup(){
   popup.classList.add("open-popup");
}
function loginpage(){
   window.location.href = "./LoginPage.php";
}