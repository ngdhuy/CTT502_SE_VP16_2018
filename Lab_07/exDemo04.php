<?php
    if($_FILES["fHinh"]["size"] > 0)
    {
        move_uploaded_file($_FILES["fHinh"]["tmp_name"], "./img/".$_FILES["fHinh"]["name"]);
        if(file_exists("./img/".$_FILES["fHinh"]["name"])){
            echo "upload thanh cong <br />";
            echo 'Dường dẫn: upload/' . $_FILES['fHinh']['name'] . '<br>';
            echo 'Loại file: ' . $_FILES['fHinh']['type'] . '<br>';
            echo 'Dung lượng: ' . ((int)$_FILES['fHinh']['size'] / 1024) . 'KB <br />';
            echo "<img src='img/".$_FILES['fHinh']['name']."' />";

        } else {
            echo "Upload that bai";
        }
    }
?>