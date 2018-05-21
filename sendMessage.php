<?php
    session_start();
    $mess = $_POST['messageBox'];

    $connection = mysqli_connect("localhost", "root", "", "classroom_chatroom", "3306");
    if(mysqli_connect_errno()){
        echo "Error: Connection to database has failed. Please try again later.";
        exit;
    }

    $usname = $_SESSION["username"];
    $query = "INSERT INTO tbl_messages(username,messages) VALUES ('$usname','$mess')";

    $result = mysqli_query($connection,$query) or die ("Error in query: " . mysqli_error($connection));

    header('Location:chatroom.php');
?>