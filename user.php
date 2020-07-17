<?php
   $mail = $_POST['email'];
   if (!empty($mail)){
       $host = "x40p5pp7n9rowyv6.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
       $dbusername = "xc92enr5vwyhm5bj";
       $dbpassword = "hmqpu450mfsp58ch";
       $dbname = "a7n0q89zv99c80u0";

       // Create connection
       $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
       if (mysqli_connect_error()){
       die('Connect Error ('. mysqli_connect_errno() .') '
       . mysqli_connect_error());
       }
       else{
       $sql = "INSERT INTO users(email) values ('$mail')";
       if ($conn->query($sql)){
       echo "successfully subscribed";
       }
       else{
       echo "Error: ". $sql ."
       ". $conn->error;
       }
       $conn->close();
       }
   }  
   else{
   echo "fill mail please";
   die();
   }
  
?>