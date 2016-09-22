<?php
$servername = "localhost";
$username = "root";
$password = "";
$name = $_POST['user'];
$pass= $_POST['password'];
?>
<html ng-app="myApp">
<head >
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
  <link rel="stylesheet" type="text/css" href="stylesheets/style.css" />
</head>
<body background="images/background1.jpg">

  <div class="row ">
 <!-- Top left tag -->
     <div class="card-panel col s2  green darken-4 col s2 ">
    <section >
      <img src="images/Logo.png" class="circle responsive-img z-depth-2"  />
    </section><br /><br />
      <div class="card-panel green darken-1 darken-2 z-depth-4">
      <a class="card-panel green darken-4 white-text text-darken-4 left-align waves-effect waves-light btn" href="home.html">
        <i class="material-icons left white"><img src="images/home.png" /></i>Home</a>
     </div>
     <div class="card-panel  green darken-1 z-depth-4">
     <a class="card-panel green darken-4 white-text z-depth-4 text-darken-4 waves-effect waves-light btn" href="http://localhost:8080/phpmyadmin/tbl_change.php?db=student&table=sd&token=2955372f0a1debc9bb7c6bc848a33c54">
      <i class="material-icons left white"><img src="images/home.png" /></i>
       ADDSTUDENT </a>
    </div>
    <div class="card-panel  green darken-1 z-depth-4">
    <div>
    <a class="card-panel  green darken-4 white-text z-depth-4 text-darken-4 left-align waves-effect waves-light btn"  href="http://localhost:8080/phpmyadmin/tbl_change.php?db=student&table=marks&token=b26a456fbb1ae08383a6587a7548ef16">
      <i class="material-icons left  white"><img src="images/home.png" /></i>
      ADD MARKS
    </a></div>
   </div>
   <div class="card-panel green darken-1  z-depth-4">
   <a class="card-panel green darken-4 white-text text-darken-4 left-align waves-effect waves-light btn" id="chat" href="#!">
     <i class="material-icons left  white"><img src="images/home.png" /></i> DO CHAT </a>
  </div>
  <div class="card-panel green darken-1  z-depth-4" >
  <a  class="card-panel green darken-4 white-text text-darken-4 left-align waves-effect waves-light btn"   href="#!">
    <i class="material-icons left  white"><img src="images/home.png" />
    </i>ATTENDENCE</a>
 </div>

    <!--<div class="container"><a href="#" data-activates="nav-mobile" class="button-collapse top-nav full hide-on-large-only"><i class="mdi-navigation-menu"></i></a></div>
    -->
      <div class="section card-panel indigo darken-3 col s2 ">
      </div>
  </div>
    <!--Center tag -->
    <div>
    <div class="card-panel white darken-1 col s9 z-depth-1 hoverable">
     <section class="card-panel green darken-4 white-text text-darken-5 center-align hoverable">
       <h7 class="flow-text hoverable">
         <b class="white orange-text z-depth-3">RVR & JC</b><b class=" z-depth-3"> COLLEGE</b> OF <b class=" z-depth-3 green-text  white text-darken-2">ENGINEERING</b></h7>
     </section>
     <div class="container">
       <h4 class="green-text col s4 pull-s3">welcome Professor :)
       </h4>
       <div class="card-panel center-align col s3 white darken-1 hoverable responsive-img" ng-show="tab===1">
         <?php
         $con=mysql_connect("localhost","root","");
         mysql_select_db("sms",$con);
         $qry="select * from staffimg where stid='$name' ";
         $result=mysql_query($qry,$con);
         while($row = mysql_fetch_array($result))
         {
             echo '<img height="150" width="150" src="data:image;base64,'.$row[1].' " class="responsive-img"> ';
             echo '<br />';
         }
         mysql_close($con);
         ?>
       </div>
      <div id="tab1">
       <?php
       //$servername = "localhost";
       //$username = "root";
       //$password = "";

       // Create connection
       $conn = mysql_connect("$servername", "$username", "$password");

       // Check connection
       if (!$conn) {
           die("Connection failed: " . mysql_connect_error());
       }
      // echo "Connected successfully";
       $name = $_POST['user'];
       $pass= $_POST['password'];
       mysql_select_db("sms",$conn);
       $sql="select * from staff where staffid='$name' and password='$pass' ";
       $mydata = mysql_query($sql,$conn);
       if(mysql_num_rows($mydata) > 0 )
       {
        echo "<table class='card-panel white darken-1 z-depth-4 centered striped responsive-table bordered'>";
       while($record = mysql_fetch_array($mydata))
        {
       echo "<thead>
         <tr><th class='orange-text'>ID</th><td>" .$record['staffid']. "</td></tr>
         <tr><th class='orange-text'>NAME</th><td>" .$record['staffname']. "</td></tr>
         <tr><th class='orange-text'>PHONE</th><td>" .$record['phno']. "</td></tr>
         <tr><th class='orange-text'>BRANCH</th><td>" .$record['branch']. "</td></tr>
         <tr><th class='orange-text'>DOB</th><td>" .$record['dob']. "</td></tr>
         <tr><th class='orange-text'>DESIGNATION</th><td>" .$record['designation']. "</td></tr>
         <tr><th class='orange-text'>DOJ</th><td>" .$record['doj']. "</td></tr>

       </thead>";
      }
     echo "</table>";
     }
   else{
     echo "sorry,please enter correct credentials";
     echo "Redirecting..";
         sleep(5);
        header("Location: http://localhost:8080/sms/home.html");
        echo "sorry,please enter correct credentials";
       }
    ?>
  </div>
  <div id="tab3">

    <?php
    $conn = mysql_connect("$servername", "$username", "$password");
    if (!$conn) {
        die("Connection failed: " . mysql_connect_error());
    }
    mysql_select_db("chat",$conn);
    //echo $name;
    $sql="select * from `chat` where sender='$name' or receiver='$name' ";
    $mydata = mysql_query($sql,$conn);
    if(mysql_num_rows($mydata) > 0 )
    {
    echo "<h5 class='orange-text'>Chat Page</h5>";
    echo "<textarea class='materialize-textarea'> ";
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
    <form method="post" action="chat.php">
      <div class="input-field col s6">
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
        <input type="submit" value="sendmessage" />
    </form>

  </div>
</div>
    </div>
    </div>
    <!-- Top right tag -->
    <div class="col s1">
    <div class="card-panel green darken-4 hide-on-med-and-down ">
      <section >
      <img src="images/rvr.jpg" class="circle responsive-img z-depth-2" id="logo" />
    </section>
   </div>

  </div>
  <!-- The scripts of my html is starts from here -->
  <script src="js/jquery.js"></script>
  <script src="http://code.angularjs.org/1.2.6/angular-animate.js"></script>
    <script src="js/app.js"></script>
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

</script>
</html>
