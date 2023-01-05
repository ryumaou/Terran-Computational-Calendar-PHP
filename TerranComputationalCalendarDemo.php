<html>
<head>
<title>Terran Computational Time Test</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<center>
  <h1>Terran Computational Calendar Time Tester</h1>
</center>

<?php

// This is where the magic happens
 require 'TCDate.class.php';

$my_terran_date = tcdate();
// this prints the array for the terran computational date format
echo "The Terran Computational Date array includes: <br> <pre>";
print_r($my_terran_date);
echo "</pre>";
// print the date in different ways
echo "<br> Which should look like a more regular date: ".$my_terran_date['padded_date']." and with less fancying up: ".tcdateToHTML($my_terran_date)." <br>";


echo "<br><br>The date in Terran Computational Time is: ".tcdateToHTML(tcdate())." which should look kind of like ".date('Y-m-d H:i:s T')."<br>";
$my_now = date('Y-m-d H:i:s T-5:00');
$TCOut = tcdate($my_now);
echo "The variable used to create the date should be ".$my_now." and the date in Terran Computational Time is: ".$TCOut['padded_date']."<br>";
date_default_timezone_set('America/Chicago');
echo("The date of ".strftime("%B %d %Y, %X %Z",mktime(20,0,0,12,31,98))." is ".tcdateToHTML(tcdate(mktime(20,0,0,12,31,98)))." via Terran Computational Calendar time <br>");
echo("The date 2900 years into the future is ".strftime("%Y.%j-%X",strtotime("+2900 years"))."<br>");
$future_date = mktime(date("G")-6,date("i"),date("s"),date("m"),date("d"),date("Y")+2900);
echo "which is ".tcdateToHTML(tcdate($future_date))." via Terran Computational Calendar time <br>";
echo("and today is ".date("Y-m-d G:i:s T")." in a similar date format <br><br>");

echo "The current date and time is ".date("l, jS \of F Y h:i:s A")."<br>";

?>

</body>
</html> 