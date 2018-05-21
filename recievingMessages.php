<?php
    session_start();
    $connection = mysqli_connect("localhost", "root", "", "classroom_chatroom", "3306");
    if(mysqli_connect_errno()){
        echo "Error: Connection to database has failed. Please try again later.";
        exit;
    }

    $query = "SELECT * FROM tbl_messages";

    $result = mysqli_query($connection,$query) or die ("Error in query: " . mysqli_error($connection));

    while($row = mysql_fetch_row($result)){
        echo "<br/> $row[3] <br/>";
        echo "$row[1] $row[2]";
    }
?>