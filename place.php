<?php
  if(isset($_POST['submit'])){
    $user=$_POST['user'];
    $origin=$_POST['origin'];
    $destination=$_POST['destination'];
    $con=new mysqli("localhost","root","","userdetails");
    $sql="update details set origin='$origin',destination='$destination' where uname='$user'";
    if($con->query($sql)==true){
      echo "<table>";
      echo "<tr><td>SATHYA SHRAVYA TRAVELS</td><td><a href=sathya_shravya_travels.html>view seats</a></td></tr>";
      echo "</table>";
    }
    else{
      echo "error";
    }
  }
?>

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
  </head>
  <body>
    <form class="" action="place.php" method="post">
      <table>
      <tr><td>user name: </td><td><input type="text"  class="form-control"  name="user" value=""></td></tr>
      <tr><td>Pickup point:</td> <td><input type="text"  class="form-control"  name="origin" value=""></td></tr>
      <tr><td>Destination: </td><td><input type="text"   class="form-control" name="destination" value=""></td></tr>
      <tr><td><input type="submit" name="submit" value="search"></td>
    </table>
    </form>
  </body>
</html>
