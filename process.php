<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processor</title>
</head>
<body>
    <script src="./app.js"></script>
    <?php
        $connection = mysqli_connect("localhost","root","");

        if(!$connection)
        {
            echo "connection failed: ",mysqli_error($connection),"<br/>";
            exit;
        }
        else
        {

        }

        $isDatabaseSelected = mysqli_select_db($connection,"db_kingstailors");

        if(!$isDatabaseSelected)
        {
            echo "database selection failed: ",mysqli_error($connection),"<br/>";
            exit;
        }
        else
        {

        }

        $query = "select 1 from tbl_login";

        $isTableExists = mysqli_query($connection,$query);

        if(!$isTableExists)
        {
            echo "table doesnot exists: ",mysqli_error($connection),"<br/>";
            exit;
        }
        else
        {

        }

        $txtFname = $_GET['fname'];
        $txtLname = $_GET['lname'];
        $txtEmail = $_GET['email'];
        $txtPassword = $_GET['password'];
        $txtCfmpassword = $_GET['cfmpassword'];
        $txtMobile = $_GET['mobile'];

        $query = "insert into tbl_login(First_Name,Last_Name,Email,Password,Confirm_Password,Mobile_Number) values('$txtFname','$txtLname','$txtEmail','$txtPassword','$txtCfmpassword','$txtMobile')";

        $isDataInserted = mysqli_query($connection,$query);

        if(!$isDataInserted)
        {
            echo "Data Insertion Failed: ",mysqli_error($connection),"<br/>";
            exit;
        }
        else
        {
            header("Location: Register.php?signup=successful");
        }

        $isConnectionClosed = mysqli_close($connection);

        if(!$isConnectionClosed)
        {
            echo "Connection Close Failed: ",mysqli_error($connection),"<br/>";
            exit;
        }
        else
        {

        }
    ?>
</body>
</html>