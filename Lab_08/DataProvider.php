<?php
    class DataProvider{
        public static function ExecuteQuery($sql){
            // 1. Mở kết nối đến CSDL
            $conn = mysqli_connect('localhost', 'root', '', 'mrbuoi') or die("Cannot connect to DB");
            // 2. Set mã UTF-8 cho querry
            mysqli_query($conn, "SET NAMES 'utf8'");
            // 3. Thực thi câu Query
            $result = mysqli_query($conn, $sql);
            // 4. Đóng kết nối
            mysqli_close($conn);
            // 5. Trả kết quả ra ngoài hàm
            return $result;
        }
    }

?>