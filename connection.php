<?php
$thoughts = filter_input(INPUT_POST, 'thoughts');
$career = filter_input(INPUT_POST, 'career');
$fitness = filter_input(INPUT_POST, 'fitness');
$anythingelse = filter_input(INPUT_POST, 'anythingelse');

if (!empty($thoughts) || !empty($career) || !empty($fitness) || !empty($anythingelse)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "austin";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);


if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO journal (thoughts, careercoding, fitness, anythingelse)
values ('$thoughts','$career','$fitness','$anythingelse')";

//Getting the error below: 

//Fatal error: Uncaught mysqli_sql_exception: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 't be done until Summer since classes are starting now. Summer internships off...' at line 2 in C:\Users\19208\Desktop\personal\journalme\connection.php:24 Stack trace: #0 C:\Users\19208\Desktop\personal\journalme\connection.php(24): mysqli->query('INSERT INTO jou...') #1 {main} thrown in C:\Users\19208\Desktop\personal\journalme\connection.php on line 24

if ($conn->query($sql)){
echo "Successful at this time.";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "An error occured somewhere while running.";
die();
}
?>