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

        $txtEmail = $_GET['email'];
        $txtPassword = $_GET['password'];

        $query = "select * from tbl_login where Email='$txtEmail' and Password='$txtPassword'";

        $result = mysqli_query($connection,$query);

        if(mysqli_num_rows($result) == 1)
        {
            header("Location: HomePage.php?");
        }
        else
        {
            header("Location: LoginPage.php?login=failed");
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