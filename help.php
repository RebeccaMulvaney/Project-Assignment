<!DOCTYPE html>
<html>
<head>
    <title>Help</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="formsStylesheet.css" />
</head>
<body style="text-align:center;">
    <h1>Help</h1>
    <p>This program is a safe and friendly environment</p>
    <p>The user inputs his message in the text area and press the send button</p>
    <p>If the user does not input a message and presses the send button,</p>
    <p>and alert will be shown, advising the user to input a message</p>

    <button onclick="goback()" id="submitButton">Back</p>

    <script>
        function goback(){
            location.href = 'chatroom.php';
        }
    </script>
</body>
</html>