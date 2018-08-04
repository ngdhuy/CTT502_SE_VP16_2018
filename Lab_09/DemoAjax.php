<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Demo Ajax</title>
</head>
<body>
    <h1>Get Data with Ajax</h1>
    <button type="button" onclick="getDataFromServer()">Get data</button>
    <div id="pos"></div>

    <script type="text/javascript">
        function getDataFromServer(){
            var pos = document.getElementById('pos');

             var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     pos.innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "http://localhost/CTT502_Software_Engineering_course/Lab_09/DemoAjax_Server.php", true);
  xhttp.send();
        }
    </script>
</body>
</html>