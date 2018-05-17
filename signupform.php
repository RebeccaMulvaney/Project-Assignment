<!DOCTYPE html>
<html>
    <head>
        <title>Signup</title>
        <link rel="stylesheet" type="text/css" href="formsStylesheet.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    </head>
    <body>
        <h1> Sign Up </h1>
        <form method="POST">
            <div class="form-group row">
                <label for="inputUsername3" class="col-sm-3 col-form-label">Username</label>
                <div class="col-sm-9">
                <input type="text" class="form-control" id="inputUsername3" placeholder="Username" name="username">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-9">
                <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-3 col-form-label">Password</label>
                <div class="col-sm-9">
                <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-3 col-form-label">Confirm Password:</label>
                <div class="col-sm-9">
                <input type="password" class="form-control" id="inputPassword3" placeholder="Confirm Password" name="confirmPass">
                </div>
            </div>
            <p>
                Already have an account? <a href="loginform.php">Login here!</a>
            </p>
            <input type="submit" name="submit" id="submitButton" value="Sign Up"/>
        </form>

        <?php
            $uname = $_POST['username'];
            $email = $_POST['email'];
            $pass = $_POST['password'];
            $conPass = $_POST['confirmPass'];

            $connection = mysqli_connect("localhost", "root", "", "classroom_chatroom", "3306");
            if(mysqli_connect_errno()){
                echo "Error: Connection to database has failed. Please try again later.";
                exit;
            }
            
            if($pass != $conPass){
                echo "Passwords do not match!";
            }

            $query = "SELECT * FROM tbl_user_accounts WHERE username='$uname' OR email='$email'";
            $result = mysqli_query($connection,$query) or die ("Error in query: " . mysqli_error($connection));
            $row = mysqli_fetch_row($result);

            if($row){
                if($row[1] === $uname){
                    echo "<script>alert('Username already exists')</script>";
                }
                if($row[3] === $email){
                    echo "<script>alert('Email already exists')</script>";
                }
            }else{
                $query2 = "INSERT INTO tbl_user_accounts(username,userPassword,email) VALUES('$uname','$pass','$email')";
                mysqli_query($connection,$query2);
                echo "<script>location.href = 'welcome.php'</script>";
            }
        ?>
    </body>
</html>