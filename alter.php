<?php
  if(isset($_POST['submit'])){
    $seats=$_POST['seats'];
    $name="sathya";
    $con=new mysqli("localhost","root","","userdetails");
    $sql="select seats from busdetails where name='$name'";
    $result=$con->query($sql);
    if($row=$result->fetch_assoc()){
      $change=$row['seats']-$seats;
      echo "$change";
      $sql1="update busdetails set seats='$change' where name='$name'";
      if($con->query($sql1)){
        echo "successi";
      }
      else{
        echo "falsei";
      }
    }
    else{
      echo "false";
    }
  }
?>
