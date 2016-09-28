<?php
$servername = "localhost";
$username = "root";
$password = "";
$name = $_POST['user'];
$pass= $_POST['password'];
?>
<html>
<head>
  <title>STUDENT MONITORING SYSTEM</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!--Let browser know website is optimized for mobile-->
   <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />

   <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <!--Import Google Icon Font-->
     <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>-->
  <!--This is used for icons-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--This is used for my styles-->
  <link rel="stylesheet" type="text/css" href="stylesheets/style.css"/>
</head>
<body background="images/background1.jpg">

  <div class="row ">
 <!-- Top left tag -->
     <div class="card-panel col s2 indigo darken-1 col s2 " id="pos">
    <section >
      <img src="images/Logo.png" class="circle responsive-img z-depth-2"  />
    </section><br /><br />
      <div class="card-panel indigo darken-2 z-depth-4">
      <a class="card-panel indigo darken-4 white-text text-darken-4 center-align waves-effect waves-light btn" href="home.html">
      <i class="material-icons left white"><img src="images/home.png" /></i>
        Home</a>
     </div>
     <div class="card-panel  indigo  z-depth-4">
<a  class="card-panel indigo darken-4 white-text z-depth-4 text-darken-4 left-align waves-effect waves-light btn" id="personal" href="#tab1">
<i class="material-icons left white"><img src="images/home.png" /></i>
       Personal </a>
    </div>
    <div class="card-panel  indigo darken-3 z-depth-4" >
  <a  class="card-panel  indigo darken-4 white-text z-depth-4 text-darken-4 center-align waves-effect waves-light btn" id="externals" href="#tab2" >
      <i class="material-icons left  white"><img src="images/home.png" /></i>
      Externals</a>
   </div>
   <div class="card-panel indigo  z-depth-4">
   <a  class="card-panel indigo darken-4 white-text text-darken-4 left-align waves-effect waves-light btn"   href="#!">
     <i class="material-icons left  white"><img src="images/home.png" />
     </i>Attendence</a>
  </div>
  <div class="card-panel indigo darken-3  z-depth-4" >
  <a  class="card-panel indigo darken-4 white-text text-darken-4 left-align waves-effect waves-light btn" id="chat"  href="#!">
    <i class="material-icons left  white"><img src="images/home.png" />
    </i>Chat</a>
 </div>
    <!--<div class="container"><a href="#" data-activates="nav-mobile" class="button-collapse top-nav full hide-on-large-only"><i class="mdi-navigation-menu"></i></a></div>
    -->
      <div class="section card-panel indigo darken-3 col s2 ">
      </div>
  </div>
    <!--Center tag -->


    <div>
    <div class="card-panel white darken-1 col s9 z-depth-4 hoverable">

     <section class="card-panel indigo darken-4 white-text text-darken-5 center-align hoverable">
       <h7 class="flow-text z-depth-2 hoverable"><b class="orange-text">RVR & JC</b><b> COLLEGE</b> OF <b class="green-text text-darken-2">
         ENGINEERING</b></h7>
     </section>
     <div class=" container">
       <h4 class="green-text col s4 pull-s3">welcome <?php echo $name ?> !
       </h4>
       <div class="card-panel center-align col s3 blue darken-1 hoverable responsive-img">
<!-- Image DISPLAYING -->
       <?php
         $con=mysql_connect("localhost","root","");
         mysql_select_db("student",$con);
         $qry="select * from images where sid='$name'";
         $result=mysql_query($qry,$con);
         while($row = mysql_fetch_array($result))
         {
             echo '<img class="pull-s3" height="160" width="150" src="data:image;base64,'.$row[1].' "> ';
             echo '<br />';
         }
         mysql_close($con);
         ?>
       </div>
       <div id="tab1">
       <?php
       $conn = mysql_connect("localhost","root","");

       // Check connection
       if (!$conn) {
           die("Connection failed: " . mysql_connect_error());
       }
      // echo "Connected successfully";
       mysql_select_db("student",$conn);
       $sql="select * from sd where sid='$name' and sph='$pass'";
       $mydata = mysql_query($sql,$conn);
       if(mysql_num_rows($mydata) > 0 )
       while($record = mysql_fetch_array($mydata)){
       echo "<table class='card-panel white darken-1 z-depth-1 centered striped responsive-table bordered'>
       <thead>
         <tr><th class='orange-text'>REGD.NO</th><td>" .$record['sid']. "</td></tr>
         <tr><th class='orange-text'>NAME</th><td>" .$record['sname']. "</td></tr>
         <tr><th class='orange-text'>COURSE</th><td>" .$record['scourse']. "</td></tr>
         <tr><th class='orange-text'>BRANCH</th><td>" .$record['sbranch']. "</td></tr>
         <tr><th class='orange-text'>YEAR</th><td>" .$record['syear']. "</td></tr>
         <tr><th class='orange-text'>FATHER</th><td>" .$record['sfname']. "</td></tr>
         <tr><th class='orange-text'>PHONE</th><td>" .$record['sph']. "</td></tr>
         <tr><th class='orange-text'>EMAIL</th><td>" .$record['semail']. "</td></tr>
       </thead>

 </table>";
   }
  /* else{
     echo "sorry,please enter correct credentials";
     echo "Redirecting..";
         sleep(10);
        header("Location: http://localhost:8080/sms/studentlogin.html");
        echo "sorry,please enter correct credentials";
      }*/
    ?>
   </div>
   <div id="tab2">
   <?php
   //Student marks start from here :)
   $conn = mysql_connect("$servername", "$username","$password");
   if (!$conn) {
       die("Connection failed: " . mysql_connect_error());
   }
   mysql_select_db("student",$conn);
   $sql="select * from marks where username='$name'";
   $mydata = mysql_query($sql,$conn);
   $year=1;$sem=1;$sub=1;$count=1;$lab=5;$labsub=1;
   if(mysql_num_rows($mydata) > 0 )
   while($record = mysql_fetch_array($mydata)){


     if($count>2){$year=2;$lab=5;$sem=1;}
     if($count>4){ $year=3;$lab=5;$sem=1;}
     if($count>6){ $year=4;$lab=5;$sem=1;}
 echo "<table class='card-panel white darken-1 z-depth-1 centered striped responsive-table bordered'>
   <thead>
     <tr ><th class='green-text'>$count:SEM</th></tr>
     <tr>
     <th class='orange-text'>REGD.NO</th>";$sub=1;
     for($x = 1; $x <= 6; $x++){
     echo "<th class='orange-text'>IT$year$sem$sub</th>";
     ++$sub;
    }
    $labsub=1;
    for($x = 1; $x <= 3; $x++){
    echo "<th class='orange-text'>IT$year$lab$labsub</th>";
    ++$labsub;
   }
    echo"
     <th class='orange-text'>Grade</th>
     <th class='orange-text'>GPA</th>
     <th class='orange-text'>CGPA</th>
     </tr>
    </thead>
   <tbody>
     <tr>
     <td>" .$record['username']. "</td>
     <td>" .$record['sub1']. "</td>
     <td>" .$record['sub2']. "</td>
     <td>" .$record['sub3']. "</td>
     <td>" .$record['sub4']. "</td>
     <td>" .$record['sub5']. "</td>
     <td>" .$record['sub6']. "</td>
     <td>" .$record['lab1']. "</td>
     <td>" .$record['lab2']. "</td>
     <td>" .$record['lab3']. "</td>
     <td>" .$record['grade']. "</td>
     <td>" .$record['gpa']. "</td>
     <td>" .$record['cgpa']. "</td>
  </tr>
   </tbody>
 </table>";
 ++$sem;++$count;++$lab;
}
else{
 echo "You have no records of exams";
   }
?>
  </div>
  <div id="tab3">

    <?php
    $conn = mysql_connect("$servername", "$username", "$password");
    if (!$conn) {
        die("Connection failed: " . mysql_connect_error());
    }
    mysql_select_db("student",$conn);
    $sql="select * from chat where sender='$name' or receiver='$name'";
    $mydata = mysql_query($sql,$conn);
    if(mysql_num_rows($mydata) > 0 )
    {
    echo "<h5 class='orange-text'>Chat Page</h5>";
    echo "<textarea class='materialize-textarea' id='chatarea'> ";
    while($record = mysql_fetch_array($mydata)){
        if($record['sender']==$name){
        echo $name.":" .$record['message']."\n";
      }
        else {
        echo $record['sender'].":". $record['message']."\n";
        }
    }
    echo "</textarea>";
  }
    ?>
    <form>
      <div class="input-field col s6" >
          <input placeholder="pompapathi_sir" id="receiver" type="text" name="receiver" class="validate">
          <label for="receiver">receiver</label>
        </div>
        <div class="input-field col s6">
          <input id="sender" type="text" class="validate"  name="sender" value="<?php echo "$name" ?>">
          <label for="sender">sender</label>
        </div>
        <div class="input-field col s12">
          <i class="material-icons prefix">mode_edit</i>
          <textarea id="message" class="materialize-textarea"  name="message">
          </textarea>
          <label for="textarea1">Message</label>
        </div>
        <input type="button" value="send message" class="btn waves-effect waves-orange" onClick="getData()">
    </form>
    <div id="update">
      <p><b>Please send message</b></p>
    </div>
  </div>
 </div>
</div>
</div>
    <!-- Top right tag -->
    <div class="col s1">
    <div class="card-panel indigo darken-1 hide-on-med-and-down ">
      <section >
      <img src="images/rvr.jpg" class="circle responsive-img z-depth-2" id="logo" />
    </section>
   </div>

  </div>
  <!-- The scripts of my html is starts from here -->
  <script src="js/jquery.js"></script>


    <script src="http://code.angularjs.org/1.2.6/angular-animate.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <!-- The scripts of my html is end here -->
</body>
<script>
$('#externals').click(function(){
  $('#tab2').show();
  $('#tab1').hide();
  $('#tab3').hide();
});
$('#personal').click(function(){
  $('#tab1').show();
  $('#tab2').hide();
  $('#tab3').hide();
});
$('#chat').click(function(){
  $('#tab1').hide();
  $('#tab2').hide();
  $('#tab3').show();
});

$(document).ready(function() {
    $('#tab1').show();
  $('#tab2').hide();
    $('#tab3').hide();
});
var XMLHttpRequestobj=false;
if(window.XMLHttpRequest)
XMLHttpRequestobj=new XMLHttpRequest();
else if(window.Activeobject)
XMLHttpRequestobj=new Activeobject('Microsoft.XMLHttp');

function getData()
{
  if(XMLHttpRequestobj){

  var obj= document.getElementById("update");

  XMLHttpRequestobj.onreadystatechange=function(){
  if(XMLHttpRequestobj.readyState==4 && XMLHttpRequestobj.status==200)
  obj.innerHTML=XMLHttpRequestobj.responseText;
  }
   XMLHttpRequestobj.open("GET","chat.php");
  XMLHttpRequestobj.send();
  }
}
</script>
</html>
