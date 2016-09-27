<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysql_connect("$servername", "$username", "$password");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysql_connect_error());
}
// echo "Connected successfully";

mysql_select_db("dady",$conn);
$query="select s_name from supplier";
$mydata = mysql_query($query,$conn);
while($record = mysql_fetch_array($mydata)){
  echo $record['s_name'];
}
?>
