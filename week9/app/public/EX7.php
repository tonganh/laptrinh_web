<!DOCTYPE html>
<html lang="en">
<head>
    <title>Validate</title>
</head>
<body>
    <form action="EX7.php" method ="post">
        Email address:   <input type="text" size="15" name="email"><br/>
        URL address:   <input type="text" size="30" name="address" ><br/>
        Phone number:   <input type="text" size="30" name="phone"><br/>
        <input type="submit" value="Click To Submit">
        <input type="reset" value="Click To Reset"><br>
    </form>
</body>
</html>
<?php
    $email = $_POST["email"];
    $address = $_POST["address"];
    $phone = $_POST["phone"];
     
    $check_mail = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
   
    if (preg_match($check_mail, $email)) {
        print "Valid email  : $email<br/>";
    }else{
        print "Invalid email: $email<br/>";
    }
    $check_url = "/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i";
    if (preg_match($check_url, $address)) {
        print "Valid url  : $address<br/>";
    }else{
        print "Invalid url: $address<br/>";
    }
    $check_phone ='/^[0-9]{10}+$/';
    if (preg_match($check_phone, $phone)) {
        print "Valid phone number : $phone<br/>";
    }else{
        print "Invalid phone number : $phone<br/>";
    }

?>



