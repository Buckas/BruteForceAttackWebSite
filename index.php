<html>
<head>
    <title>Brute Force Login Example</title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="login.css" />
</head>

<body>
    <form action="validate.php" method="post">
        <!--<form action="test2.php" method="post"> -->
        <div class="login-box">
            <h1>Login</h1>

            <div class="textbox">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" placeholder="Username"
                    name="username" value="" />
            </div>

            <div class="textbox">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input type="password" placeholder="Password"
                    name="password" value="" />
            </div>

            <input class="button" type="submit"
                name="login" value="Sign In" />
            <div>
            <?php
            session_start();
            $loggedIn = $_SESSION["loggedIn"];
                        
            // SET Primary variables with values 
            if ($loggedIn == "FALSE") {
                echo "Incorrect login details";
            }
            ?>
            
            </div>
        </div>
    </form>
</body>
</html>