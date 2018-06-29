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
      margin-top: 280px;
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
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <!-- <li class="active"><a href="place1.php">GO BACK TO BOOK TICKETS</a></li> -->

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">OUR TRAVELS<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">SATHYA TRAVELS</a></li>
            <li><a href="#">SAI TRAVELS</a></li>

            <li role="separator" class="divider"></li>
            <li><a href="#">DURGA TRAVELS</a></li>
            <li><a href="#">ALEKHYA TRAVELS</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
       <li><a href="#"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>LOGOUT</a></li>


      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>








<?php

  if(isset($_POST['submit'])){
    $user=$_POST['un'];
    $password=$_POST['pw'];
    // echo "$user";
    // echo "$password";

    $con=new mysqli("localhost","root","","userdetails");
    $sql="select * from details where uname='$user'";
    $result=$con->query($sql);
    // if($con->query($sql)==true){
    //   echo "success";
    // }
    // else{
    //   echo "eror";
    // }
    while($row=$result->fetch_assoc()){
    //  echo "$row['pass']";

      if($row['pass']==$password){
        echo "<html>";
				echo "<body>";
				echo "<div class=jumbotron style=margin-left:450px>";
				echo "<center>YOU HAVE SUCCESSFULLY LOGGED IN<br>";
				echo "<a href=place1.php>SEARCH BUSES</a></center>";
				echo "</div>";
				echo "</body>";
				echo "</html>";

      }
      else{
        echo "error";
      }
    }
    // $result=$con->query($sql);
    // while($row=$result->fetch_assoc()){
    //   if($row['pass']==$password){
    //     echo "success";
    //   }
    //   else{
    //     echo "error";
    //   }
    // }
  }
?>


<!-- <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="place.php" method="post">
      <h1>YOU HAVE SUCCESSFULLY LOGGED IN</h1>
      user name: <input type="text" name="user" value="">
      Pickup point: <input type="text" name="origin" value="">
      Destination: <input type="text" name="destination" value="">
      <input type="submit" name="submit" value="search">
    </form>
  </body> -->
</body>
</html>
