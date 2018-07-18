<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php echo "<h2>Hello Mr Buoi</h2>"; ?>
    <?php
        include_once("Xe.php");
        include_once("XeDap.php");
        include_once("XeHoi.php");

        $arrXe = [];
        $arrXe[] = new XeDap();
        $arrXe[] = new XeDap();
        $arrXe[] = new XeHoi();
        $arrXe[] = new XeDap();
        $arrXe[] = new XeDap();
        $arrXe[] = new XeHoi();
        $arrXe[] = new XeDap();
        $arrXe[] = new XeDap();
        $arrXe[] = new XeHoi();
        $arrXe[] = new XeDap();
        $arrXe[] = new XeDap();

        foreach($arrXe as $xe){
            echo "<div>";
            $xe->In();
            echo "</div>";
        }
    ?>
</body>
</html>