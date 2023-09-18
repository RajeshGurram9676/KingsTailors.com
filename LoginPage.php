<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Login Here</h1>
    <form name="frmRegistration" action="./login_processor.php" method="get" id="frmRegistration" onsubmit= "return login()">
    <center>
        <table>
            <tr>
                <td>Email:</td>
                <td>
                    <input type="text" name="email" id="email" value="" placeholder="Enter Your Email Here" style="width:218px;" >
                    <span id="isemailValid"></span>
                </td>
            </tr>
            </tr>
            <tr>
                <td>Password:</td>
                <td>
                    <input type="text" name="password" id="password" value="" placeholder="Enter Your Password Here" style="width:218px;" >
                    <span id="ispasswordValid"></span>
                </td> 
            </tr>
        </tr> 
    </table>
    <input type="submit" class="button" value="Login">
        <p>Don't have an account? <a href="./Register.php">Register Here</a>.</p></br>
</center>
</form>
<?php
if (isset($_GET['login']) && !empty($_GET['login']))
{
    echo "<center><tr><td><p>hello</p></td></tr></center>";
}
?>
<script src="./app.js"></script>
</body>
</html>