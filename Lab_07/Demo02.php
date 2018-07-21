<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Demo 01</title>
    <style type="text/css">
        span{
            display: inline-block;
            width: 100px;
        }
    </style>
</head>
<body>
    <form action="exDemo02.php" method="post">
        <div>
            <span>User name:</span>
            <input type="text" name="us" require />
        </div>
        <div>
            <span>Password:</span>
            <input type="password" name="pw" require />
        </div>
        <div>
            <span></span>
            <button type="submit">Login</button>
        </div>
        
    </form>
</body>
</html>