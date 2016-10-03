<?php
$sid=$_REQUEST['sid'];
$sname=$_REQUEST['sname'];
$sph=$_REQUEST['sph'];
$sfname=$_REQUEST['sfname'];
$sbranch=$_REQUEST['sbranch'];
$syear=$_REQUEST['syear'];
$semail=$_REQUEST['semail'];

$servername = "localhost";
$username = "root";
$password = "";
$conn = mysql_connect("$servername", "$username", "$password");
mysql_select_db("student",$conn);
$sql="insert into sd (sid,sname,sph,sfname,sbranch,syear,semail) values ('$sid','$sname','$sph','$sfname','$sbranch','$syear','$semail')";

$result = mysql_query($sql,$conn);

if($result)
{
  echo "Student details added successfully";
}
else {

  echo "Student details are not added";
  echo "The error might because of "+"<b>"+"Student ID+"</b>"+ Please check again once";
}
?>
