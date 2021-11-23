<html>

<head>
    <title>Insert Results</title>
</head>

<body>
    <?php
    $host = 'db';
    $user = 'root';
    $passwd = '123';
    $database = 'db';
    $connect = mysqli_connect($host, $user, $passwd, $database);

    $username = $_POST["username"];
    $username = mysqli_real_escape_string($connect, $username);
    $password = $_POST["password"];
    $password = mysqli_real_escape_string($connect, $password);


    $table_name = 'user';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $query = "select * from $table_name where username = '$username' ";
        print "The Query is <i>$query</i><br>";
        if ($data = $connect->query($query)) {
            print "Query was successful!";
        } else {
            print "Query failed!";
        }
        //        echo "<br/>data: $data";
        foreach ($data as $row) {
            foreach ($row as $column) {
                echo "<br/>$column";
            }
        }
    }

    mysqli_close($connect);
    ?>
</body>

</html>