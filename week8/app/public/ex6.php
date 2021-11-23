<html>
<head><title>Insert Results</title></head>
<body>
<?php
    $host = 'localhost';
    $user = 'root';
    $passwd = '';
    $database = 'bussiness';
    $connect = mysqli_connect($host, $user, $passwd, $database);
    $table_name = 'bussinessTable';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $BussinessName = $_POST["BussinessName"];
        $Address = $_POST["Address"];
        $City = $_POST["City"];
        $Telephone = $_POST["Telephone"];
        $URL = $_POST["URL"];
        $Category = implode($_POST["Category"]);
        $query = "Insert into  $table_name VALUES
        ('$BussinessName','$Address','$City','$Telephone','$URL','$Category')";
        print "The Query is <i>$query</i><br>";
        if ($data = $connect->query($query)) {
            print "Insert into $database was successful!</font>";
        } else {
            print "Insert into $database failed!</font>";
        }
    }



    mysqli_close($connect);
?></body>
</html>