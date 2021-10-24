 <?php
    $name = $_POST['name'];
    $day = $_POST['day'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    $hours = $_POST['hours'];
    $minutes = $_POST['minutes'];
    $seconds = $_POST['seconds'];


    print "Hi $name!<br>";
    print "You have choose to have an appointment on $hours:$minutes:$seconds ,$day/$month/$year <br><br>";
    if ($hours <= 12) {
        print " More information<br><br>";
        print "In 12 hours, the time and date is $hours:$minutes:$seconds AM ,$day/$month/$year <br><br>";
    } else {
        $hours = $hours - 12;
        print " More information<br>";
        print "In 12 hours, the time and date is $hours:$minutes:$seconds PM ,$day/$month/$year <br>";
    }

    if ($month == 2 && $year % 4 == 0) {
        print " This month has 29 days!<br>";
    } elseif ($month == 2) {
        print " This month has 28 days<br>";
    } elseif ($month == 4 || $month == 6 || $month == 9 || $month == 11) {
        print " This month has 30 days<br>";
    } else {
        print " This month has 31 days<br>";
    }


    ?>
