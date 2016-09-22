<?php
$servername = "localhost";
$username = "root";
$password = "";
$receive = $_POST['receiver'];
$send = $_POST['sender'];
$mess = $_POST['message'];
$conn = mysql_connect("$servername", "$username", "$password");
if (!$conn) {
    die("Connection failed: " . mysql_connect_error());
}
mysql_select_db("chat",$conn);



$sql="insert into chat (receiver,sender,message) values ('$receive','$send','$mess')";

if(mysql_query($sql,$conn))
{
echo "Message sent successfully";
}
else{
  echo "Message doesnot sent";
}
?>
