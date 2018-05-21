<!DOCTYPE html>
<html>
    <head>
        <title>Contact List</title>
        <link rel='stylesheet' type='text/css' href='chatroomStylesheet.css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>

    <body style="background-color:rgb(10,161,163); width:100%;">
        <h1> Contact List </h1>
        <div id="messageArea" name="messageArea">
            <?php
                $connection = mysqli_connect("localhost", "root", "", "classroom_chatroom", "3306");
                if(mysqli_connect_errno()){
                    echo "Error: Connection to database has failed. Please try again later.";
                    exit;
                }

                $query = "SELECT * FROM tbl_user_accounts";

                $result = mysqli_query($connection,$query) or die ("Error in query: " . mysqli_error($connection));

                while($row = mysqli_fetch_row($result)){
                    echo "<table>
                            <tr>
                                <td>Username</td>
                                <td>: $row[1] </td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>: $row[3] </td>
                            </tr>
                        </table>";
                }
            ?>
        </div>
        
        <button onclick="goback()" id="sendButton" style="margin-left:45%;">Back</button>

        <script>
            function goback(){
                location.href="chatroom.php";
            }
        </script>
    </body>
</html>
