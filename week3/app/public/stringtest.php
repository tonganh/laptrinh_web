<html>

<head>
    <title> A Simple Form </title>
</head>

<body>

    <?php
    $name = $_POST['name'];
    $pass = $_POST['pass'];
    $email = $_POST['email'];
    $University = $_POST['University'];
    $hobby = $_POST['hobby'];
    print " Hello everyone !<br>";
    print "My name is $name<br>  $University University <br> . My hobby is $hobby<br> ";
    print("<br> Email : $email");

    ?>
</body>

</html>