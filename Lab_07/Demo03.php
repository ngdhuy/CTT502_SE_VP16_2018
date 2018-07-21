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
    <form action="Demo03.php" method="get">
        <div>
            <span>Keyword:</span>
            <input type="text" name="txtKeyword" require />
        </div>
        <div>
            <span></span>
            <button type="submit">Login</button>
        </div>
    </form>
    <hr />
    <form action="Demo03.php?value=404" method="post">
        <div>
            <span>Tag:</span>
            <input type="text" name="txtTag" require />
        </div>
        <div>
            <span></span>
            <button type="submit">Login</button>
        </div>
    </form>
    <?php
        if(isset($_GET["txtKeyword"])){
            $keyword = $_GET["txtKeyword"];
            echo $keyword;
        }
        if(isset($_POST["txtTag"])){
            $value = $_GET["value"];
            $tag = $_POST["txtTag"];

            echo "$tag = $value";
        }
    ?>
</body>
</html>