<?php
    session_start();
    $_SESSION['username'] = $_POST['username'];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Classroom Chatroom</title>
        <link rel='stylesheet' type='text/css' href='chatroomStylesheet.css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        
    </head>

    <body style="background-color:rgb(10,161,163); width:100%;">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="chatroom.php">Classroom Chatroom</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                <a class="nav-item nav-link" href="help.php">Help</a>
                <a class="nav-item nav-link" href="about.php">About</a>
                <a class="nav-item nav-link" href="contactus.php">Contact Us</a>
                </div>
            </div>
            
        </nav>
        <a href="logout.php" class="a1">Logout</a>
        <a href="contactlist.php" class="a2">Contact List</a>
        <p style="color:rgb(62,62,62); text-align:center;">
            <?php
                echo "You are logged in as: " . $_SESSION["username"];
            ?>
        </p>
        <h1> Classroom Chatroom </h1>
        <div id="messageArea" name="messageArea">
            
            <?php

                $connection = mysqli_connect("localhost", "root", "", "classroom_chatroom", "3306");
                if(mysqli_connect_errno()){
                    echo "Error: Connection to database has failed. Please try again later.";
                    exit;
                }

                $query = "SELECT * FROM tbl_messages";

                $result = mysqli_query($connection,$query) or die ("Error in query: " . mysqli_error($connection));

                while($row = mysqli_fetch_row($result)){
                    echo "<br/> $row[3] <br/>";
                    echo "$row[1]: $row[2]";
                }
            ?>
        </div>

        <form action="sendMessage.php" method="POST">
            <input type='text' name='messageBox' id='messageBox'/>
            <input type='submit' name='submit' id='sendButton' value='Send'/>
        </form>
       
    </body>
</html>
