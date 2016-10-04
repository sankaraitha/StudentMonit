<html >
<head>
  <title>STUDENT MONITORING SYSTEM</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="stylesheets/style1.css" />
 <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
</head>

<body background="images/background1.jpg">
  <div id='preloader'>
     <div id='status'>
        <img alt='' height='64' src='images/preloader.gif' width='64'/>
     </div>
  </div>
    <div class="header card-panel indigo">
     <h1><em class="pull-left"><a href="home.html"><img src="images/logo2.jpg" id="logo" class="circle responsive-img"  /></a></em>
        <em class="pull-right"><a href="home.html"><img src="images/rvr.jpg" id="logo" class="circle responsive-img"/></a></em>
        RVRJC COLLEGE OF ENGINEERING
     </h1>
  </div>
  <!--<div class="nav"></div>-->
  <div class="bord">
  <span class="orange-text">STUDENT</span> MONITORING <span class="green-text text-lighten-1">SYSTEM
  <p id="caption" style="font-size:15px;margin-bottom:-15px;color:blue;margin-left:-50px;"><i>The Power Of Next Gen</i></p>
  </div>
  <br />
  <div class="row">
  <div class="card-panel white-darken-2 col s6 hide-on-med-and-down center-align z-depth-1">
    <img src="images/tree.jpg" class=" hover responsive-img" id="treelogo"/><br /><br /><p>

    </p>
 </div>
<!--<div id="slider">
  <ul class="slides">
  <em class="pull-center"><li class="slide"><img src="images/p1.jpg"</li></em>
  <em class="pull-center"><li class="slide"><img src="images/p2.jpg"</li></em>
  <em class="pull-center"><li class="slide"><img src="images/p3.jpg"</li></em>
  <em class="pull-center"><li class="slide"><img src="images/p4.jpg"</li></em>
  <em class="pull-center"><li class="slide"><img src="images/p5.jpg"</li></em>
  <em class="pull-center"><li class="slide"><img src="images/p6.jpg"</li></em>
  <em class="pull-center"><li class="slide"><img src="images/p7.jpg"</li></em>
  </ul>
</div>-->
<div class="card-panel white-darken-2 col s6 blue-text text-darken-3 center-align z-depth-2">
  <h4 class="yellow-text text-darken-4">STAFF LOGIN</h6><form method="post" action="staffdetails.php">
  </br></br><b>USERNAME</b></b><input type="text" placeholder="y13it801" id="text1" name="user" class="validate " length="8" required/>
  </br></br><b>PASSWORD</b></b><input type="password" placeholder="1234567890" id="text2" name="password"  class="validate" length="10" required="password should"/>
  </br></br><em class="bp"></em><input type="submit" value="LOGIN" class="btn waves-effect waves-orange"/>
  <input type="button" value="RESET" class="btn waves-effect" onclick="clr();"/>
 </form>
</div>
</div>
<!--search: <input type="text" value="" ng-model="search" />
<table border=1>

    <tr ng-repeat="data in myData  | filter : search">
        <td>{{data.Name}}</td>
        <td>{{data.Id}}</td>
        <td>{{data.Gender}}</td>
  </tr>

</table>-->
<div class="botom">
<p class="copyRight" style="margin-top: 40px;">Copyright © ASR. All Rights Reserved.</p>
<p>
<span class="orange-text">Student </span> Monitoring <span class="green-text text-darken-1">System </span>(SMS) – which is aimed at revolutionizing Education Systems Management with the use of technology, helps under graduate colleges to organize and improve their operational capabilities and hence offer the best quality education for their students.
Key features.</p>
</div>


  <script type="text/javascript" src="angular.min.js"></script>
  <script src="http://code.angularjs.org/1.2.6/angular-animate.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="js/jquery.js"></script>
   <!-- Include all compiled plugins (below), or include individual files as needed -->
   <script src="js/bootstrap.min.js"></script>
   <script src="js/imageanim1.js"></script>
  <script src="js/data.json"></script>

    <script src="js/app.js"></script>
    </body>
    <script>
    $(window).load(function() {

   $("#status").fadeOut("slow");

   $("#preloader").delay(500).fadeOut("slow").remove();

 });

 function clr()
 {
   document.getElementById('text1').value="";
   document.getElementById('text2').value="";
 }

    </script>
</html>
