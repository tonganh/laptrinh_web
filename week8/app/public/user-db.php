<?php
$host = 'db';
$user = 'root';
$passwd = '123';
$database = 'db';
$connect = mysqli_connect($host, $user, $passwd, $database);
$table_name = 'user';


$SQLcmd = "CREATE TABLE $table_name(
        username VARCHAR(30) PRIMARY KEY,
        password VARCHAR(30)
    )";

print "The Query is <i>$SQLcmd</i><br>";
if ($connect->query($SQLcmd)) {
    print "Create $database was successful!</font>";
} else {
    print "Create $database failed!</font>";
}


mysqli_close($connect);
