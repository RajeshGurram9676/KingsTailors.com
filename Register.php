<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form name="frmRegistration" action="popup.php" method="get" id="frmRegistration" onsubmit=" return validate()">
    <h1>Register Here</h1>
    <center>
        <table>
            <tr>
                <td>First Name:</td>
                <td>
                    <input type="text" name="fname" id="fname" value="" placeholder="Enter Your First Name Here" style="width:218px;">
                    <span id="isfnameValid"></span>
                </td>
            </tr>
            <tr>
                <td>Last Name:</td>
                <td>
                    <input type="text" name="lname" id="lname" value="" placeholder="Enter Your Last Name Here" style="width:218px;">
                    <span id="islnameValid"></span>
                </td>
            </tr>
            <tr>
                <td>Email:</td>
                <td>
                    <input type="text" name="email" id="email" value="" placeholder="Enter Your Email Here" style="width:218px;">
                    <span id="isemailValid"></span>
                </td>
            </tr>
            <tr>
                <td>Password:</td>
                <td>
                    <input type="text" name="Password" id="password" value="" placeholder="Enter Your Password Here" style="width:218px;">
                    <span id="ispasswordValid"></span>
                </td>
            </tr>
            <tr>
                <td>Confirm Password:</td>
                <td>
                    <input type="text" name="cfmpassword" id="cfmpassword" value="" placeholder="Re-Enter your Password Here" style="width:218px;">
                    <span id="iscfmpasswordValid"></span>
                    <span id="isalertpasswordValid"></span>
                </td>
            </tr>
            <tr>
                <td>Phone:</td>
                <td>
                    <select>
                        <option>+1</option>
                        <option>+91</option>
                    </select>
                    <input type="phone" name="mobile" id="mobile" value="" placeholder="Phone">
                    <span id="ismobileValid"></span>
                </td>
            </tr>               
        </table>
        <input type="submit" class="button" value="Register">
        <p>Already have an account? <a href="./LoginPage.php">Login Here</a>.</p> 
</center>
</form>
<script src="./app.js"></script>
</body>
</html>