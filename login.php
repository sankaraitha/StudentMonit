<?php
//if (POST) {
    // collect value of input field
    $name = $_POST['user'];
    $pass= $_POST['password'];
/*    if (empty($name)) {
        echo "Name is empty";
    } else {

        echo "<h>Name is: " .$name."</h1>";
        echo "<p>Password is :" .$pass."</p>";
    }
*/
//}
//the below append data into file
file_put_contents("test1.txt","Name is:".$name ."\t"." Pass is:".$pass ."\n" ,FILE_APPEND);
//MY SQL STARTS FROM HERE
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysql_connect("$servername", "$username", "$password");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysql_connect_error());
}
mysql_select_db("student",$conn);
//echo "Connected successfully";
/*creating database
$sql="CREATE DATABASE SMS";
if(mysql_query("CREATE DATABASE SMS",$conn))
{
  echo "Database created successfully" ."\n" ;
}
else
echo "Databse not created successfully". "\n";

mysql_select_db("sms",$conn);

*///creating table
/*$sql="CREATE TABLE tang(
  id varchar(8) primary key,email varchar(50)
)";

if(mysql_query($sql,$conn))
{
  echo "Table created successfully"."\n";
}
*/
//mysql_select_db("sms",$conn);

//$sql="INSERT INTO tang (id,email) values ('$name','$pass')";

//if(mysql_query($sql,$conn))
 //echo "inserted  successfully";
 $sql="select * from sd where sid='$name' and sph='$pass'";
 $mydata = mysql_query($sql,$conn);
 if(mysql_num_rows($mydata) > 0 )
 while($record = mysql_fetch_array($mydata)){
   echo $record['sid']."\t".$record['email']."\t".$record['sname'];
   echo "<br />";
 }
 else{
   echo "sorry,please enter correct credentials";
   echo "Redirecting..";
       sleep(5);
      header("Location: http://localhost:8080/sms/studentlogin.html");
      echo "sorry,please enter correct credentials";
     }

//$last_id = mysql_insert_id($conn);
  //  echo "New record created successfully. Last inserted ID is: " . $last_id;


mysql_close($conn);
?>
