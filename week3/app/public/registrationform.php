<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>

<body>
    <?php
    $name = $_POST['name'];
    $pass = $_POST['pass'];
    $email = $_POST['email'];
    $University = $_POST['University'];
    $hobby = $_POST['hobby'];
    print "username $name<br>  $University University. <br>  Her/him hobby is $hobby. Welcome to my university. Registraion successfull<br> ";
    print("<br> Your Email : $email");

    ?>
</body>

</html>