<?php
$servername = "localhost";
$username = "root";
$password = "";
?>
<html>
<head>
  <title>INVOICE GENERATION SYSTEM</title>
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
      <a class="card-panel indigo darken-4 white-text text-darken-4 center-align waves-effect waves-light btn" id="supplier"
      href="#tab1">
      <i class="material-icons left white"><img src="images/home.png" /></i>
        Supplier</a>
     </div>
     <div class="card-panel  indigo  z-depth-4">
        <a  class="card-panel indigo darken-4 white-text z-depth-4 text-darken-4 left-align waves-effect waves-light btn" id="customer"
            href="#tab2">
            <i class="material-icons left white"><img src="images/home.png" /></i>
                   Customer</a>
    </div>
    <div class="card-panel  indigo darken-3 z-depth-4" >
      <a  class="card-panel  indigo darken-4 white-text z-depth-4 text-darken-4 center-align waves-effect waves-light btn" id="item"
        href="#tab3" >
            <i class="material-icons left  white"><img src="images/home.png" /></i>
            Item Master</a>
   </div>
   <div class="card-panel indigo  z-depth-4">
     <a  class="card-panel indigo darken-4 white-text text-darken-4 left-align waves-effect waves-light btn" id="invoice"  href="#tab4">
       <i class="material-icons left  white"><img src="images/home.png" />
       </i>Invoice</a>
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
       <h7 class="flow-text z-depth-2 hoverable"><b class="orange-text">Invoice Generation System</h7>
     </section>
       <h4 class="green-text col s4 push-s3">welcome Dady!
       </h4>

<!-- Image DISPLAYING -->
<div id="tab1" style="color:black;">
         <form method="post" action="suppliersave.php">
            <h7 class="push-s7">:)</h7><br><br><br><br>
            <h7 class="pull-s3">Supplier Tin_No</h7><input type="text" name="stinno">
            <h7>Supplier Name</h7><input type="text" name="sname">
            <h7>Supplier Address</h7><textarea row="10" cols="1000" name="saddress">
            </textarea>
            <h7>Supplier Phno</h7><input type="text" name="sphno" placeholder="9390510909">
            <input type="submit" value="submit">
         </form>
</div>

<div id="tab2" style="color:black">
  <form method="post" action="customersave.php">
              <h7 class="push-s7">:)</h7><br><br><br><br>
              <h7>Supplier Name</h7><input type='text' name='sname'>
              <h7>Customer Name</h7><input type="text" name="cname">
              <h7>Customer Address</h7><textarea row="10" cols="1000" name="caddress"></textarea>
              <h7 class="pull-s3">Customer Tin_No</h7><input type="text" name="ctinno">
              <h7>Customer Phno</h7><input type="text" name="cphno" placeholder="9390510909">
              <input type="submit" value="submit">
  </form>
 </div>


<div id="tab3">
  <form method="post" action="itemsave.php">
    <table>
            <thead>
              <tr>
                  <th data-field="name">Item Code</th><td><input type="text" name="sname">
                 </td>
              </tr>
              <tr>
                  <th data-field="price">Item Description</th>  <td><input type="text"></td>
              </tr>
              <tr>
              <th>  <input type="submit" value="save"></th>
              </tr>
            </thead>
    </table>
  </form>
</div>

<div id="tab4" style="color:black;">
  <form method="post" action="invoicesave.php">
    <h7 class="push-s7">:)</h7><br><br><br><br>
          <h7>Supplier Name</h7><input type="text" name="sname">
          <h7>Invoice No</h7><input type="text" name="inno">
          <h7>Date</th><input type="date" name="date">
          <h7>Customer TIN_NO</h7><input type="text" name="ctinno">
          <h7>No.of Bags</h7><input type="text" name="nob">
          <h7>Item Description</h7><input type="text" value='DRY CHILLIES' name="ides">
          <h7>Net Weight </h7><input type="text" name="nw">
          <h7>Rt.Per Qtl.</h7><input type="text" name="rp">
          <h7> <input type="submit" value="save">
  </form>
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
$('#supplier').click(function(){
  $('#tab1').show();
  $('#tab2').hide();
  $('#tab3').hide();
    $('#tab4').hide();
});
$('#customer').click(function(){
  $('#tab2').show();
  $('#tab1').hide();
  $('#tab3').hide();
  $('#tab4').hide();
});
$('#item').click(function(){
  $('#tab3').show();
  $('#tab2').hide();
  $('#tab1').hide();
  $('#tab4').hide();
});
$('#invoice').click(function(){
  $('#tab1').hide();
  $('#tab2').hide();
  $('#tab3').hide();
  $('#tab4').show();
});

$(document).ready(function() {
    $('#tab1').show();
    $('#tab2').hide();
    $('#tab3').hide();
    $('#tab4').hide();
});

</script>

</html>
