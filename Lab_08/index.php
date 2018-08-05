<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Mã bưởi</th>
            <th>Tên bưởi</th>
            <th>Giá</th>
            <th>Tên loại bưởi</th>
        </tr>
        <?php
            include_once("DataProvider.php");

            $sql = "SELECT MaBuoi, TenBuoi, Gia, TenLoaiBuoi
                    FROM buoi b, loaibuoi l
                    WHERE b.MaLoaiBuoi = l.MaLoaiBuoi";

            $result = DataProvider::ExecuteQuery($sql);
            while($row = mysqli_fetch_array($result)){
                $maBuoi = $row["MaBuoi"];
                $tenBuoi = $row["TenBuoi"];
                $gia = $row["Gia"];
                $tenLoaiBuoi = $row["TenLoaiBuoi"];

                include("templateBuoi.php");
            }
        ?>
    </table>
</body>
</html>