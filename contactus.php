<!DOCTYPE html>
<html>
    <head>
        <title>Contact Us</title>
        <link rel="stylesheet" type="text/css" href="formsStylesheet.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>

    <body style="text-align:center; background-color: rgb(10,161,163);">
        <h1 style="color: rgb(10,161,163);"> Contact Us </h1>
        <form method="POST">
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-9">
                <input type="text" class="form-control" id="inputEmail3" placeholder="Enter your email here..." name="email">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputText3" class="col-sm-3 col-form-label">Message:</label>
                <div class="col-sm-9">
                <input type="text" class="form-control" id="inputText3" placeholder="Enter your message here..." name="message">
                </div>
            </div>
            <input type="submit" name="submit" id="submitButton" value="Send"/>
            </br>
            </br>
            <button onclick="goback()" name="back" id="submitButton">Back </button>
        </form>
        <?php
            if(isset($_POST['submit'])){
                $to = "rebecca.mulvaney.b42103@mcast.edu.mt";
                $subject = "contact us email";
                $txt = $_POST['message'];
                $headers = "From : " . $_POST['email'];

                mail($to,$subject,$txt,$header);

                echo "<script>alert('Email sent')</script>";
            }else if (isset($_POST['back'])){
                echo "<script>location.href = 'chatroom.php'</script>";
            }
        ?>
    </body>
</html>