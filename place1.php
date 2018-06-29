

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>SATHYA TRAVELS</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script
  src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Arvo|Chicle|Indie+Flower|Lobster|Press+Start+2P" rel="stylesheet">

    <style>

    button{
      background:white;
    }

    button:hover {
      background:green;
    }

    .svg{
      width:30px;
      height: 30px;
      float:left;
    }
    .fa-facebook {
      padding-top: 2px;
      background: #3B5998;
      color: white;
    }

    body{
      background: url("https://images.unsplash.com/photo-1494515843206-f3117d3f51b7?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=b09c21ac2a8db55f43f901226be1f901&auto=format&fit=crop&w=752&q=80");
      margin-top: 80px;
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center;
    }
    .fa-twitter {
      background: #55ACEE;
      color: white;
    }
    .fa {

      font-size: 20px;
      width: 20px;
      text-align: center;

    }
    td{
      font-family: lobster;

      font-size: 15px;
    }
    .jumbotron {
      margin:20px;
      margin-left: 500px;
        max-width: 500px;

    }
    h1{
      background-color: red;
      font-family: chicle;
    }
    .btn-default:hover{
      background: green;
    }
    .payment {
     background: green;
      text-align: center;

      font-family: lobster;
      /*transition: all 0.5s;*/
      cursor: pointer;

    }

    /*.payment span {
      cursor: pointer;
      display: inline-block;
      position: relative;
      /*transition: 0.5s;*/
    /*}

    .payment span:after {
      content: '\00bb';
      position: absolute;
      opacity: 0;
      top: 0;
      right: -20px;*/
      /*transition: 0.5s;*/
    /*}

    .payment:hover span {
      padding-right: 25px;
      background: green;
    }

    .payment:hover span:after {
      opacity: 1;
      right: 0;
    }*/
    .notallowed:hover{
      cursor: not-allowed;
      background: red;


    }
    .notallowed{
      background: red;
      opacity:0.6;
    }
    .jumbotron {
      margin:20px;
      margin-right: 10px;
        max-width: 500px;
        background: rgb(255, 255, 204,0.9)
    }
  </style>
</head>
  <body>
  <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
       <li><a href="home.html"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>LOGOUT</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

    <center><span style="background-color:red"><h1>MAKE MY TRIP</h1></span>
      <table>
        <tr>
          <td style="background-color:#2f47e2" align="center">LIKE US ON </td><td> <a href="https://www.facebook.com"><span class="fa fa-facebook"></span> </a> </td></tr>
         <tr>
          <td style="background-color:#2fbee2">FOLLOW US ON </td><td> <a href="https://www.twitter.com"><span class="fa fa-twitter"></span> </a></td>
        </tr>
      </table>

      <div class="jumbotron" align="center">
        <form action="place1.php" method="post">
        <table>
      <!-- <tr><td>ENTER USER NAME:</td><td><input type="text" name=user placeholder="user name"  class="form-control" required></td></tr> -->
      <tr><td>ENTER ORIGIN:</td><td><input type="text" name=origin placeholder="origin"  class="form-control" required></td></tr>
      <tr><td>ENTER DESTINATION:</td><td><input type="text" name=destination placeholder="destination"  class="form-control" required></td></tr>
    </table>
      <center> <input type="submit" class="btn btn-default navbar-btn" name="submit" value="SEARCH"> </center>
    </form>
      </div>
  </body>
</html>


<?php
  if(isset($_POST['submit'])){
    // $user=$_POST['user'];
    $origin=$_POST['origin'];
    $destination=$_POST['destination'];
    $con=new mysqli("localhost","root","","userdetails");
    $sql="select name,seats,links from busdetails1 where origin='$origin' and destination='$destination'";
    // if($con->query($sql)==true){
    //   echo "true";
    // }
    // else{
    //   echo "false";
    // }
    $result=$con->query($sql);
    if($result->num_rows>0){
      echo "<table border=1 align=center style=background-color:#dadfe8>";
      echo "<tr style=background-color:red>";
      echo "<th>NAME OF THE BUS</th><th>SEATS AVAILABLE</th>";
      echo "</tr>";
      while($row=$result->fetch_assoc()){
        echo "<tr align=center>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['seats']."</td>";
        echo "<td><a href=".$row['links'].">VIEW SEATS</td>";
        echo "</tr>";
      }
      echo "</table>";
    }
    else{
      echo "SORRY FOR THE INCONVENIENCE WE DO NOT HAVE SERVICES FOR THE ORIGIN AND DESTINATION YOU HAVE ENTERED";
      echo "<a href=place1.php>CLICK HERE TO GO BACK TO SEARCHES</a>";
    }
  }
?>
