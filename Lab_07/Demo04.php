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
    <form action="exDemo04.php" method="post" enctype="multipart/form-data">
        <div>
            <span>Upload file:</span>
            <input type="file" name="fHinh" require />
        </div>
        <div>
            <span></span>
            <button type="submit">Upload</button>
        </div>
    </form>
</body>
</html>