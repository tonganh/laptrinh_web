<html>
<head><title>Date Check</title></head>
<body>
<?php
    $date = $_POST["date"];
    $two = '[[:digit:]]{2}';
    $month = '[0-1][[:digit:]]';
    $day = '[0-3][[:digit:]]';
    $year = "[0-2][[:digit:]]$two";

    if (mb_ereg("^($month)/($day)/($year)$", $date)){
        list($mon, $day, $year) = mb_split('/', $date );
        if ( $mon >= 1 && $mon <= 12 ) {
            if ( $day >= 1 && $day <= 31 ) {
                if($day >29  ){
                    if(($year %4 == 0) && ($year % 100 != 0) || $year %400 == 0){
                     print " Invalid Date =$date";
                    }else{
                     print " Valid Date =$date";
                    }             
                } else {
                 print " Valid Date =$date";
                 }      
            } else {
                print " Illegal day specifed Day=$day";
            }
        } else {
            print " Illegal month specifed Mon=$mon";
        }
    } else {
        print ("Invalid date format= $date");
    }
?>

</body>
</html>
