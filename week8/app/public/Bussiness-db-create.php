<?php
$host = 'db';
$user = 'root';
$passwd = 'root';
$database = 'bussiness';
$connect = mysqli_connect($host, $user, $passwd, $database);
$table_name = 'bussinessTable';


$SQLcmd = "CREATE TABLE $table_name(
        BussinessName VARCHAR(100) PRIMARY KEY,
        Address VARCHAR(100),
        City VARCHAR(100),
        Telephone VARCHAR(100),
        URL VARCHAR(100),
        Category VARCHAR(500)
    )";

print "The Query is <i>$SQLcmd</i><br>";
if ($connect->query($SQLcmd)) {
    print "Create $database was successful!</font>";
} else {
    print "Create $database failed!</font>";
}


mysqli_close($connect);
