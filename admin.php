
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
   <center> <h1 style="color: rgb(135, 135, 136);">Attendance System</h1><br>&nbsp;&nbsp;&nbsp;&nbsp;<br>
  <div class="login"> <h2><hr>teachers  Login Form<hr></h2>
   <form  method="post">
   <input type="text" name="username" id= "username" placeholder="    username" ><br>&nbsp;<br>
   <input type="password" name="password" id= "password" placeholder="    password" ><br>&nbsp;<br>
   <p><input type="submit" name = "submit" id=" submit" value = " Login "><br>&nbsp;<br> <a href="#" >forgot password</a></p>
  </center>
</div>
</form>
 <?php 
     $con = mysqli_connect("localhost","root","") or die(mysql_error());

     mysqli_select_db($con,"events") or die(mysql_error());
   if(isset($_POST["submit"])){
     $count= 0;
     $res = mysqli_query($con ,"select * from admin  where name = '$_POST[username]' && password = '$_POST[password]'");
     $count = mysqli_num_rows($res);
     if( $count ==0){
        ?>
        <div class = "alert">
         <center><strong>Invalid</strong> username or password</center> 
      </div>
<?php
     }
     else{
        header("Location: Attendance.php");
     }
     
   }

 ?>
</body>
</html>