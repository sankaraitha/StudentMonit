<?php
$servername = "localhost";
$username = "root";
$password = "";
$receive = $_REQUEST['receive'];
$send = $_REQUEST['send'];
$mess = $_REQUEST['mess'];
$conn = mysql_connect("$servername", "$username", "$password");
if (!$conn) {
    die("Connection failed: " . mysql_connect_error());
}
mysql_select_db("student",$conn);

if(!$receive)
{
  echo "Message doesnot sent";
  echo "Please enter receiver name";
}
else if(!$send)
{
  echo "Message doesnot sent";
  echo "Please enter sender name";
}
else{
$sql="insert into chat (receiver,sender,message) values ('$receive','$send','$mess')";

if(mysql_query($sql,$conn))
{
echo "<b>Message sent successfully</b>";
}
else{
  echo "Message doesnot sent";
}
}
?>
