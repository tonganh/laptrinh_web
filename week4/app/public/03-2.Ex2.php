<?php
//   $name = $_GET['name'];
//   $name2 = $_GET['name2'];
$date = $_POST["date"];
$date2 = $_POST["date2"];
function printDate($date, $date2)
{
   $date = DateTime::createFromFormat('Y-m-d', $date);
   $date2 = DateTime::createFromFormat('Y-m-d', $date2);
   $mess = $date->format('l,d-m-Y');
   $mess2 = $date2->format('l, d-m-Y');
   print " $mess <br>";
   print " $mess2 <br>";
   // date_modify($date,-$date2);
   $today   = new DateTime('today');
   $old = date_diff($date, $today);
   print " Tuổi của người T1 là:  ";
   echo  $old->format("%Y");
   print "<br>";

   $old2 = date_diff($date2, $today);
   print " Tuổi của người T2 là:  ";
   echo  $old2->format("%Y");
   print "<br>";

   $diff = date_diff($date, $date2);
   print "Date1 va Date2 cach nhau:  ";
   echo  $diff->format("%R%a days");
}
printDate($date, $date2);
