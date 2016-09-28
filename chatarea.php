<?php
$name=$_REQUEST['send'];
$receiver=$_REQUEST['receiver'];
$conn = mysql_connect("$servername", "$username", "$password");
if (!$conn) {
    die("Connection failed: " . mysql_connect_error());
}
mysql_select_db("student",$conn);
$sql="select * from chat where sender='$name' or receiver='$name'";
$mydata = mysql_query($sql,$conn);
if(mysql_num_rows($mydata) > 0 )
{
/*  echo "<h5 class='orange-text'>Chat Page</h5>";
echo "<textarea class='materialize-textarea' id='chatarea'> ";*/
while($record = mysql_fetch_array($mydata)){
    if($record['sender']==$name){
    echo $name.":" .$record['message']."<br>";
  }
    else {
    echo $record['sender'].":". $record['message']."<br>";
    }
}
//  echo "</textarea>";
}
?>
