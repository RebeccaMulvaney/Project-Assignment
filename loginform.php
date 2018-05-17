<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    
    <head>
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="formsStylesheet.css">
    </head>

    <body>
        <form method="POST">
            Username: <input type='text' name='username'/><br/>
            Password: <input type='password' name='password'/><br/>
            <input type='submit' name='submit' value='Login'/>
        </form>
        
        <p>
            Don't have an account? <a href="singupform.php">Sing Up here!</a>
        </p>

    <?php
        $uname = $_SESSION['username'];
        $pass = $_POST['password'];

        $connection = mysqli_connect("localhost", "root", "", "classroom_chatroom", "3306");
        if(mysqli_connect_errno()){
            echo "Error: Connection to database has failed. Please try again later.";
            exit;
        }

        $query = "SELECT * FROM tbl_user_accounts WHERE username='$uname' AND userPassword='$pass'";

        $result = mysqli_query($connection,$query) or die ("Error in query: " . mysqli_error($connection));

        if($row = mysqli_fetch_row($result))
        {
            echo "<script>location.href = 'chatroom.php'</script>";
        }
        else{
            echo "<script>alert('Username and Password not registered.')</script>";
        }
    ?>
</html>