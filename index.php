<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>

    <style>
         body{
            text-align: center;
            background-color: rgb(62,62,62);
            font-family: 'Courier New';
            width: 100%;
            height: 100%;
        }
        
        h1{
            background-color:rgb(10,161,163);
            text-align: center;
            color:rgb(62,62,62);
            margin: 0 0 50px 0;
            padding-top: 40px;
            padding-bottom: 40px;
            width: 99%;
        }

        #button{
            background-color: rgba(0,0,0,0);
            color: rgb(10,161,163);
            border-radius: 8px;
            height: 70px;
            width: 200px;
            border: 2px solid rgb(10,161,163);
            font-family: 'Courier New';
            margin: 20px;
        }

        #button:hover{
            box-shadow: 0 8px 18px 0 rgba(0,0,0,0.2);
            background-color: rgb(10,161,163);
            color: rgb(62,62,62);
            font-size: 20px;
            width: 210px;
            height: 80px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Welcome to Classroom Chatroom</h1>

	<div id="welcome">
        <form action="signupform.php">
			<input type="submit" id="button" value="Sign Up"></br>
		</form>

		<form action="loginform.php">
			<input type="submit" id="button" value="Login"></br>
		</form>
    </div>
    
</body>
</html>
